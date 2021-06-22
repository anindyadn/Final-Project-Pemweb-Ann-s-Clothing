<?php
    //memualai session php
    session_start();

    //membuat koneksi
    include 'koneksi.php';

    //membuat variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    //query sql untuk mengambil data pada database tabel user
    $sql= mysqli_query($koneksi, "SELECT * FROM user WHERE email_user='$username' AND password='$password'");

    //cek data dengan menghitung data pada tabel
    $cek= mysqli_num_rows($sql);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "<script> alert('Welcome to Ann's Clothing') </script>";
        echo "<script> location='home.php' </script>";
        //jika username dan password benar akan menuju ke halaman home.php
    }
    else {
        echo "<script> alert('Username atau Password yang Anda Masukan Salah') </script>";
        echo "<script> location='index.php' </script>";
        //jika salah tetap dihalaman index.php
    }
?>