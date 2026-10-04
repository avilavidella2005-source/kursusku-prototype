<?php

$siteName = 'KursusKu';

$courses = [
    'Web Dasar',
    'PHP Dasar',
    'PHP Lanjutan',
    'Laravel Fundamental',
    'MySQL Dasar',
    'UI Web Dasar'
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Kursus - <?= htmlspecialchars($siteName) ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <!-- Logo -->
        <a href="index.php" class="brand">
            <?= htmlspecialchars($siteName) ?>
        </a>

        <!-- Navigasi -->
        <nav aria-label="Navigasi utama">

            <a href="index.php">Beranda</a>

            <a href="index.php#katalog">Katalog</a>

            <a href="registration.php">Daftar Kursus</a>

        </nav>

    </div>

</header>


<main>

    <!-- Judul Halaman -->
    <section class="page-intro">

        <div class="container">

            <p class="eyebrow">
                Pendaftaran Kursus
            </p>

            <h1>
                Mulai belajar bersama KursusKu
            </h1>

            <p>
                Lengkapi formulir berikut untuk melakukan
                pendaftaran kursus.
            </p>

        </div>

    </section>


    <!-- Form Pendaftaran -->
    <section class="container">

        <div class="form-card">

            <form action="process-registration.php" method="POST">

                <!-- Hidden -->
                <input
                    type="hidden"
                    name="source"
                    value="week-06"
                >


                <!-- Nama Lengkap -->
                <div class="form-group">

                    <label for="name">
                        Nama lengkap
                    </label>

                    <input
                        id="name"
                        name="name"
                        type="text"
                        minlength="3"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                </div>


                <!-- Email -->
                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        maxlength="120"
                        autocomplete="email"
                        required
                    >

                </div>


                <!-- Program Studi -->
                <div class="form-group">

                    <label for="studyProgram">
                        Program Studi
                    </label>

                    <input
                        id="studyProgram"
                        name="studyProgram"
                        type="text"
                        maxlength="100"
                        placeholder="Contoh: PTIK"
                        required
                    >

                </div>
                <!-- Nomor Telepon -->
<div class="form-group">

    <label for="phone">
        Nomor Telepon
    </label>

    <input
        id="phone"
        name="phone"
        type="tel"
        maxlength="15"
        autocomplete="tel"
        placeholder="Contoh: 081234567890"
        required
    >

</div>


                <!-- Pilih Kursus -->
                <div class="form-group">

                    <label for="course">
                        Pilih kursus
                    </label>

                    <select
                        id="course"
                        name="course"
                        required
                    >

                        <option value="">
                            -- Pilih kursus --
                        </option>

                        <?php foreach ($courses as $course): ?>

                            <option value="<?= htmlspecialchars($course) ?>">
                                <?= htmlspecialchars($course) ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- Tipe Peserta -->
                <fieldset class="form-group">

                    <legend>
                        Tipe peserta
                    </legend>

                    <label class="choice">

                        <input
                            type="radio"
                            name="participantType"
                            value="Mahasiswa"
                            required
                        >

                        Mahasiswa

                    </label>


                    <label class="choice">

                        <input
                            type="radio"
                            name="participantType"
                            value="Guru"
                        >

                        Guru

                    </label>


                    <label class="choice">

                        <input
                            type="radio"
                            name="participantType"
                            value="Umum"
                        >

                        Umum

                    </label>

                </fieldset>


                <!-- Minat Belajar -->
                <fieldset class="form-group">

                    <legend>
                        Minat belajar
                    </legend>

                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interest[]"
                            value="Frontend"
                        >

                        Frontend

                    </label>


                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interest[]"
                            value="Backend"
                        >

                        Backend

                    </label>


                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interest[]"
                            value="Database"
                        >

                        Database

                    </label>


                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interest[]"
                            value="UI/UX"
                        >

                        UI/UX

                    </label>

                </fieldset>


                <!-- Metode Belajar -->
                <div class="form-group">

                    <label for="learningMethod">
                        Metode belajar
                    </label>

                    <select
                        id="learningMethod"
                        name="learningMethod"
                        required
                    >

                        <option value="">
                            -- Pilih metode --
                        </option>

                        <option value="Online">
                            Online
                        </option>

                        <option value="Offline">
                            Offline
                        </option>

                        <option value="Hybrid">
                            Hybrid
                        </option>

                    </select>

                </div>


                <!-- Jumlah Paket -->
                <div class="form-group">

                    <label for="package">
                        Jumlah paket
                    </label>

                    <select
                        id="package"
                        name="package"
                        required
                    >

                        <option value="1">
                            1 paket
                        </option>

                        <option value="2">
                            2 paket
                        </option>

                        <option value="3">
                            3 paket
                        </option>

                    </select>

                </div>


                <!-- Catatan Tambahan -->
                <div class="form-group">

                    <label for="note">
                        Catatan tambahan
                    </label>

                    <textarea
                        id="note"
                        name="note"
                        rows="5"
                        maxlength="300"
                        placeholder="Tuliskan kebutuhan belajar Anda"
                    ></textarea>

                    <small class="help">
                        Maksimal 300 karakter.
                    </small>

                </div>


                <!-- Tombol Week 06 -->
                <div class="form-actions">

                    <button
                        class="btn-primary"
                        type="submit"
                    >
                        Proses Pendaftaran
                    </button>


                    <a
                        href="history-dummy.php"
                        class="btn-link"
                    >
                        History Dummy
                    </a>


                    <a
                        href="loop-lab.php"
                        class="btn-link"
                    >
                        Loop Lab
                    </a>

                </div>

            </form>

        </div>

    </section>

</main>


<!-- Footer -->
<footer class="footer">

    <div class="container">

        <p>
            &copy; <?= date('Y') ?> KursusKu
        </p>

    </div>

</footer>

</body>

</html>