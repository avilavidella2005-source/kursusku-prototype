<?php
declare(strict_types=1);

// Cek apakah helpers.php ada
$helpersPath = __DIR__ . '/helpers.php';
if (!file_exists($helpersPath)) {
    die('Error: File helpers.php tidak ditemukan di folder yang sama.');
}
require $helpersPath;

// Daftar fungsi yang harus ada
$requiredFunctions = ['rupiah', 'formatTanggal', 'statusKursus', 'sisaKursi', 'getDiscountPercent', 'getLearningModeLabel', 'hitungTotalBiaya', 'e'];
$missing = [];
foreach ($requiredFunctions as $fn) {
    if (!function_exists($fn)) {
        $missing[] = $fn;
    }
}
if (!empty($missing)) {
    die('Error: Fungsi berikut belum ada di helpers.php: ' . implode(', ', $missing));
}

// Data uji
$dataUji = [
    ['input' => '350000',               'output' => rupiah(350000)],
    ['input' => '2500000',              'output' => rupiah(2500000)],
    ['input' => '"2026-09-15"',         'output' => formatTanggal('2026-09-15')],
    ['input' => 'quota=25, reg=25',     'output' => statusKursus(25, 25)],
    ['input' => 'quota=25, reg=24',     'output' => statusKursus(25, 24)],
    ['input' => 'quota=30, reg=18',     'output' => sisaKursi(30, 18)],
    ['input' => 'mahasiswa',            'output' => getDiscountPercent('mahasiswa') . '%'],
    ['input' => 'guru',                 'output' => getDiscountPercent('guru') . '%'],
    ['input' => 'umum',                 'output' => getDiscountPercent('umum') . '%'],
    ['input' => 'offline',              'output' => getLearningModeLabel('offline')],
    ['input' => 'online',               'output' => getLearningModeLabel('online')],
    ['input' => 'hybrid',               'output' => getLearningModeLabel('hybrid')],
    ['input' => '350000, 2, 10, 25000', 'output' => rupiah(hitungTotalBiaya(350000, 2, 10, 25000))],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Functions - KursusKu</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #eaf7f2 0%, #ffffff 100%);
            margin: 0;
            padding: 2rem 1rem;
            color: #16332c;
            min-height: 100vh;
        }
        .card {
            max-width: 760px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #d1e7dd;
            border-radius: 1.25rem;
            padding: 2rem;
            box-shadow: 0 15px 40px -10px rgba(15, 118, 110, 0.15);
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 60%;
            height: 4px;
            background: #0f766e;
        }
        h1 {
            color: #0b5f55;
            margin: 0 0 0.5rem;
            font-size: 1.6rem;
        }
        .subtitle {
            color: #4b635d;
            margin: 0 0 1.5rem;
            font-size: 0.9rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            border-radius: 0.75rem;
            overflow: hidden;
            border: 1px solid #d1e7dd;
        }
        th, td {
            padding: 0.75rem 1rem;
            text-align: left;
            border-bottom: 1px solid #d1e7dd;
            font-size: 0.9rem;
        }
        th {
            background: #0f766e;
            color: #ffffff;
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 700;
        }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #f8fdfb; }
        td strong { color: #0b5f55; }
        code {
            background: #eef8f5;
            padding: 3px 7px;
            border-radius: 4px;
            font-family: ui-monospace, monospace;
            color: #0b5f55;
            font-size: 0.85em;
        }
        .back-btn {
            display: inline-block;
            margin-top: 1.5rem;
            background: #0f766e;
            color: #ffffff;
            padding: 0.65rem 1.3rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            transition: background 0.2s ease;
        }
        .back-btn:hover { background: #0b5f55; }
    </style>
</head>
<body>
    <div class="card">
        <h1>🧪 Test Functions</h1>
        <p class="subtitle">Hasil pengujian fungsi-fungsi di <code>helpers.php</code>.</p>

        <table>
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Input</th>
                    <th>Output</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataUji as $i => $row): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><code><?= e($row['input']) ?></code></td>
                        <td><strong><?= e($row['output']) ?></strong></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php" class="back-btn">← Kembali ke Beranda</a>
    </div>
</body>
</html>