<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Penyewa</title>
        <link rel="stylesheet" type="text/css" href="../kasir/Style.css">
    </head>
    <body>
        <div class="body">
        <div class="header">
            <h1>PENYEWA</h1>
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
    <center>
        <div class="badan">
            <h2 style = "text-align:center; margin-bottom:20px;">Penyewa Lapangan Futsal</h2>
            <a href = "tambahpenyewa.php" style="text-align: center; font-size: 20px; margin-top: 30px; margin-bottom: 25px;">
            Tambah Penyewa</a>
            <table border="2" cellspacing="0" cellpadding="8" border="1" width="80%"
            style="text-align: center; font-size: 18px; margin-bottom: 20px;">
            <tr>
                <th>No</th>
                <th>Nama Penyewa</th>
                <th>Alamat Penyewa</th>
                <th>No HP</th>
            </tr>
            <?php
            $no=1;
            foreach($dbfutsal->tampilpenyewa() as $x){
                ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $x ['nama_penyewa'];?></td>
                <td><?php echo $x ['alamat_penyewa'];?></td>
                <td><?php echo $x ['no_hp'];?></td>
            </tr>
            <?php } ?>

            </table>
        </div>
    </center>
    </body>
</html>