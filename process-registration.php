<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

// Ambil data dari form
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = trim($_POST['course'] ?? '');
$participantType = trim($_POST['participant_type'] ?? '');
$note = trim($_POST['note'] ?? '');

// Checkbox
$interests = $_POST['interests'] ?? [];

if (!is_array($interests)) {
    $interests = [];
}

// Validasi sederhana
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
    $errors[] = 'Program studi wajib diisi.';
}

if ($course === '') {
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

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pendaftaran Gagal - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<main class="container">

    <h1>Pendaftaran Belum Berhasil</h1>

    <p>Silakan periksa kembali data berikut:</p>

    <ul>

        <?php foreach ($errors as $error): ?>

            <li>
                <?= htmlspecialchars($error) ?>
            </li>

        <?php endforeach; ?>

    </ul>

    <a href="registration.php">
        Kembali ke Form Pendaftaran
    </a>

</main>

</body>

</html>

<?php
exit;
}


// Nama kursus
$courseNames = [
    'web-dasar' => 'Web Dasar',
    'php-dasar' => 'PHP Dasar',
    'php-lanjutan' => 'PHP Lanjutan',
    'laravel-fundamental' => 'Laravel Fundamental',
    'mysql-dasar' => 'MySQL Dasar',
    'ui-web-dasar' => 'UI Web Dasar'
];

$courseName = $courseNames[$course] ?? $course;


// Nama jenis peserta
$participantNames = [
    'mahasiswa' => 'Mahasiswa',
    'umum' => 'Umum'
];

$participantName =
    $participantNames[$participantType] ?? $participantType;


// Nama minat
$interestNames = [
    'ui-ux' => 'UI/UX',
    'database' => 'Database',
    'backend' => 'Backend'
];

$selectedInterests = [];

foreach ($interests as $interest) {

    if (isset($interestNames[$interest])) {

        $selectedInterests[] =
            $interestNames[$interest];

    }

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Hasil Pendaftaran - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

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

        <nav>

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


<main>

    <section class="container">

        <h1>
            Pendaftaran Berhasil!
        </h1>

        <p>
            Terima kasih, data pendaftaran kamu sudah diterima.
        </p>

        <h2>
            Data Pendaftar
        </h2>

        <table>

            <tr>
                <th>Nama Lengkap</th>

                <td>
                    <?= htmlspecialchars($name) ?>
                </td>
            </tr>

            <tr>
                <th>Email</th>

                <td>
                    <?= htmlspecialchars($email) ?>
                </td>
            </tr>

            <tr>
                <th>Nomor HP</th>

                <td>
                    <?= htmlspecialchars($phone) ?>
                </td>
            </tr>

            <tr>
                <th>Program Studi</th>

                <td>
                    <?= htmlspecialchars($studyProgram) ?>
                </td>
            </tr>

            <tr>
                <th>Kursus</th>

                <td>
                    <?= htmlspecialchars($courseName) ?>
                </td>
            </tr>

            <tr>
                <th>Jenis Peserta</th>

                <td>
                    <?= htmlspecialchars($participantName) ?>
                </td>
            </tr>

            <tr>
                <th>Minat Tambahan</th>

                <td>

                    <?php if (!empty($selectedInterests)): ?>

                        <?= htmlspecialchars(
                            implode(', ', $selectedInterests)
                        ) ?>

                    <?php else: ?>

                        Tidak ada

                    <?php endif; ?>

                </td>
            </tr>

            <tr>
                <th>Catatan</th>

                <td>

                    <?php if ($note !== ''): ?>

                        <?= nl2br(
                            htmlspecialchars($note)
                        ) ?>

                    <?php else: ?>

                        Tidak ada

                    <?php endif; ?>

                </td>
            </tr>

        </table>

        <br>

        <a
            href="registration.php"
            class="cta"
        >
            Daftar Lagi
        </a>

        <a
            href="index.php"
            class="cta"
        >
            Kembali ke Beranda
        </a>

    </section>

</main>


<footer>

    <div class="container">

        <p>
            &copy; <?= date('Y') ?> KursusKu
        </p>

    </div>

</footer>

</body>

</html>