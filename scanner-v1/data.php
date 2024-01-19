<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data | Ekspedisi</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
    $tgl = $_GET['tgl'];
    $eks = $_GET['eks'];

    if ($tgl == !NULL) {

        if ($eks == "shopeexp") { ?>
            <link rel="stylesheet" href="assets/css/styleShope.css">
        <?php } else if ($eks == "jne") { ?>
            <link rel="stylesheet" href="assets/css/styleJne.css">
        <?php } else if ($eks == "jnt") { ?>
            <link rel="stylesheet" href="assets/css/styleJnt.css">
        <?php } else if ($eks == "pos") { ?>
            <link rel="stylesheet" href="assets/css/stylePos.css">
        <?php } else if ($eks == "ninjaexpress") { ?>
            <link rel="stylesheet" href="assets/css/styleNinja.css">
        <?php } else if ($eks == "sicepat") { ?>
            <link rel="stylesheet" href="assets/css/styleSicepat.css">
        <?php } else if ($eks == "anteraja") { ?>
            <link rel="stylesheet" href="assets/css/styleAnter.css">
        <?php } else if ($eks == "idexpress") { ?>
            <link rel="stylesheet" href="assets/css/styleIdExpress.css">
        <?php } else { ?>
            <link rel="stylesheet" href="assets/css/styleDefault.css">
        <?php } ?>
        <?php } else {
        if ($eks == "") { ?>
            <link rel="stylesheet" href="assets/css/styleDefault.css">
        <?php } ?>

    <?php } ?>
</head>

<body>
    <div class="container">
        <h2 class="row justify-content-center fw-bold m-auto mt-4" id="judul">Data Ekspedisi Pengiriman</h2>
        <div class="row justify-content-start mt-3" id="tombolAtas">
            <div class="col-md-3 d-flex">
                <a href="index.php" class="col-sm-6 btn btn-primary my-3 d-flex"><i class="bi bi-arrow-left-circle mx-2"></i>Kembali</a>
                <button class="btn btn-info col-sm-5 mx-2 my-3 text-white d-flex" onclick="print()"><i class="bi bi-printer mx-2"></i>Print</button>
            </div>
        </div>
        <?php
        if ($_GET['tgl'] == NULL && $_GET['to'] == NULL) { ?>
            <p class="row justify-content-start d-none">Tanggal : <?= $_GET['tgl'] ?></p>
        <?php } else if ($_GET['tgl'] == !NULL && $_GET['to'] == NULL) { ?>
            <p class="row justify-content-start mx-3">Tanggal : <?= $_GET['tgl'] ?></p>
        <?php } else if ($_GET['tgl'] == !NULL && $_GET['to'] == !NULL) { ?>
            <p class="row justify-content-start mx-3">Tanggal : <?= $_GET['tgl'] ?> <br> Sampai : <?= $_GET['to'] ?></p>
        <?php } ?>

        <?php
        if ($_GET['tgl'] == NULL && $_GET['eks'] == NULL) { ?>

            <!-- card header -->
            <div class="row mt-3" id="card">
                <!-- shope -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/shopeexp.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- jne -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-3">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM jne");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/jne.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="styleJne.css" onclick="print()">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- jnt -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM jnt");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/jnt.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- pos -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM pos");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/pos.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="card">
                <!-- ninja -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-2">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/ninjaexpress.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="" name="ninjaPrint" onclick="print()">Print Disini</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- anter aja -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM anteraja");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/anteraja.png" width="80px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- id express -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM idexpress");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/idexpress.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- sicepat -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM sicepat");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/sicepat.png" width="50px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4 mx-2 justify-content-center">
                <!-- tabel shope express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="shope">
                        <tr>
                            <th colspan="4" style="background-color: #fa5619;" class="text-white" id="tableTitle">Shopee Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_shopeexp'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_shopeexp'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel jne -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM jne");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="jne">
                        <tr>
                            <th colspan="4" class="bg-primary text-white" id="tableTitle">JNE</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM jne ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_jne'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_jne'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel jnt -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM jnt");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="jnt">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">JNT</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM jnt ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_jnt'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_jnt'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel pos -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM pos");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="pos">
                        <tr>
                            <th colspan="4" style="background-color: #f77919;" class="text-white" id="tableTitle">POS</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM pos ORDER BY scan_pada DESC");

                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_pos'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_pos'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <div class="jarak"></div>
                <!-- tabel SiCepat -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM sicepat");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="sicepat">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">SiCepat</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM sicepat ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_sicepat'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_sicepat'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel Anter Aja -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM anteraja");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="anteraja">
                        <tr>
                            <th colspan="4" style="background-color: #f52268;" class="text-white" id="tableTitle">Anter Aja</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM anteraja ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_anteraja'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_anteraja'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel Ninja Express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="ninja">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">Ninja Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_ninjaexpress'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_ninjaexpress'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel ID Express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM idexpress");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="idexpress">
                        <tr>
                            <th colspan="4" style="background-color: #fc2b2b;" class="text-white" id="tableTitle">ID Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM idexpress ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_idexpress'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_idexpress'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
            </div>

        <?php } else if ($_GET['tgl'] == !NULL && $_GET['eks'] == NULL) { ?>

            <div class="row mt-3" id="card">
                <!-- shope -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/shopeexp.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="" onclick="print()">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- jne -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-3">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM jne WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/jne.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- jnt -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM jnt WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/jnt.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- pos -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM pos WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/pos.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="card">
                <!-- ninja -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-2">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/ninjaexpress.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- anter aja -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM anteraja WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/anteraja.png" width="80px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- id express -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM idexpress WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/idexpress.png" width="70px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- sicepat -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col mr-2">
                                    <?php
                                    $tanggal = $_GET['tgl'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM sicepat WHERE scan_pada = '$tanggal'");

                                    ?>
                                    <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                </div>
                                <div class="col-auto">
                                    <img src="assets/img/sicepat.png" width="50px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="text-dark stretched-link link-underline link-underline-opacity-0" href="#idexpress">Lihat Selengkapnya</a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4 mx-2 justify-content-center">
                <?php $tgl = $_GET['tgl']; ?>
                <!-- tabel shope express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="shopee">
                        <tr>
                            <th colspan="4" style="background-color: #fa5619;" class="text-white" id="tableTitle">Shopee Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_shopeexp'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_shopeexp'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel jne -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM jne WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="jne">
                        <tr>
                            <th colspan="4" class="bg-primary text-white" id="tableTitle">JNE</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM jne WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_jne'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_jne'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel jnt -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM jnt WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="jnt">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">JNT</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM jnt WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");

                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_jnt'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_jnt'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel pos -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM pos WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="pos">
                        <tr>
                            <th colspan="4" style="background-color: #f77919;" class="text-white" id="tableTitle">POS</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM pos WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_pos'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_pos'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <div class="jarak"></div>
                <!-- tabel SiCepat -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM sicepat WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="sicepat">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">SiCepat</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM sicepat WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_sicepat'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_sicepat'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel Anter Aja -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM anteraja WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="anteraja">
                        <tr>
                            <th colspan="4" style="background-color: #f52268;" class="text-white" id="tableTitle">Anter Aja</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM anteraja WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_anteraja'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_anteraja'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel Ninja Express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="ninja">
                        <tr>
                            <th colspan="4" style="background-color: red;" class="text-white" id="tableTitle">Ninja Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_ninjaexpress'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_ninjaexpress'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
                <!-- tabel ID Express -->
                <?php $sql = mysqli_query($koneksi, "SELECT * FROM idexpress WHERE scan_pada = '$tgl'");
                if (mysqli_num_rows($sql) > 0) { ?>
                    <table class="table table-striped table-bordered text-center my-3 border-dark" id="idexpress">
                        <tr>
                            <th colspan="4" style="background-color: #fc2b2b;" class="text-white" id="tableTitle">ID Express</th>
                        </tr>
                        <tr>
                            <th class="bg-secondary text-white">No</th>
                            <th class="bg-secondary text-white col-sm-5">Kode</th>
                            <th class="bg-secondary text-white">Pada</th>
                            <th class="bg-secondary text-white" id="aksi">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        $tanggal = $_GET['tgl'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM idexpress WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) :
                        ?>

                                <tr>
                                    <td><?= $no++ . '.' ?></td>
                                    <td><?= $row['kode_idexpress'] ?></td>
                                    <td><?= $row['scan_pada'] ?></td>
                                    <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_idexpress'] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                </tr>

                            <?php endwhile; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="2" class="bg-secondary text-white">Total</th>
                            <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                        </tr>
                    </table>
                <?php } else {
                    echo "";
                } ?>
            </div>

        <?php } else if ($_GET['tgl'] == NULL && $_GET['eks'] == !NULL) { ?>
            <div class="row mt-3 justify-content-center" id="card">

                <?php
                $ekspedisi = $_GET['eks'];

                if ($ekspedisi == "shopeexp" || $ekspedisi == "jne" || $ekspedisi == "jnt" || $ekspedisi == "pos" || $ekspedisi == "ninjaexpress" || $ekspedisi == "sicepat" || $ekspedisi == "idexpress"  || $ekspedisi == "anteraja") { ?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM $ekspedisi");
                                        ?>
                                        <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="<?= "assets/img/" . $ekspedisi . ".png" ?>" width="70px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4 mx-2 justify-content-center">
                        <table class="table table-striped table-bordered text-center my-3 border-dark">
                            <tr>
                                <?php
                                if ($ekspedisi == "shopeexp") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Shopee Express</th>";
                                } else if ($ekspedisi == "jne") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>JNE</th>";
                                } else if ($ekspedisi == "jnt") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>JNT</th>";
                                } else if ($ekspedisi == "pos") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>POS</th>";
                                } else if ($ekspedisi == "ninjaexpress") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Ninja Express</th>";
                                } else if ($ekspedisi == "idexpress") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>ID Express</th>";
                                } else if ($ekspedisi == "anteraja") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Anter Aja</th>";
                                } else if ($ekspedisi == "sicepat") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Si Cepat</th>";
                                }
                                ?>

                            </tr>
                            <tr>
                                <th class="bg-secondary text-white">No</th>
                                <th class="bg-secondary text-white col-sm-5">Kode</th>
                                <th class="bg-secondary text-white">Pada</th>
                                <th class="bg-secondary text-white" id="aksi">Aksi</th>
                            </tr>

                            <?php
                            $no = 1;
                            $ekspedisi = $_GET['eks'];
                            $tanggal = $_GET['tgl'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM $ekspedisi ORDER BY scan_pada DESC");


                            if (mysqli_num_rows($sql) > 0) {
                                while ($row = mysqli_fetch_array($sql)) :
                            ?>

                                    <tr>
                                        <td><?= $no++ . '.' ?></td>
                                        <td><?= $row['kode_' . $ekspedisi] ?></td>
                                        <td><?= $row['scan_pada'] ?></td>
                                        <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_' . $ekspedisi] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                    </tr>

                                <?php endwhile; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th colspan="2" class="bg-secondary text-white">Total</th>
                                <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            <?php } else if ($_GET['tgl'] == !NULL && $_GET['eks'] == !NULL) {
            $ekspedisi = $_GET['eks'];
            ?>
                <?php if ($ekspedisi == "shopeexp" || $ekspedisi == "jne" || $ekspedisi == "jnt" || $ekspedisi == "pos" || $ekspedisi == "ninjaexpress" || $ekspedisi == "sicepat" || $ekspedisi == "idexpress"  || $ekspedisi == "anteraja") { ?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-danger shadow h-100 py-2" id="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        <?php
                                        $tanggal = $_GET['tgl'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM $ekspedisi WHERE scan_pada = '$tanggal'");
                                        ?>
                                        <div class="mb-0 fs-5 fw-bold text-gray-800">Total : <?= mysqli_num_rows($sql); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="<?= "assets/img/" . $ekspedisi . ".png" ?>" width="70px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 mx-2 justify-content-center">
                        <table class="table table-striped table-bordered text-center my-3 border-dark">
                            <tr>
                                <?php
                                if ($ekspedisi == "shopeexp") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Shopee Express</th>";
                                } else if ($ekspedisi == "jne") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>JNE</th>";
                                } else if ($ekspedisi == "jnt") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>JNT</th>";
                                } else if ($ekspedisi == "pos") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>POS</th>";
                                } else if ($ekspedisi == "ninjaexpress") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Ninja Express</th>";
                                } else if ($ekspedisi == "idexpress") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>ID Express</th>";
                                } else if ($ekspedisi == "anteraja") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Anter Aja</th>";
                                } else if ($ekspedisi == "sicepat") {
                                    echo "<th colspan='4' style='background-color: #fa5619;' class='text-white' id='tableTitle'>Si Cepat</th>";
                                }
                                ?>

                            </tr>
                            <tr>
                                <th class="bg-secondary text-white">No</th>
                                <th class="bg-secondary text-white col-sm-5">Kode</th>
                                <th class="bg-secondary text-white">Pada</th>
                                <th class="bg-secondary text-white" id="aksi">Aksi</th>
                            </tr>

                            <?php
                            $no = 1;
                            $ekspedisi = $_GET['eks'];
                            $tanggal = $_GET['tgl'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM $ekspedisi WHERE scan_pada = '$tanggal' ORDER BY scan_pada DESC");


                            if (mysqli_num_rows($sql) > 0) {
                                while ($row = mysqli_fetch_array($sql)) :
                            ?>

                                    <tr>
                                        <td><?= $no++ . '.' ?></td>
                                        <td><?= $row['kode_' . $ekspedisi] ?></td>
                                        <td><?= $row['scan_pada'] ?></td>
                                        <td id="aksi"><a href="hapus.php?kode=<?= $row['kode_' . $ekspedisi] ?>&id=<?= $row['id'] ?>&tgl=<?= $tanggal ?>" class="btn btn-danger hapus"><i class="bi bi-trash mx-1"></i>Hapus</a></td>
                                    </tr>

                                <?php endwhile; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="fw-bold">Tidak Ada Data</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th colspan="2" class="bg-secondary text-white">Total</th>
                                <th colspan="2" class="bg-secondary text-white" id="total"><?= mysqli_num_rows($sql) ?></th>
                            </tr>
                        </table>
                    </div>

                <?php } ?>
            <?php } ?>


            </div>

            <script>
                $('.hapus').on('click', function(e) {
                    e.preventDefault();
                    const href = $(this).attr('href');

                    Swal.fire({
                        title: 'Yakin ingin menghapus data?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Hapus'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location.href = href;
                        }
                    });
                });
            </script>
</body>

</html>