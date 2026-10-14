<?php
declare(strict_types=1);

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';

// Pastikan request adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

// Ambil data dari form
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$courseCode = $_POST['course_code'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$learningMode = $_POST['learning_mode'] ?? '';
$packageCount = (int) ($_POST['package_count'] ?? 1);
$notes = $_POST['notes'] ?? '';

// Cari detail kursus
$selectedCourse = null;
foreach ($courses as $course) {
    if ($course['code'] === $courseCode) {
        $selectedCourse = $course;
        break;
    }
}

if (!$selectedCourse) {
    die("Error: Kursus tidak ditemukan.");
}

// Hitung total biaya
$totalFee = $selectedCourse['fee'] * $packageCount;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ringkasan Pendaftaran - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card">
    <span class="eyebrow">HASIL PROSES</span>
    <h1>Ringkasan Pendaftaran</h1>
    <p>Terima kasih, <strong><?= e($name) ?></strong>!</p>

    <section class="formula-box">
        <ul>
            <li><strong>Email:</strong> <?= e($email) ?></li>
            <li><strong>Kursus:</strong> <?= e($selectedCourse['name']) ?></li>
            <li><strong>Tipe Peserta:</strong> <?= e($participantType) ?></li>
            <li><strong>Metode Belajar:</strong> <?= e($learningMode) ?></li>
            <li><strong>Jumlah Paket:</strong> <?= e((string)$packageCount) ?></li>
            <li><strong>Total Biaya:</strong> <?= formatRupiah($totalFee) ?></li>
            <li><strong>Minat:</strong> <?= e(implode(', ', $interests)) ?></li>
            <li><strong>Catatan:</strong> <?= e($notes) ?></li>
        </ul>
    </section>

    <div class="button-row" style="margin-top: 20px;">
        <a href="register.php" class="button">Kembali ke Form</a>
        <a href="history-dummy.php" class="button button-secondary">Lihat History</a>
    </div>
</main>
</body>
</html>