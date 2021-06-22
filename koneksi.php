<?php
//konfigurasi database
//membuat variabel
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "db_sewa";
//perintah php untuk akses koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>