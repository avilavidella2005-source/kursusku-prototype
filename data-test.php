<?php
declare(strict_types=1);
require __DIR__ . '/helpers.php';

$string = "KursusKu";
$integer = 2026;
$float = 3.14;
$bool = true;
$array = ["PHP", "MySQL"];
$null = null;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Type Data Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        :root { --brand: #0f766e; --brand-dark: #0b5f55; --surface: #fff; --soft: #eef8f5; --text: #16332c; --muted: #4b635d; --line: #d1e7dd; }
        body { background: linear-gradient(180deg, #eaf7f2 0%, #fff 100%); min-height: 100vh; margin: 0; font-family: system-ui, sans-serif; }
        .site-header { background: var(--brand); padding: 0.9rem 0; }
        .site-header .container { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; display: flex; justify-content: space-between; align-items: center; }
        .site-header .brand { color: #fff; font-weight: 800; font-size: 1.2rem; text-decoration: none; }
        .site-header nav a { color: #d1f2e4; text-decoration: none; margin-left: 1.2rem; font-size: 0.9rem; }
        .site-header nav a.btn-nav { background: #fff; color: var(--brand-dark); padding: 0.4rem 1rem; border-radius: 0.5rem; font-weight: 700; }
        .test-card { max-width: 680px; margin: 4rem auto; background: var(--surface); border-radius: 1.25rem; padding: 2.5rem; box-shadow: 0 15px 40px -10px rgba(15,118,110,0.15); position: relative; overflow: hidden; }
        .test-card::before { content: ""; position: absolute; top: 0; left: 0; width: 60%; height: 4px; background: var(--brand); }
        .test-header { display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem; }
        .test-header .icon { font-size: 1.6rem; color: var(--brand-dark); font-weight: 700; }
        .test-header h1 { margin: 0; font-size: 1.8rem; color: var(--text); font-weight: 800; }
        .test-subtitle { color: var(--muted); font-size: 0.95rem; margin: 0 0 1.75rem; }
        hr { border: none; border-top: 1px solid var(--line); margin: 1rem 0 1.5rem; }
        .data-list { display: grid; gap: 0.6rem; margin-bottom: 2rem; }
        .data-item { display: flex; justify-content: space-between; padding: 0.75rem 1rem; background: var(--soft); border-radius: 0.6rem; border: 1px solid var(--line); font-size: 0.9rem; }
        .data-key { font-weight: 700; color: var(--brand-dark); font-family: monospace; }
        .data-value { color: var(--text); font-family: monospace; }
        .btn-back { display: inline-block; background: var(--brand); color: #fff; text-decoration: none; padding: 0.75rem 1.5rem; border-radius: 0.6rem; font-weight: 700; font-size: 0.95rem; }
        .btn-back:hover { background: var(--brand-dark); }
        .site-footer { text-align: center; padding: 1.5rem 0; background: #0b1f1c; color: #9cb8b0; font-size: 0.85rem; margin-top: 4rem; }
    </style>
</head>
<body>
<header class="site-header">
    <div class="container">
        <a href="index.php" class="brand">KursusKu</a>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="loop-lab.php">Loop Lab</a>
            <a href="history-dummy.php">History</a>
            <a href="register.php" class="btn-nav">Daftar</a>
        </nav>
    </div>
</header>
<main>
    <div class="test-card">
        <div class="test-header"><span class="icon">🚀</span><h1>Type Data Test</h1></div>
        <p class="test-subtitle">Uji tipe data lanjutan (gettype, var_export).</p>
        <hr>
        <div class="data-list">
            <div class="data-item"><span class="data-key">string</span><span class="data-value"><?= var_export($string, true) ?> (<?= gettype($string) ?>)</span></div>
            <div class="data-item"><span class="data-key">integer</span><span class="data-value"><?= var_export($integer, true) ?> (<?= gettype($integer) ?>)</span></div>
            <div class="data-item"><span class="data-key">float</span><span class="data-value"><?= var_export($float, true) ?> (<?= gettype($float) ?>)</span></div>
            <div class="data-item"><span class="data-key">boolean</span><span class="data-value"><?= var_export($bool, true) ?> (<?= gettype($bool) ?>)</span></div>
            <div class="data-item"><span class="data-key">array</span><span class="data-value"><?= var_export($array, true) ?> (<?= gettype($array) ?>)</span></div>
            <div class="data-item"><span class="data-key">null</span><span class="data-value"><?= var_export($null, true) ?> (<?= gettype($null) ?>)</span></div>
        </div>
        <a href="index.php" class="btn-back">← Kembali ke Beranda</a>
    </div>
</main>
<footer class="site-footer"><p>&copy; <?= date('Y') ?> KursusKu - Praktikum Pemrograman Web III.</p></footer>
</body>
</html>