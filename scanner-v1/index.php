<?php include "koneksi.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scanner | Ekspedisi</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-info">
  <div class="container">
    <!-- form scan resi -->
    <div class="row justify-content-center mt-5 mx-3">
      <div class="col-md-6 bg-white rounded text-center">
        <form action="" method="POST">
          <label for="resi" class="fw-bold fs-5">Kode Resi : </label>
          <input type="text" name="resi" id="resi" class="form-control mt-4 mb-3" required autofocus>
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info mb-3 text-white col-sm-4 float-start">
        </form>
      </div>
    </div>
    <!-- form lihat data sesuai tanggal -->
    <div class="row justify-content-center mt-5 mx-3">
      <div class="col-md-3 text-center">
        <form action="" method="POST">
          <select name="opsitanggal" id="opsitanggal" onchange="ubah()" class="form-control mb-2">
            <option value="">pilih jenis tanggal</option>
            <option value="tunggal">Single</option>
            <option value="ganda">Double</option>
          </select>
          <div class="d-none mt-3" id="div">
            <label for="tanggal2" class="text-white fw-bold mb-1">From :</label>
            <input type="date" name="tanggal2" id="tanggal2" class="form-control mb-2 mr-2">
            <label for="tanggal3" class="text-white fw-bold mb-1">To :</label>
            <input type="date" name="tanggal3" id="tanggal3" class="form-control mb-2 ml-2">
          </div>
          <input type="date" name="tanggal" id="tanggal" class="form-control mb-2 mt-4 d-none">
          <select name="ekspedisi" id="ekspedisi" class="form-control mb-3 mt-4">
            <option value="">Pilih Ekspedisi</option>
            <?php
            $arr = [
              "Shopee Express" => "shopeexp",
              "JNE" => "jne",
              "JNT" => "jnt",
              "POS" => "pos",
              "Ninja Express" => "ninjaexpress",
              "Id Express" => "idexpress",
              "Si Cepat" => "sicepat",
              "Anter Aja" => "anteraja"
            ];

            foreach ($arr as $col => $col_value) : ?>
              <option value="<?= $col_value ?>"><?= $col ?></option>
            <?php endforeach; ?>
          </select>
          <input type="submit" name="lihatData" id="lihatData" value="Lihat Data" class="btn btn-success">
        </form>
      </div>
    </div>

    <?php
    if (isset($_POST['lihatData'])) {
      $tanggal = $_POST['tanggal'];
      $ekspedisi = $_POST['ekspedisi'];
      $tanggal2 = $_POST['tanggal2'];
      $tanggal3 = $_POST['tanggal3'];

      if ($tanggal2 == NULL && $tanggal3 == NULL && $tanggal == !NULL) {
        echo "<script>
          window.location.href = 'data.php?tgl=$tanggal&to=$tanggal3&eks=$ekspedisi';
        </script>";
      } else if ($tanggal == NULL && $tanggal2 == !NULL && $tanggal3 == !NULL) {
        echo "<script>
          window.location.href = 'data.php?tgl=$tanggal2&to=$tanggal3&eks=$ekspedisi';
        </script>";
      } else if ($tanggal2 == NULL && $tanggal3 == NULL && $tanggal == NULL) {
        echo "<script>
          window.location.href = 'data.php?tgl=$tanggal2&to=$tanggal3&eks=$ekspedisi';
        </script>";
      }
    }
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script>
    function ubah() {
      var pilih = document.getElementById('opsitanggal');
      var ganda = document.getElementById('div');
      var input1 = document.getElementById('tanggal2');
      var input2 = document.getElementById('tanggal3');
      var tunggal = document.getElementById('tanggal');

      if (pilih.value === "tunggal") {
        input1.required = false;
        input2.required = false;
        tunggal.required = true;
        ganda.classList.add('d-none');
        tunggal.classList.remove('d-none');
      } else if (pilih.value === "ganda") {
        input1.required = true;
        input2.required = true;
        tunggal.required = false;
        tunggal.classList.add('d-none');
        ganda.classList.remove('d-none');
      } else if (pilih.value === "") {
        tunggal.classList.add('d-none');
        ganda.classList.add('d-none');
        input1.required = false;
        input2.required = false;
        tunggal.required = false;
      }

    }
  </script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
  $resi = $_POST['resi'];
  $str = substr("$resi", 0, 2);
  $str1 = substr("$resi", 0, 4);

  // timestamp
  date_default_timezone_set("Asia/Jakarta");
  $date = date("Y-m-d");

  // cek duplicate entry
  $sql = mysqli_query($koneksi, "SELECT * FROM shopeexp WHERE kode_shopeexp = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM jne WHERE kode_jne = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM jnt WHERE kode_jnt = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM sicepat WHERE kode_sicepat = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM anteraja WHERE kode_anteraja = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM pos WHERE kode_pos = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM ninjaexpress WHERE kode_ninjaexpress = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }

  $sql = mysqli_query($koneksi, "SELECT * FROM idexpress WHERE kode_idexpress = '$resi'");
  if (mysqli_num_rows($sql) > 0) {
    echo "<script>swal('Kode Sudah Ada', 'Mohon masukkan kode dengan benar', 'error')</script>";
    exit;
  }


  // validasi ekspedisi ke database
  if ($str == 'SP' || $str1 == 'SPXI') {
    mysqli_query($koneksi, "INSERT INTO shopeexp VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To Shopee Express', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str == 'JP' || $str == 'JX') {
    mysqli_query($koneksi, "INSERT INTO jnt VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To JNT', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str == 'CM' || $str == 'TL' || $str == 'JY') {
    mysqli_query($koneksi, "INSERT INTO jne VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To JNE', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str == '00' || $str1 == 'TKSC' || $str1 == '0042' || $str1 == '0015') {
    mysqli_query($koneksi, "INSERT INTO sicepat VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To SiCepat', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str == 'TA' || $str == '10') {
    mysqli_query($koneksi, "INSERT INTO anteraja VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To Anter Aja', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str1 == 'TKNX') {
    mysqli_query($koneksi, "INSERT INTO ninjaexpress VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To Ninja Express', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', 'kode gagal ditambahkan', 'error')</script>";
    }
  } else if ($str == '32') {
    mysqli_query($koneksi, "INSERT INTO pos VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To POS', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else if ($str1 == 'JNAP') {
    mysqli_query($koneksi, "INSERT INTO idexpress VALUES('', '$resi', '$date')");
    if (mysqli_affected_rows($koneksi) > 0) {
      echo "<script>swal('To ID Express', '', 'success')</script>";
    } else {
      echo "<script>swal('Kode Gagal Ditambahkan', '', 'error')</script>";
    }
  } else {
    echo "<script>swal('WARNING!!!', 'kode tidak valid', 'warning')</script>";
  }
}
?>