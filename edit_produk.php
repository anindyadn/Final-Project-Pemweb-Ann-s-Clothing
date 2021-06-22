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
                <h1> Edit Produk Persewaan Ann's Clothing </h1>
            </div>

            <?php
            include ('koneksi.php');

            if (!$koneksi) {
                die("Connection Failed : ". mysqli_connect_error());
            }
    
            $sql = "SELECT * FROM produk WHERE id_produk = $_GET[id]";
            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_array($result);
            ?>

            <div class="row" style="margin-top: 50px; margin-left: 200px;">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-dark text-white mb-0" align="center">
                            Edit Data Produk
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">

                                <div class="form-group row">
                                    <label for="nama_produk" class="col-sm-3 col-form-label"> Nama Produk </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk']?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_kategori" class="col-sm-3 col-form-label"> Kategori </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="id_kategori" class="form-control" value="<?php echo $row['id_kategori']?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="harga_sewa" class="col-sm-3 col-form-label"> Harga Sewa </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga_sewa" class="form-control" value="<?php echo $row['harga_sewa']?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <a href="list.php" type="button" class="btn btn-dark"> Cancel </a>
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" name="edit" class="btn btn-dark"> Submit </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            include ('koneksi.php');

            if (!$koneksi) {
                die("Connection Failed : ". mysqli_connect_error());
            }
    
            if(isset($_POST['edit'])){
    
                $sql= "UPDATE produk SET nama_produk='$_POST[nama_produk]', id_kategori='$_POST[id_kategori]', harga_sewa='$_POST[harga_sewa]' WHERE id_produk='$_GET[id]'";
                
                if(mysqli_query($koneksi, $sql)){
                    echo "<script> alert('Data telah berhasil diupdate') </script>";
                    
                    echo "<meta HTTP-EQUIV='REFRESH' content='3; url=list.php'>";
                } 
                else{
                    echo "Error: ". $sql ."<br>". mysqli_error($koneksi);
                }
                
                mysqli_close($koneksi);
            }
            ?>
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