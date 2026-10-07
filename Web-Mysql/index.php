<?php
include 'service/config.php';

$resultMahasiswa = mysqli_query($conn, "
    SELECT mahasiswa.*, kelas.nama_kelas
    FROM mahasiswa
    LEFT JOIN kelas ON mahasiswa.id_kelas = kelas.id_kelas
");

$resultKelas = mysqli_query($conn, "SELECT * FROM kelas");

$resultMatakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Akademik Informatika</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="logo">
            Akademik Informatika
        </div>

        <div class="nav-menu">

            <a href="#mahasiswa">
                Mahasiswa
            </a>

            <a href="#kelas">
                Kelas
            </a>

            <a href="#matakuliah">
                Mata Kuliah
            </a>

        </div>

    </nav>


    <!-- HERO -->

    <section class="hero">

        <h1>
            Sistem Akademik
        </h1>

        <p>
            Informasi mahasiswa, kelas, dan mata kuliah
        </p>

    </section>


    <!-- MAHASISWA -->

    <section class="container" id="mahasiswa">

        <h2>
            Data Mahasiswa
        </h2>

        <div class="table-card">

            <table>

                <thead>

                    <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                    </tr>

                </thead>

                <tbody>

                    <?php while ($mahasiswa = mysqli_fetch_assoc($resultMahasiswa)) { ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($mahasiswa['npm']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($mahasiswa['nama']); ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($mahasiswa['jurusan']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($mahasiswa['nama_kelas']); ?>
                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </section>


    <!-- KELAS -->

    <section class="container" id="kelas">

        <h2>
            Data Kelas
        </h2>

        <div class="card-container">

            <?php while ($kelas = mysqli_fetch_assoc($resultKelas)) { ?>

                <div class="card">

                    <h3>
                        <?= htmlspecialchars($kelas['nama_kelas']); ?>
                    </h3>

                    <p>
                        ID Kelas:
                        <?= $kelas['id_kelas']; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

    </section>


    <!-- MATA KULIAH -->

    <section class="container" id="matakuliah">

        <h2>
            Data Mata Kuliah
        </h2>

        <div class="card-container">

            <?php while ($matakuliah = mysqli_fetch_assoc($resultMatakuliah)) { ?>

                <div class="card">

                    <h3>
                        <?= htmlspecialchars($matakuliah['nama_matakuliah']); ?>
                    </h3>

                    <p>
                        Kode:
                        <?= htmlspecialchars($matakuliah['kode_matakuliah']); ?>
                    </p>

                    <p>
                        SKS:
                        <?= $matakuliah['sks']; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 Akademik Informatika By Ryan Andiya
        </p>

    </footer>

</body>

</html>