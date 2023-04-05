<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lapangan</title>
        <link rel="stylesheet" type="text/css" href="../kasir/Style.css">
    </head>
    <body>
        <div class="body">
        <div class="header">
            <h1>LAPANGAN</h1>
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
            <h2 style = "text-align:center; margin-bottom:20px;">Kasir Lapangan Futsal</h2>
            <a href = "tambahlapangan.php" style="text-align: center; font-size: 20px; margin-top: 30px; margin-bottom: 25px;">
            Tambah Lapangan</a>
            <table border="2" cellspacing="0" cellpadding="8" border="1" width="80%"
            style="text-align: center; font-size: 18px; margin-bottom: 20px;">
            <tr>
                <th>No</th>
                <th>Nama Lapangan</th>
                <th>Harga Lapangan</th>
            </tr>
            <?php
            $no=1;
            foreach($dbfutsal->tampillapangan() as $x){
                ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $x ['nama_lapangan'];?></td>
                <td><?php echo $x ['harga'];?></td>
            </tr>
            <?php } ?>

            </table>
        </div>
    </center>
    </body>
</html>