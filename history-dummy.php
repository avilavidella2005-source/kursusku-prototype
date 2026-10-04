<?php

$siteName = 'KursusKu';

$history = [
    [
        'name' => 'avila vidella',
        'email' => 'avilavidella@gmail.com',
        'phone' => '081234567890',
        'studyProgram' => 'PTIK',
        'course' => 'PHP Dasar',
        'participantType' => 'Mahasiswa',
        'interest' => ['Frontend', 'Backend', 'Database'],
        'learningMethod' => 'Online',
        'package' => 1,
        'note' => 'Saya ingin belajar pemrograman web dari dasar.'
    ],
    [
        'name' => 'Budi',
        'email' => 'budi@gmail.com',
        'phone' => '081234567891',
        'studyProgram' => 'Pendidikan Informatika',
        'course' => 'Laravel Fundamental',
        'participantType' => 'Guru',
        'interest' => ['Backend', 'Database'],
        'learningMethod' => 'Online',
        'package' => 1,
        'note' => 'Ingin meningkatkan kemampuan membuat aplikasi web.'
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>History Dummy - <?= htmlspecialchars($siteName) ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a href="index.php" class="brand">
            <?= htmlspecialchars($siteName) ?>
        </a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="registration.php">Daftar Kursus</a>
        </nav>

    </div>

</header>


<main>

    <section class="page-intro">

        <div class="container">

            <p class="eyebrow">Week 06</p>

            <h1>History Pendaftaran</h1>

            <p>
                Data dummy riwayat pendaftaran peserta KursusKu.
            </p>

        </div>

    </section>


    <section class="container">

        <div class="form-card">

            <h2>Riwayat Pendaftaran</h2>

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Program Studi</th>
                        <th>Kursus</th>
                        <th>Tipe Peserta</th>
                        <th>Minat</th>
                        <th>Metode</th>
                        <th>Paket</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($history as $index => $data): ?>

                        <tr>

                            <td>
                                <?= $index + 1 ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['name']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['email']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['phone']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['studyProgram']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['course']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['participantType']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars(implode(', ', $data['interest'])) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['learningMethod']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($data['package']) ?> paket
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </section>

</main>


<footer class="footer">

    <div class="container">

        <p>
            &copy; <?= date('Y') ?> KursusKu
        </p>

    </div>

</footer>

</body>

</html>