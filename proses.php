<?php
include 'koneksi.php';
$dbfutsal = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambahlapangan"){
    $dbfutsal->tambahlapangan(
    $_POST['nama_lapangan'],
    $_POST['harga']);
    header("location:menulapangan.php");
}
elseif($aksi == "hapuslapangan"){
    $dbfutsal->hapuspesanan($_GET['id_lapangan']);
    header("location:menulapangan.php");
}

$aksi = $_GET['aksi'];
if($aksi == "tambahpenyewa"){
    $dbfutsal->tambahpenyewa(
    $_POST['nama_penyewa'],
    $_POST['alamat_penyewa'],
    $_POST['no_hp']);
    header("location:menupenyewa.php");
}
elseif($aksi == "hapuspenyewa"){
    $dbfutsal->hapuspesanan($_GET['id_penyewa']);
    header("location:menupenyewa.php");
}

$aksi = $_GET['aksi'];
if($aksi == "tambahtransaksi"){
    $dbfutsal->tambahtransaksi(
    $_POST['nama_lapangan'],
    $_POST['nama_penyewa']);
    header("location:transaksi.php");
}
elseif($aksi == "hapustransaksi"){
    $dbfutsal->hapuspesanan($_GET['id_transaksi']);
    header("location:menulapangan.php");
}
?>