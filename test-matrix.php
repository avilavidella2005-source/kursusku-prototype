<?php

$siteName = 'KursusKu';

$tests = [
    [
        'no' => 1,
        'fitur' => 'Form lengkap',
        'input' => 'Semua field diisi',
        'expected' => 'Data berhasil diproses',
        'status' => 'PASS'
    ],
    [
        'no' => 2,
        'fitur' => 'Email',
        'input' => 'avilavidella@gmail.com',
        'expected' => 'Email diterima dengan format benar',
        'status' => 'PASS'
    ],
    [
        'no' => 3,
        'fitur' => 'Nomor Telepon',
        'input' => '081234567890',
        'expected' => 'Nomor telepon diterima',
        'status' => 'PASS'
    ],
    [
        'no' => 4,
        'fitur' => 'Program Studi',
        'input' => 'PTIK',
        'expected' => 'Program studi tampil pada hasil',
        'status' => 'PASS'
    ],
    [
        'no' => 5,
        'fitur' => 'Pilih Kursus',
        'input' => 'PHP Dasar',
        'expected' => 'Kursus tampil pada ringkasan',
        'status' => 'PASS'
    ],
    [
        'no' => 6,
        'fitur' => 'Tipe Peserta',
        'input' => 'Mahasiswa',
        'expected' => 'Data mahasiswa diproses',
        'status' => 'PASS'
    ],
    [
        'no' => 7,
        'fitur' => 'Checkbox Minat',
        'input' => 'Frontend, Backend, Database',
        'expected' => 'Semua minat tampil',
        'status' => 'PASS'
    ],
    [
        'no' => 8,
        'fitur' => 'Checkbox Kosong',
        'input' => 'Tidak memilih minat',
        'expected' => 'Form tetap dapat diproses',
        'status' => 'PASS'
    ],
    [
        'no' => 9,
        'fitur' => 'Metode Belajar',
        'input' => 'Online',
        'expected' => 'Metode belajar tampil',
        'status' => 'PASS'
    ],
    [
        'no' => 10,
        'fitur' => 'History Dummy',
        'input' => 'Membuka history-dummy.php',
        'expected' => 'Data history tampil',
        'status' => 'PASS'
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Test Matrix - <?= htmlspecialchars($siteName) ?>
    </title>

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

            <p class="eyebrow">
                Week 06
            </p>

            <h1>
                Test Matrix
            </h1>

            <p>
                Hasil pengujian fitur pendaftaran KursusKu.
            </p>

        </div>

    </section>


    <section class="container">

        <div class="form-card">

            <h2>
                Matriks Pengujian
            </h2>

            <div style="overflow-x: auto;">

                <table>

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Fitur yang Diuji</th>
                            <th>Input / Data</th>
                            <th>Hasil yang Diharapkan</th>
                            <th>Status</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($tests as $test): ?>

                            <tr>

                                <td>
                                    <?= $test['no'] ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($test['fitur']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($test['input']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($test['expected']) ?>
                                </td>

                                <td>
                                    <span class="badge-available">
                                        <?= htmlspecialchars($test['status']) ?>
                                    </span>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <p style="margin-top: 20px;">
                <strong>Kesimpulan:</strong>
                Seluruh pengujian berhasil dilakukan dan
                seluruh fitur yang diuji mendapatkan status PASS.
            </p>

            <div class="form-actions">

                <a
                    href="registration.php"
                    class="btn-link"
                >
                    Kembali ke Pendaftaran
                </a>

            </div>

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