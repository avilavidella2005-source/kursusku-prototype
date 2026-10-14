<?php
declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

// ===== DATA KURSUS =====
$courses = [
    ['code' => 'WEB-01', 'name' => 'Web Dasar', 'fee' => 200000, 'quota' => 30, 'registered' => 12, 'start_date' => '2026-09-21'],
    ['code' => 'PHP-01', 'name' => 'PHP Dasar', 'fee' => 250000, 'quota' => 30, 'registered' => 18, 'start_date' => '2026-09-22'],
    ['code' => 'PHP-02', 'name' => 'PHP Lanjutan', 'fee' => 300000, 'quota' => 25, 'registered' => 24, 'start_date' => '2026-09-24'],
    ['code' => 'LAR-01', 'name' => 'Laravel Fundamental', 'fee' => 350000, 'quota' => 25, 'registered' => 25, 'start_date' => '2026-09-28'],
    ['code' => 'DB-01', 'name' => 'MySQL Dasar', 'fee' => 275000, 'quota' => 20, 'registered' => 0, 'start_date' => '2026-10-01'],
    ['code' => 'UI-01', 'name' => 'UI Web Dasar', 'fee' => 225000, 'quota' => 35, 'registered' => 9, 'start_date' => '2026-10-03'],
];

// ===== DATA LATIHAN PRAKTIKUM =====
$labItems = [
    ['icon' => '🔄', 'title' => 'Loop Lab', 'desc' => 'Latihan for, while, do-while, foreach, break, continue.', 'link' => 'loop-lab.php'],
    ['icon' => '📜', 'title' => 'History', 'desc' => 'Riwayat pendaftaran peserta kursus.', 'link' => 'history-dummy.php'],
    ['icon' => '➕', 'title' => 'Operator Test', 'desc' => 'Latihan operator aritmatika PHP.', 'link' => 'operator-test.php'],
    ['icon' => '🔤', 'title' => 'String Test', 'desc' => 'Latihan manipulasi string di PHP.', 'link' => 'string-test.php'],
    ['icon' => '🧠', 'title' => 'Logic Test', 'desc' => 'Latihan operator logika (AND, OR, NOT, XOR).', 'link' => 'logic-test.php'],
    ['icon' => '📦', 'title' => 'Data Test', 'desc' => 'Latihan tipe data PHP.', 'link' => 'data-test.php'],
    ['icon' => '🔢', 'title' => 'Bitwise Test', 'desc' => 'Latihan operator bitwise PHP.', 'link' => 'bitwise-test.php'],
    ['icon' => '⚙️', 'title' => 'Procedure Test', 'desc' => 'Latihan fungsi dan prosedur di PHP.', 'link' => 'procedure-test.php'],
    ['icon' => '🧪', 'title' => 'Test Functions', 'desc' => 'Uji fungsi helper (formatRupiah, dll).', 'link' => 'test-functions.php'],
    ['icon' => '📊', 'title' => 'Text Matrix', 'desc' => 'Latihan array multidimensi.', 'link' => 'test-matrix.php'],
    ['icon' => '🚀', 'title' => 'Type Data Test', 'desc' => 'Uji tipe data lanjutan (gettype, var_export).', 'link' => 'type-data-test.php'],
    ['icon' => '⏰', 'title' => 'Server Time', 'desc' => 'Menampilkan waktu server (Asia/Jakarta).', 'link' => 'server-time.php'],
    ['icon' => '👋', 'title' => 'Hello World', 'desc' => 'Latihan dasar PHP pertama.', 'link' => 'hello.php'],
    ['icon' => '🔗', 'title' => 'GET Demo', 'desc' => 'Demo pengiriman data via URL (metode GET).', 'link' => 'get-demo.php'],
    ['icon' => '🖥️', 'title' => 'Process Demo', 'desc' => 'Demo pemrosesan form sederhana.', 'link' => 'process.php'],
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KursusKu - Platform Belajar Kursus Online</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    :root {
      --brand: #0f766e;
      --brand-dark: #0b5f55;
      --brand-accent: #22c55e;
      --surface: #ffffff;
      --soft: #eef8f5;
      --text: #16332c;
      --muted: #4b635d;
      --line: #d1e7dd;
    }

    /* Header & Logo */
    .brand-container {
      display: flex;
      align-items: center;
      gap: 0.65rem;
      text-decoration: none;
      color: var(--brand-dark);
      font-weight: 800;
      font-size: 1.25rem;
    }
    .brand-logo-img {
      height: 38px;
      width: auto;
      object-fit: contain;
    }

    /* Hero Banner */
    .hero-wrapper {
      display: grid;
      grid-template-columns: 1.15fr 0.85fr;
      align-items: center;
      gap: 2.5rem;
      background: linear-gradient(145deg, #ffffff 0%, #eaf7f2 100%);
      border: 1px solid var(--line);
      border-radius: 1.5rem;
      padding: 3rem;
      margin: 2rem 0;
      box-shadow: 0 10px 25px -5px rgba(15, 118, 110, 0.07);
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      background: #d1f2e4;
      color: var(--brand-dark);
      font-size: 0.85rem;
      font-weight: 700;
      padding: 0.35rem 1rem;
      border-radius: 999px;
      margin-bottom: 1.2rem;
      letter-spacing: 0.03em;
    }
    .hero-badge::before {
      content: "";
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--brand-accent);
    }
    .hero-content h1 {
      font-size: clamp(2rem, 3.2vw, 2.7rem);
      color: var(--brand-dark);
      margin: 0 0 1rem;
      line-height: 1.2;
    }
    .hero-content p {
      color: var(--muted);
      margin: 0 0 1.75rem;
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .hero-actions {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .hero-image-box img {
      width: 100%;
      height: 340px;
      object-fit: cover;
      border-radius: 1.25rem;
      box-shadow: 0 12px 24px -4px rgba(15, 118, 110, 0.18);
      border: 3px solid #ffffff;
    }

    /* Metric Bar */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.2rem;
      margin-bottom: 2.5rem;
    }
    .stat-card {
      background: var(--surface);
      border: 1px solid var(--line);
      border-radius: 1rem;
      padding: 1.25rem;
      text-align: center;
      transition: transform 0.2s ease;
    }
    .stat-card:hover { transform: translateY(-3px); }
    .stat-number {
      font-size: 1.9rem;
      font-weight: 800;
      color: var(--brand);
      line-height: 1.1;
      margin-bottom: 0.25rem;
    }
    .stat-label {
      font-size: 0.85rem;
      color: var(--muted);
      font-weight: 500;
    }

    /* Media Video */
    .media-card {
      background: var(--surface);
      border: 1px solid var(--line);
      border-radius: 1.25rem;
      padding: 2rem;
      margin-bottom: 2.5rem;
    }
    .media-layout {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 2rem;
      align-items: center;
    }
    .video-box {
      width: 100%;
      border-radius: 1rem;
      overflow: hidden;
      background: #000;
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    .video-box video {
      width: 100%;
      display: block;
      border-radius: 1rem;
    }
    .media-text h3 {
      color: var(--brand-dark);
      margin-top: 0;
      font-size: 1.4rem;
    }
    .media-text p {
      color: var(--muted);
      font-size: 0.95rem;
      line-height: 1.6;
    }

    /* Tabel Katalog */
    .table-container {
      overflow-x: auto;
      border-radius: 0.85rem;
      border: 1px solid var(--line);
      margin-top: 1.25rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: var(--surface);
    }
    th, td {
      padding: 0.95rem 1.1rem;
      text-align: left;
      border-bottom: 1px solid var(--line);
    }
    th {
      background: #f8fafc;
      font-weight: 700;
      color: var(--muted);
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    tbody tr:hover { background: #fbfdfc; }
    .course-code {
      font-family: monospace;
      font-size: 0.85rem;
      background: #eef8f5;
      color: var(--brand-dark);
      padding: 3px 8px;
      border-radius: 6px;
      font-weight: 700;
    }
    .course-title { font-weight: 700; color: var(--text); }
    .badge-available, .badge-full {
      display: inline-block;
      padding: 4px 10px;
      border-radius: 999px;
      font-size: 0.8rem;
      font-weight: 700;
    }
    .badge-available { background: #e7f8ef; color: #146c43; }
    .badge-full { background: #fdeaea; color: #a61b1b; }

    .btn-secondary {
      display: inline-block;
      border: 1.5px solid var(--brand);
      border-radius: 0.7rem;
      padding: 0.8rem 1.2rem;
      background: transparent;
      color: var(--brand);
      text-decoration: none;
      font-weight: bold;
      transition: all 0.2s ease;
    }
    .btn-secondary:hover { background: var(--soft); }

    /* Estimasi Biaya Banner */
    .estimate-banner {
      background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
      border-radius: 1.25rem;
      padding: 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1.5rem;
      color: #fff;
      margin: 2.5rem 0;
      flex-wrap: wrap;
    }
    .estimate-banner h3 {
      margin: 0 0 0.5rem;
      font-size: 1.4rem;
      color: #fff;
    }
    .estimate-banner p {
      margin: 0;
      font-size: 0.95rem;
      color: #d1f2e4;
      max-width: 500px;
    }
    .estimate-banner .btn-light {
      background: #fff;
      color: var(--brand-dark);
      padding: 0.8rem 1.5rem;
      border-radius: 0.7rem;
      text-decoration: none;
      font-weight: 700;
      white-space: nowrap;
    }
    .estimate-banner .btn-light:hover { transform: scale(1.03); }

    /* Cara Mendaftar */
    .steps-section {
      text-align: center;
      margin: 3rem 0;
    }
    .steps-section h2 {
      color: var(--brand-dark);
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }
    .steps-section > p {
      color: var(--muted);
      margin-bottom: 2rem;
    }
    .steps-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1.5rem;
      text-align: left;
    }
    .step-card {
      background: var(--surface);
      border: 1px solid var(--line);
      border-radius: 1rem;
      padding: 1.5rem;
    }
    .step-number {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--brand);
      color: #fff;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .step-card h4 {
      margin: 0 0 0.5rem;
      color: var(--brand-dark);
      font-size: 1rem;
    }
    .step-card p {
      margin: 0;
      font-size: 0.85rem;
      color: var(--muted);
      line-height: 1.5;
    }

    /* Latihan Praktikum PHP */
    .lab-section {
      text-align: center;
      margin: 3rem 0;
    }
    .lab-section h2 {
      color: var(--brand-dark);
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }
    .lab-section > p {
      color: var(--muted);
      margin-bottom: 2rem;
    }
    .lab-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.5rem;
      text-align: left;
    }
    .lab-card {
      display: block;
      background: var(--surface);
      border: 1px solid var(--line);
      border-radius: 1rem;
      padding: 1.5rem;
      text-decoration: none;
      color: var(--text);
      transition: all 0.2s ease;
    }
    .lab-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 20px -5px rgba(15, 118, 110, 0.15);
      border-color: var(--brand);
    }
    .lab-icon {
      font-size: 1.8rem;
      margin-bottom: 0.75rem;
      display: block;
    }
    .lab-card h4 {
      margin: 0 0 0.4rem;
      color: var(--brand-dark);
      font-size: 1rem;
    }
    .lab-card p {
      margin: 0;
      font-size: 0.82rem;
      color: var(--muted);
      line-height: 1.5;
    }

    /* Responsive */
    @media (max-width: 860px) {
      .hero-wrapper {
        grid-template-columns: 1fr;
        padding: 2rem;
        text-align: center;
      }
      .hero-actions { justify-content: center; }
      .media-layout { grid-template-columns: 1fr; }
      .hero-image-box img { height: 250px; }
      .estimate-banner {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand-container" href="index.php">
      <img src="assets/images/logo.png" alt="Logo KursusKu" class="brand-logo-img" onerror="this.style.display='none'">
      <span>KursusKu</span>
    </a>
    <nav aria-label="Navigasi utama">
      <a href="index.php"><strong>Beranda</strong></a>
      <a href="#katalog">Katalog Kursus</a>
      <a href="fee-calculator.php">Kalkulator Biaya</a>
      <a href="history-dummy.php">Riwayat Pendaftaran</a>
      <a href="loop-lab.php">Loop Lab</a>
      <a href="register.php" class="btn-primary" style="padding: 0.45rem 1rem; font-size: 0.9rem;">Daftar Kursus</a>
    </nav>
  </div>
</header>

<main class="container">

  <!-- HERO SECTION -->
  <section class="hero-wrapper">
    <div class="hero-content">
      <span class="hero-badge">Platform Pembelajaran Masa Depan</span>
      <h1>Tumbuh & Kuasai Keterampilan Coding Bersama KursusKu</h1>
      <p>Kurikulum intensif berbasis praktik nyata yang dirancang sistematis dari fondasi logika dasar hingga pembuatan aplikasi web modern.</p>
      <div class="hero-actions">
        <a class="btn-primary" href="register.php">Daftar Kursus Sekarang</a>
        <a class="btn-secondary" href="fee-calculator.php">Simulasi Estimasi Biaya</a>
      </div>
    </div>
    <div class="hero-image-box">
      <img src="assets/images/hero-kursus.jpg" alt="Mahasiswa sedang mengikuti kegiatan kursus komputer">
    </div>
  </section>

  <!-- METRIC BAR -->
  <section class="stats-grid">
    <div class="stat-card">
      <div class="stat-number">6</div>
      <div class="stat-label">Pilihan Kursus Unggulan</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">100%</div>
      <div class="stat-label">Studi Kasus Proyek Nyata</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">Terakreditasi</div>
      <div class="stat-label">Kurikulum Standar Industri</div>
    </div>
  </section>

  <!-- MEDIA VIDEO -->
  <section id="media" class="media-card">
    <div class="media-layout">
      <div class="video-box">
        <video controls>
          <source src="assets/video/intro-kursus.mp4" type="video/mp4">
          Browser Anda tidak mendukung pemutar video HTML5.
        </video>
      </div>
      <div class="media-text">
        <span class="hero-badge" style="margin-bottom: 0.5rem;">Video Pengenalan</span>
        <h3>Kenali Metode Belajar Praktis di KursusKu</h3>
        <p>Lihat bagaimana alur pembelajaran kami mengombinasikan pemahaman konsep teori dengan eksperimen kode langsung di laboratorium komputer kampus.</p>
        <p>Pelajari juga standar sintaks resmi melalui <a href="https://www.php.net/" target="_blank" rel="noopener" style="font-weight: bold;">Dokumentasi Resmi PHP</a>.</p>
      </div>
    </div>
  </section>

  <!-- KATALOG KURSUS -->
  <section id="katalog" class="form-card" style="max-width: 100%;">
    <div style="text-align: center; margin-bottom: 1.5rem;">
      <h2 style="margin: 0; color: var(--brand-dark);">Katalog Kursus & Status Kuota</h2>
      <p style="margin: 0.25rem 0 0; color: var(--muted); font-size: 0.9rem;">Pemeriksaan status ketersediaan kursi dan jadwal kelas terupdate.</p>
    </div>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama Kursus</th>
            <th>Biaya</th>
            <th>Kuota</th>
            <th>Terdaftar</th>
            <th>Sisa Kursi</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($courses as $course): ?>
            <?php
            $status = statusKursus($course['quota'], $course['registered']);
            $statusClass = ($status === 'Penuh') ? 'badge-full' : 'badge-available';
            $sisa = sisaKursi($course['quota'], $course['registered']);
            ?>
            <tr>
              <td><span class="course-code"><?= htmlspecialchars($course['code']) ?></span></td>
              <td class="course-title"><?= htmlspecialchars(trim($course['name'])) ?></td>
              <td style="font-weight: 700;"><?= rupiah($course['fee']) ?></td>
              <td><?= (int)$course['quota'] ?></td>
              <td><?= (int)$course['registered'] ?></td>
              <td><?= $sisa ?> kursi</td>
              <td><span class="<?= $statusClass ?>"><?= $status ?></span></td>
              <td>
                <?php if ($status === 'Penuh'): ?>
                  <span style="color: var(--muted); font-size: 0.85rem;">Penuh</span>
                <?php else: ?>
                  <a href="register.php?course=<?= urlencode($course['code']) ?>" class="btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.8rem; border-radius: 0.5rem;">Daftar</a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ESTIMASI BIAYA BANNER -->
  <section class="estimate-banner">
    <div>
      <h3>Estimasi Biaya Kursus</h3>
      <p>Hitung estimasi total biaya kursus berdasarkan jumlah peserta, diskon khusus, dan biaya administrasi.</p>
    </div>
    <a href="fee-calculator.php" class="btn-light">Hitung Estimasi Biaya</a>
  </section>

  <!-- CARA MENDAFTAR -->
  <section class="steps-section">
    <h2>Cara Mendaftar</h2>
    <p>5 langkah mudah untuk memulai kelas pertama Anda di KursusKu.</p>

    <div class="steps-grid">
      <div class="step-card">
        <span class="step-number">1</span>
        <h4>Pilih Kursus</h4>
        <p>Pilih kelas yang diminati pada katalog kursus di atas.</p>
      </div>
      <div class="step-card">
        <span class="step-number">2</span>
        <h4>Buka Form Pendaftaran</h4>
        <p>Klik tombol "Daftar Kursus" pada menu atau daftar katalog.</p>
      </div>
      <div class="step-card">
        <span class="step-number">3</span>
        <h4>Isi Data Diri</h4>
        <p>Lengkapi formulir dengan data diri dan informasi yang valid.</p>
      </div>
      <div class="step-card">
        <span class="step-number">4</span>
        <h4>Konfirmasi Data</h4>
        <p>Periksa kembali ringkasan data dan program pilihan Anda.</p>
      </div>
      <div class="step-card">
        <span class="step-number">5</span>
        <h4>Selesai & Simpan Bukti</h4>
        <p>Kirimkan pendaftaran dan simpan konfirmasi bukti pendaftaran Anda.</p>
      </div>
    </div>
  </section>

  <!-- LATIHAN PRAKTIKUM PHP -->
  <section class="lab-section">
    <h2>🚀 Latihan Praktikum PHP</h2>
    <p>Kumpulan file latihan untuk memperdalam materi PHP.</p>

    <div class="lab-grid">
      <?php foreach ($labItems as $item): ?>
        <a href="<?= htmlspecialchars($item['link']) ?>" class="lab-card">
          <span class="lab-icon"><?= $item['icon'] ?></span>
          <h4><?= htmlspecialchars($item['title']) ?></h4>
          <p><?= htmlspecialchars($item['desc']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </section>

</main>

<!-- FOOTER -->
<footer class="site-footer container" style="border-top: 1px solid var(--line); margin-top: 3rem; padding: 2rem 0; text-align: center; color: var(--muted); font-size: 0.875rem;">
  <p>&copy; <?= date('Y') ?> KursusKu - Praktikum Pemrograman Web III.</p>
</footer>

</body>
</html>