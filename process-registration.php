<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Ambil data dari form
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['studyProgram'] ?? '');
$course = trim($_POST['course'] ?? '');
$participantType = trim($_POST['participantType'] ?? '');
$note = trim($_POST['note'] ?? '');
$source = trim($_POST['source'] ?? '');

$interest = $_POST['interest'] ?? [];

if (!is_array($interest)) {
    $interest = [$interest];
}

// Daftar kursus dan harga sesuai katalog KursusKu
$coursePrices = [
    'Web Dasar' => 200000,
    'PHP Dasar' => 250000,
    'PHP Lanjutan' => 300000,
    'Laravel Fundamental' => 350000,
    'MySQL Dasar' => 275000,
    'UI Web Dasar' => 225000
];

// Validasi
$errors = [];

if ($name === '') {
    $errors[] = 'Nama lengkap wajib diisi.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email tidak valid.';
}

if ($phone === '') {
    $errors[] = 'Nomor HP wajib diisi.';
}

if ($studyProgram === '') {
    $errors[] = 'Program Studi wajib diisi.';
}

if ($course === '' || !isset($coursePrices[$course])) {
    $errors[] = 'Kursus wajib dipilih.';
}

if ($participantType === '') {
    $errors[] = 'Jenis peserta wajib dipilih.';
}

// Jika ada kesalahan
if (!empty($errors)) {
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran Gagal - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">
    <div class="container nav-wrap">

        <a class="brand" href="index.php">
            KursusKu
        </a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="registration.php">Daftar Kursus</a>
        </nav>

    </div>
</header>

<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Pendaftaran
        </p>

        <h1>
            Pendaftaran Belum Berhasil
        </h1>

        <p>
            Silakan periksa kembali data berikut:
        </p>

    </section>

    <section class="form-card">

        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= e($error) ?></li>
            <?php endforeach; ?>
        </ul>

        <br>

        <a href="registration.php">
            Kembali ke Form Pendaftaran
        </a>

    </section>

</main>

</body>
</html>

<?php
exit;
}


// ===============================
// PERHITUNGAN HARGA KURSUS
// ===============================

$coursePrice = $coursePrices[$course];


// ===============================
// DISKON BERDASARKAN PESERTA
// ===============================

$discountPercent = match ($participantType) {
    'Mahasiswa' => 10,
    'Guru' => 15,
    'Umum' => 5,
    default => 0
};

$discount = $coursePrice * $discountPercent / 100;

$total = $coursePrice - $discount;


// ===============================
// MINAT BELAJAR
// ===============================

if (!is_array($interest)) {
    $interest = [$interest];
}

$interestText = $interest
    ? implode(', ', $interest)
    : 'Tidak ada pilihan';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Hasil Pendaftaran - KursusKu
    </title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a
            class="brand"
            href="index.php"
        >
            KursusKu
        </a>

        <nav aria-label="Navigasi utama">

            <a href="index.php">
                Beranda
            </a>

            <a href="index.php#katalog">
                Katalog
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

        </nav>

    </div>

</header>


<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Hasil Pendaftaran
        </p>

        <h1>
            Pendaftaran Berhasil!
        </h1>

        <p>
            Terima kasih, data pendaftaran kamu sudah diterima.
        </p>

    </section>


    <section class="form-card">

        <h2>
            Data Pendaftar
        </h2>

        <p>
            <strong>Nama:</strong>
            <?= e($name) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= e($email) ?>
        </p>

        <p>
            <strong>Nomor HP:</strong>
            <?= e($phone) ?>
        </p>

        <p>
            <strong>Program Studi:</strong>
            <?= e($studyProgram) ?>
        </p>

        <p>
            <strong>Kursus:</strong>
            <?= e($course) ?>
        </p>

        <p>
            <strong>Jenis Peserta:</strong>
            <?= e($participantType) ?>
        </p>

        <p>
            <strong>Minat Belajar:</strong>
            <?= e($interestText) ?>
        </p>

        <p>
            <strong>Catatan:</strong>

            <?php if ($note !== ''): ?>

                <?= nl2br(e($note)) ?>

            <?php else: ?>

                Tidak ada

            <?php endif; ?>

        </p>

        <hr>

        <h2>
            Ringkasan Biaya
        </h2>

        <p>
            <strong>Harga Kursus:</strong>
            Rp <?= number_format($coursePrice, 0, ',', '.') ?>
        </p>

        <p>
            <strong>Jenis Peserta:</strong>
            <?= e($participantType) ?>
        </p>

        <p>
            <strong>Diskon:</strong>
            <?= $discountPercent ?>%
        </p>

        <p>
            <strong>Jumlah Diskon:</strong>
            Rp <?= number_format($discount, 0, ',', '.') ?>
        </p>

        <p>
            <strong>Total Biaya:</strong>
            Rp <?= number_format($total, 0, ',', '.') ?>
        </p>

        <hr>

        <p>
            <strong>Source:</strong>
            <?= e($source) ?>
        </p>

        <br>

        <a href="registration.php">
            Daftar Lagi
        </a>

        &nbsp;&nbsp;

        <a href="index.php">
            Kembali ke Beranda
        </a>

    </section>

</main>


<footer class="site-footer">

    <div class="container">

        <small>
            &copy; <?= date('Y') ?> KursusKu
        </small>

    </div>

</footer>

</body>

</html>