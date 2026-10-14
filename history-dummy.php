<?php

$siteName = 'KursusKu';

$registrations = [
    [
        'name'           => 'avila vidella',
        'email'          => 'avilavidella@gmail.com',
        'phone'          => '081234567890',
        'studyProgram'   => 'PTIK',
        'course'         => 'PHP Dasar',
        'participantType'=> 'Mahasiswa',
        'interest'       => ['Frontend', 'Backend', 'Database'],
        'learningMethod' => 'Online',
        'package'        => 1,
        'note'           => 'Saya ingin belajar pemrograman web dari dasar.'
    ],
    [
        'name'           => 'Budi',
        'email'          => 'budi@gmail.com',
        'phone'          => '081234567891',
        'studyProgram'   => 'Pendidikan Informatika',
        'course'         => 'Laravel Fundamental',
        'participantType'=> 'Guru',
        'interest'       => ['Backend', 'Database'],
        'learningMethod' => 'Online',
        'package'        => 1,
        'note'           => 'Ingin meningkatkan kemampuan membuat aplikasi web.'
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
    <style>
        :root {
            --brand: #0f766e;
            --brand-dark: #0b5f55;
            --surface: #ffffff;
            --soft: #eef8f5;
            --text: #16332c;
            --muted: #4b635d;
            --line: #d1e7dd;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #eaf7f2 0%, #ffffff 100%);
            min-height: 100vh;
            color: var(--text);
        }
        .site-header { background: var(--brand); padding: 0.9rem 0; }
        .site-header .container {
            max-width: 1100px; margin: 0 auto; padding: 0 1.5rem;
            display: flex; justify-content: space-between; align-items: center;
            flex-wrap: wrap; gap: 0.75rem;
        }
        .site-header .brand { color: #fff; font-weight: 800; font-size: 1.2rem; text-decoration: none; }
        .site-header nav a {
            color: #d1f2e4; text-decoration: none;
            margin-left: 1.2rem; font-size: 0.9rem;
        }
        .site-header nav a:hover { color: #fff; }

        .page-intro { padding: 2.5rem 0 1rem; text-align: center; }
        .page-intro h1 { color: var(--brand-dark); margin: 0 0 0.5rem; font-size: 1.8rem; }
        .page-intro p { color: var(--muted); margin: 0; font-size: 0.95rem; }
        .eyebrow {
            display: inline-block; background: var(--soft); color: var(--brand-dark);
            font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.8rem;
            border-radius: 999px; margin-bottom: 0.75rem;
            letter-spacing: 0.05em;
        }

        .container { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; }

        .form-card {
            background: var(--surface); border: 1px solid var(--line);
            border-radius: 1.25rem; padding: 2rem;
            box-shadow: 0 15px 40px -10px rgba(15, 118, 110, 0.15);
            margin: 1.5rem 0 3rem;
            position: relative; overflow: hidden;
        }
        .form-card::before {
            content: ""; position: absolute; top: 0; left: 0;
            width: 60%; height: 4px; background: var(--brand);
        }
        .form-card h2 { color: var(--brand-dark); margin: 0 0 1.25rem; font-size: 1.4rem; }

        table { width: 100%; border-collapse: collapse; }
        th, td {
            padding: 0.75rem 0.9rem; text-align: left;
            border-bottom: 1px solid var(--line); font-size: 0.85rem;
            vertical-align: top;
        }
        th {
            background: #f8fafc; color: var(--muted);
            font-size: 0.75rem; text-transform: uppercase;
            letter-spacing: 0.05em; font-weight: 700;
        }
        tbody tr:hover { background: #fbfdfc; }
        td:first-child { font-weight: 700; color: var(--brand); }

        .footer {
            text-align: center; padding: 1.5rem 0;
            background: #0b1f1c; color: #9cb8b0;
            font-size: 0.85rem; margin-top: 3rem;
        }

        @media (max-width: 640px) {
            th, td { font-size: 0.75rem; padding: 0.5rem; }
        }
    </style>
</head>

<body>

<header class="site-header">
    <div class="container">
        <a href="index.php" class="brand"><?= htmlspecialchars($siteName) ?></a>
        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="register.php">Daftar Kursus</a>
        </nav>
    </div>
</header>

<main>

    <section class="page-intro">
        <div class="container">
            <p class="eyebrow">Week 06</p>
            <h1>History Pendaftaran</h1>
            <p>Data dummy riwayat pendaftaran peserta KursusKu.</p>
        </div>
    </section>

    <section class="container">
        <div class="form-card">
            <h2>Riwayat Pendaftaran</h2>
            <div style="overflow-x: auto;">
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
                        <?php foreach ($registrations as $index => $data): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($data['name']) ?></td>
                                <td><?= htmlspecialchars($data['email']) ?></td>
                                <td><?= htmlspecialchars($data['phone']) ?></td>
                                <td><?= htmlspecialchars($data['studyProgram']) ?></td>
                                <td><?= htmlspecialchars($data['course']) ?></td>
                                <td><?= htmlspecialchars($data['participantType']) ?></td>
                                <td><?= htmlspecialchars(implode(', ', $data['interest'])) ?></td>
                                <td><?= htmlspecialchars($data['learningMethod']) ?></td>
                                <td><?= htmlspecialchars($data['package']) ?> paket</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?= date('Y') ?> KursusKu</p>
    </div>
</footer>

</body>

</html>