<?php
$siteName = 'KursusKu';
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

        <a class="brand" href="index.php">
            <?= htmlspecialchars($siteName) ?>
        </a>

        <nav aria-label="Navigasi utama">

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


    <section class="container">

        <div class="form-card">

            <form action="process-registration.php" method="POST">
                <!-- Hidden -->
                <input
                    type="hidden"
                    name="source"
                    value="week-05"
                >


                <!-- Nama Lengkap -->
                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
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


                <!-- Nomor HP -->
                <div class="form-group">

                    <label for="phone">
                        Nomor HP
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


                <!-- Program Studi -->
                <div class="form-group">

                    <label for="study_program">
                        Program Studi
                    </label>

                    <input
                        id="study_program"
                        name="study_program"
                        type="text"
                        maxlength="100"
                        placeholder="Contoh: PTIK"
                        required
                    >

                </div>


                <!-- Pilihan Kursus -->
                <div class="form-group">

                    <label for="course">
                        Kursus yang Dipilih
                    </label>

                    <select
                        id="course"
                        name="course"
                        required
                    >

                        <option value="">
                            -- Pilih kursus --
                        </option>

                        <option value="web-dasar">
                            Web Dasar
                        </option>

                        <option value="php-dasar">
                            PHP Dasar
                        </option>

                        <option value="php-lanjutan">
                            PHP Lanjutan
                        </option>

                        <option value="laravel-fundamental">
                            Laravel Fundamental
                        </option>

                        <option value="mysql-dasar">
                            MySQL Dasar
                        </option>

                        <option value="ui-web-dasar">
                            UI Web Dasar
                        </option>

                    </select>

                </div>


                <!-- Jenis Peserta -->
                <fieldset class="form-group">

                    <legend>
                        Jenis Peserta
                    </legend>

                    <label class="choice">

                        <input
                            type="radio"
                            name="participant_type"
                            value="mahasiswa"
                            required
                        >

                        Mahasiswa

                    </label>


                    <label class="choice">

                        <input
                            type="radio"
                            name="participant_type"
                            value="umum"
                        >

                        Umum

                    </label>

                </fieldset>


                <!-- Minat Tambahan -->
                <fieldset class="form-group">

                    <legend>
                        Minat Tambahan
                    </legend>

                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="ui-ux"
                        >

                        UI/UX

                    </label>


                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="database"
                        >

                        Database

                    </label>


                    <label class="choice">

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="backend"
                        >

                        Backend

                    </label>

                </fieldset>


                <!-- Catatan -->
                <div class="form-group">

                    <label for="note">
                        Catatan
                    </label>

                    <textarea
                        id="note"
                        name="note"
                        rows="5"
                        maxlength="300"
                        placeholder="Tuliskan kebutuhan belajar Anda (opsional)"
                    ></textarea>

                    <small class="help">
                        Maksimal 300 karakter.
                    </small>

                </div>


                <!-- Tombol -->
                <div class="form-actions">

                    <button
                        class="btn-primary"
                        type="submit"
                    >
                        Kirim Pendaftaran
                    </button>

                </div>

            </form>

        </div>

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