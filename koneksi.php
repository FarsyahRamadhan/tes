<?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw   = '';
        var $db   = 'db_futsal';

        function _construct(){
            $koneksi = mysqli_connect($this->host,
            $this->name,$ths->pw,$this->db);
            mysqli_select_db($koneksi, $this->db);
        }

        function tampillapangan(){
            $koneksi = mysqli_connect(
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"SELECT * FROM lapangan");
            while($id = mysqli_fetch_array($data)){
                $hasil[] = $id;
            }
            return $hasil;
        }

        function tambahlapangan($nama_lapangan, $harga){
            $koneksi = mysqli_connect( 
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"INSERT INTO lapangan
            VALUES('','$nama_lapangan', '$harga')");
           
        }
        

        function tampilpenyewa(){
            $koneksi = mysqli_connect(
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"SELECT * FROM penyewa");
            while($id = mysqli_fetch_array($data)){
                $hasil[] = $id;
            }
            return $hasil;
        }


        function tambahpenyewa($nama_penyewa, $alamat_penyewa, $no_hp ){
            $koneksi = mysqli_connect( 
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"INSERT INTO penyewa
            VALUES('','$nama_penyewa', '$alamat_penyewa', '$no_hp')");
           
        }


        function tampiltransaksi(){
            $koneksi = mysqli_connect(
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"SELECT * FROM transaksi");
            while($id = mysqli_fetch_array($data)){
                $hasil[] = $id;
            }
            return $hasil;
        }


        function tambahtransaksi($nama_lapangan, $nama_penyewa,){
            $koneksi = mysqli_connect( 
            $this->host,
            $this->name,
            $this->pw,
            $this->db);
            $data = mysqli_query($koneksi,"INSERT INTO transaksi
            VALUES('','$nama_lapangan', '$nama_penyewa')");
           
        }

        
    }
