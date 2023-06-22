<?php
include "koneksi.php";

$id = $_GET['id'];
$tgl = $_GET['tgl'];
$kode = $_GET['kode'];
$eks = $_GET['eks'];
$str = substr($kode, 0, 2);
$str1 = substr($kode, 0, 4);

if ($str == 'SP' || $str1 == 'SPXI') {
    mysqli_query($koneksi, "DELETE FROM shopeexp WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl&eks=$eks");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str == 'JP') {
    mysqli_query($koneksi, "DELETE FROM jnt WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str == 'CM' || $str == 'TL' || $str == 'JY') {
    mysqli_query($koneksi, "DELETE FROM jne WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str == '00' || $str1 == 'TKSC' || $str1 == '0042' || $str1 == '0015') {
    mysqli_query($koneksi, "DELETE FROM sicepat WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str == 'TA' || $str == '10') {
    mysqli_query($koneksi, "DELETE FROM anteraja WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str1 == 'TKNX') {
    mysqli_query($koneksi, "DELETE FROM ninjaexpress WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str == '32') {
    mysqli_query($koneksi, "DELETE FROM pos WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else if ($str1 == 'JNAP') {
    mysqli_query($koneksi, "DELETE FROM idexpress WHERE id = '$id'");
    if (mysqli_affected_rows($koneksi) > 0) {
        header("location: data.php?tgl=$tgl");
    } else {
        echo "<script>alert('gagal menghapus data')</script>";
    }
} else {
    echo "<script>alert('kode tidak valid, gagal menghapus data')</script>";
}