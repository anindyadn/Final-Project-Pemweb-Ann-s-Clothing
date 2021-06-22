<!DOCTYPE html>
<html>
    <header>
    <title> Ann's Clothing </title>
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        .col-sm-9{margin-bottom: 15px;}
    </style>
    </header>
    <body>
        <?php
        $nama_admin = "";
        $email_admin = "";
        $password_admin = "";

        $error_nama_admin = "";
        $error_email_admin = "";
        $error_password_admin = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (empty($_POST["nama_admin"])) {
                $error_nama_admin="Nama Admin tidak boleh kosong";
            }
            else {
                $nama_admin = cek_input($_POST["nama_admin"]);
            }

            if (empty($_POST["email_admin"])) {
                $error_email_admin="Email tidak boleh kosong";
            }
            else {
                $email_admin = cek_input($_POST["email_admin"]);
            }

            if (empty($_POST["password_admin"])) {
                $error_password_admin="Password_admin tidak boleh kosong";
            }
            else {
                $password_admin = cek_input($_POST["password_admin"]);
            }
        }

        include 'koneksi.php';

        if (!empty($nama_admin) && !empty($email_admin) && !empty($password_admin)) {
        
            $sql = "INSERT INTO admin SET nama_admin='$nama_admin', email_admin='$email_admin', password='$password_admin'";

            if (mysqli_query($koneksi, $sql)) {
                echo "<script> alert('Data Berhasil Tersimpan') </script>";
                echo "<meta HTTP-EQUIV='REFRESH' content='2; accadmin.php'>";
            }
            else {
                echo "<script> alert('Data Gagal disimpan') </script>";
            }
        }

        function cek_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div class="bg-image" style="background-image: url(img/pin.png); height: 380vh;">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: playfair display;">Ann's Clothing</a>
                    </div>
                    
                    <ul class="navbar-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active" aria-current="page" href="list.php">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chart.php">Chart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>  
                </div>
            </nav>

            <div class="text-center" style="margin-top: 60px;">
                <h1> Edit Admin Persewaan Ann's Clothing </h1>
            </div>

            <div class="row" style="margin-top: 50px; margin-left: 200px;">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-dark text-white mb-0" align="center">
                            Tambah Data Admin
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                                <div class="form-group row">
                                    <label for="nama_admin" class="col-sm-3 col-form-label"> Nama Admin </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_admin" class="form-control <?php echo ($error_nama_admin !="" ? "is-invalid" : ""); ?>"
                                        id="nama_admin" placeholder="nama admin" value="<?php echo $nama_admin; ?>">
                                        <span class="warning"><?php echo $error_nama_admin; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_admin" class="col-sm-3 col-form-label"> Email </label>
                                    <div class="col-sm-9">
                                    <input type="text" name="email_admin" class="form-control <?php echo ($error_email_admin !="" ? "is-invalid" : ""); ?>"
                                        id="email_admin" placeholder="email admin" value="<?php echo $email_admin; ?>">
                                        <span class="warning"><?php echo $error_email_admin; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password_admin" class="col-sm-3 col-form-label"> Password_admin </label>
                                    <div class="col-sm-9">
                                    <input type="text" name="password_admin" class="form-control <?php echo ($error_password_admin !="" ? "is-invalid" : ""); ?>"
                                        id="password_admin" placeholder="password_admin" value="<?php echo $password_admin; ?>">
                                        <span class="warning"><?php echo $error_password_admin; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <a href="accadmin.php" type="button" class="btn btn-dark"> Cancel </a>
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" name="submit" class="btn btn-dark"> Submit </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">

        <section class="mb-4">
            <p>
                <strong>Final Project Pemrograman Web</strong>
            </p>
        </section>

        <section class="mb-4">
            <a class="btn btn-dark btn-floating m-1" href="https://github.com/" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg>
            </a>
        </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white">Fanni & Anindya Final Project</a>
        </div>
    </footer>
</html>