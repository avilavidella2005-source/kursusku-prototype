<?php
// Tentukan hak akses menggunakan Bitwise Flag
define('PERMISSION_READ', 1);   // 0001 (1)
define('PERMISSION_WRITE', 2);  // 0010 (2)
define('PERMISSION_DELETE', 4); // 0100 (4)

// Kombinasi izin yang diberikan (Hanya READ dan WRITE)
$permission = PERMISSION_READ | PERMISSION_WRITE; // Nilai: 3 (0011)

// Pengecekan apakah user memiliki hak akses DELETE
$canDelete = ($permission & PERMISSION_DELETE) !== 0; // Evaluasi: false
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Coba Bitwise - KursusKu</title>
    <style>
        :root {
            --brand: #0f766e;
            --brand-dark: #0b5f55;
            --surface: #ffffff;
            --soft: #eef8f5;
            --text: #16332c;
            --muted: #4b635d;
            --line: #d1e7dd;
            --danger: #a61b1b;
            --danger-bg: #fdeaea;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #eaf7f2 0%, #ffffff 100%);
            min-height: 100vh;
            color: var(--text);
        }

        .container {
            max-width: 760px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .header h2 {
            margin: 0;
            font-size: 1.1rem;
            color: var(--brand-dark);
        }

        .brand {
            color: var(--brand);
            text-decoration: none;
            font-weight: 800;
        }

        .btn-back {
            display: inline-block;
            background: var(--brand);
            color: #fff;
            text-decoration: none;
            padding: 0.55rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.85rem;
            font-weight: 700;
            transition: background 0.2s ease;
        }

        .btn-back:hover { background: var(--brand-dark); }

        .card {
            background: var(--surface);
            border: 1px solid var(--line);
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
            background: var(--brand);
        }

        .card h3 {
            margin: 0 0 0.4rem;
            color: var(--brand-dark);
            font-size: 1.4rem;
        }

        .subtitle {
            margin: 0 0 1.5rem;
            color: var(--muted);
            font-size: 0.9rem;
        }

        code {
            background: var(--soft);
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
            font-size: 0.85em;
            color: var(--brand-dark);
        }

        .result-box {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .info-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 0.75rem;
            padding: 0.9rem 1.1rem;
            flex-wrap: wrap;
        }

        .info-group label {
            font-weight: 700;
            color: var(--muted);
            font-size: 0.9rem;
        }

        .info-group .value {
            font-family: monospace;
            font-weight: 700;
            color: var(--brand-dark);
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .badge-danger {
            background: var(--danger-bg);
            color: var(--danger);
        }

        .badge-success {
            background: #e7f8ef;
            color: #146c43;
        }

        .debug-box {
            background: #0b1f1c;
            color: #d1f2e4;
            border-radius: 0.75rem;
            padding: 1rem 1.2rem;
            font-size: 0.9rem;
        }

        .debug-box strong {
            display: block;
            margin-bottom: 0.5rem;
            color: #ffffff;
            font-size: 0.85rem;
        }

        .debug-box pre {
            margin: 0;
            font-family: monospace;
            font-size: 0.9rem;
            color: #7ee2b8;
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <h2><a href="index.php" class="brand">KursusKu</a> / Test Bitwise Permission</h2>
            <a href="index.php" class="btn-back">&larr; Kembali ke Landing Page</a>
        </header>

        <main class="card">
            <h3>Hasil Pengujian Izin Akses (Bitwise Test)</h3>
            <p class="subtitle">Pengujian kombinasi izin <code>READ</code> dan <code>WRITE</code> tanpa <code>DELETE</code>.</p>

            <div class="result-box">
                <div class="info-group">
                    <label>Nilai Permission Saat Ini:</label>
                    <span class="value"><?php echo $permission; ?> (READ | WRITE)</span>
                </div>

                <div class="info-group">
                    <label>Apakah Boleh Menghapus (Delete)?</label>
                    <?php if ($canDelete): ?>
                        <span class="badge badge-success">TRUE (Diizinkan)</span>
                    <?php else: ?>
                        <span class="badge badge-danger">FALSE (Tidak Diizinkan)</span>
                    <?php endif; ?>
                </div>

                <div class="debug-box">
                    <strong>Hasil Debug <code>var_dump($canDelete)</code>:</strong>
                    <pre><?php var_dump($canDelete); ?></pre>
                </div>
            </div>
        </main>
    </div>

</body>
</html>