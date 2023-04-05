<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Pesanan</title>
        <link rel="stylesheet" type="text/css" href="../kasir/Style.css">
    </head>
    <body>
        <div class="body">
        <div class="header">
            <h1>FUTSAL</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menulapangan.php">Menu Lapangan</a></li>
                <li><a href="menupenyewa.php">Menu Penyewa</a></li>
                <li><a href="transaksi.php">Data Pesanan</a></li>
                <li><a href="../index.php">Logout</a></li>
            </ul>
        </div>
        <div class="badan">
            <h2 style = "text-align:center; margin-top:30px margin-bottom: 25px">Tambah Penyewa Lapangan</h2>
            <table Style="padding-center: 720px;">
                <form action="proses.php?aksi=tambahpenyewa" method="post">
            <tr>
                <td> Nama Penyewa : </td>
                <td><input type="text" name="nama_penyewa"></td>
            </tr>
            <tr>
                <td> Alamat Penyewa : </td>
                <td><input type="text" name="alamat_penyewa"></td>
            </tr>
            <tr>
                <td> No HP : </td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan"></td>
            </tr>
                </form>
            </table>
        </div>
        </div>
    </body>
</html>