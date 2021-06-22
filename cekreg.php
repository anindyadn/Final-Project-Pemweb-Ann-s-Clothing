<?php
    //memualai session php
    session_start();

    //membuat koneksi
    include 'koneksi.php';

        //membuat variable
        $nama	    = $_POST['nama'];
        $email	    = $_POST['email'];
        $password	= $_POST['password'];
        $password2	= $_POST['password2'];
            
        //jika kolom input kosong atau tidak
        if(!empty($nama) && !empty($email) && !empty($password) && !empty($password2)){
            //jika 2 kolom password sama
            if($password == $password2){
                //cek ada email user yang sama
                $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email_user='$email'");
                $num = mysqli_num_rows($cek);
                
                // jika tidak ada email user yang telah terdaftar, maka sistem akan lanjut
                if($num == 0){
                    //query untuk memasukan data user
                    $sql = "INSERT INTO user SET nama_user='$nama', 
                            email_user='$email', password='$password'";
            
                    //jika register berhasil
                    if(mysqli_query($koneksi, $sql)){
                        echo "<script> alert('Berhasil Melakukan Register') </script>"; //muncul alert Berhasil Melakukan Register
                        echo "<script> location='index.php' </script>"; // menuju index.php (halaman login)
                    } 
                    //jika register gagal
                    else {
                        echo "<script> alert('Gagal Melakukan Register') </script>"; //muncul alert Gagal Melakukan Register
                        echo "<script> location='register.php' </script>"; // tetap di halaman yang sama
                    }
                } 
                //jika email user telah terdaftar
                else {
                    echo "<script> alert('Username / Email yang anda masukan telah terdaftar') </script>";
                }//muncul alert Username / Email yang anda masukan telah terdaftar
            }
            //jika password yang dimasukan berbeda 
            else {
                echo "<script> alert('Ulangi password yang sama') </script>";
            }//muncul alert Ulangi password yang sama
        }
        //jika masih ada input yang kosong 
        else {
            echo "<script> alert('Data register tidak boleh kosong') </script>";
        }//muncul alert Data register tidak boleh kosong
?>