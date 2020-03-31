<?php
include 'koneksi.php';
session_start();
?>
<div class="wrap">

</div>
<header role="banner">


    <?php
    if (empty($_SESSION['admin'])) {


    ?>
        <nav class="navbar navbar-expand-lg ">
            <img style="width:180px" src="images/LL.png" alt="Image placeholder">
            <div class="container">

                <a class="navbar-brand absolute" href="index.php">SELAMAT DATANG<span class=""></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- untuk penghubungnya -->
                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="ministry.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="ministry.php">Latar Belakang UPI YPTK Padang</a>
                                <a class="dropdown-item" href="visimisi.php">Visi dan Misi Universitas</a>
                                <a class="dropdown-item" href="fasilitas.php">Fasilitas Kampus</a>
                                <a class="dropdown-item" href="12prinsip.php">12 Prinsip Dasar UPI YPTK Padang</a>
                                <a class="dropdown-item" href="lokasi.php">Lokasi</a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="sermon.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item" href="kegiatan.php">Kegiatan Mahasiswa</a>
                                <a class="dropdown-item" href="biaya.php">Biaya Kuliah</a>
                                <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>

                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<?php
    } else {
?>
    <nav class="navbar navbar-expand-lg ">
        <img style="width:180px" src="images/LL.png" alt="Image placeholder">
        <div class="container">

            <a class="navbar-brand absolute" href="index.php">SELAMAT DATANG<span class=""></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- untuk penghubungnya -->
            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="ministry.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="ministry.php">Latar Belakang UPI YPTK Padang</a>
                            <a class="dropdown-item" href="visimisi.php">Visi dan Misi Universitas</a>
                            <a class="dropdown-item" href="fasilitas.php">Fasilitas Kampus</a>
                            <a class="dropdown-item" href="12prinsip.php">12 Prinsip Dasar UPI YPTK Padang</a>
                            <a class="dropdown-item" href="lokasi.php">Lokasi</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="sermon.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="kegiatan.php">Kegiatan Mahasiswa</a>
                            <a class="dropdown-item" href="biaya.php">Biaya Kuliah</a>
                            <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>

                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
<?php } ?>