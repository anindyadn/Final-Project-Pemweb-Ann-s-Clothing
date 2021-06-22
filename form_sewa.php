<!DOCTYPE html>
<html>
    <header>
    <title> Ann's Clothing </title>
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        .warning{color: red;}
        .col-sm-9{margin-bottom: 15px;}
    </style>

    </header>
    <body>

    <?php
    //variabel untuk error
    $error_kategori = "";
    $error_nmproduk = "";
    $error_nmuser   = "";
    $error_ktp      = "";
    $error_jenkel   = "";
    $error_notelp   = "";
    $error_alamat   = "";
    $error_ukuran   = "";
    $error_jmsewa   = "";
    $error_tglsewa  = "";
    $error_tglkmbl  = "";

    //variabel data
    $kategori   = "";
    $nmproduk   = "";
    $nmuser     = "";
    $ktp        = "";
    $jenkel     = "";
    $notelp     = "";
    $alamat     = "";
    $ukuran     = "";
    $jmsewa     = "";
    $tglsewa    = "";
    $tglkmbl    = "";

    //method post ketika dijalankan oleh sistem
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["kategori"])) {
            $error_kategori="Pilihan Kategori tidak boleh kosong";
        }
        else {
            $kategori = cek_input($_POST["kategori"]);
        }

        if (empty($_POST["nmproduk"])) {
            $error_nmproduk="Pilihan Produk tidak boleh kosong";
        }
        else {
            $nmproduk = cek_input($_POST["nmproduk"]);
        }

        if (empty($_POST["nmuser"])) {
            $error_nmuser = "Nama tidak boleh Kosong";
        }
        else {
            $nmuser = cek_input($_POST["nmuser"]);
        }

        if (empty($_POST["ktp"])) {
            $error_ktp="No. KTP wajib diisi";
        }
        else {
            $ktp = cek_input($_POST["ktp"]);
            if (!is_numeric($ktp) || strlen($_POST["ktp"])!=16) {
                $error_ktp = "No. KTP hanya boleh angka dan berjumlah 16 digit";
            }
        }

        if (empty($_POST["jenkel"])) {
            $error_jenkel = "Jenis Kelamin tidak boleh kosong";
        }
        else {
            $jenkel = cek_input($_POST["jenkel"]);
        }

        if (empty($_POST["notelp"])) {
            $error_notelp = "Nomor Telepon tidak boleh kosong";
        }
        else {
            $notelp = cek_input($_POST["notelp"]);
            if (!is_numeric($notelp)) {
                $error_notelp = 'Nomor Telepon hanya boleh angka';
            }
        }

        if (empty($_POST["alamat"])) {
            $error_alamat="Alamat tidak boleh kosong";
        }
        else {
            $alamat = cek_input($_POST["alamat"]);
        }

        if (empty($_POST["ukuran"])) {
            $error_ukuran="Pilihan Ukuran tidak boleh kosong";
        }
        else {
            $ukuran = cek_input($_POST["ukuran"]);
        }

        if (empty($_POST["jmsewa"])) {
            $error_jmsewa="Jumlah Sewa tidak boleh kosong";
        }
        else {
            $jmsewa = cek_input($_POST["jmsewa"]);
            if (!is_numeric($jmsewa)) {
                $error_jmsewa = 'Jumlah Sewa hanya boleh angka';
            }
        }

        if (empty($_POST["tglsewa"])) {
            $error_tglsewa="Tanggal lahir wajib diisi";
        }
        else {
            $tglsewa = cek_input($_POST["tglsewa"]);
            if (!preg_match("/^[0-9+\/]/", $tglsewa)) {
                $error_tglsewa="Format tanggal tidak valid";
            }
        }

        if (empty($_POST["tglkmbl"])) {
            $error_tglkmbl="Tanggal lahir wajib diisi";
        }
        else {
            $tglkmbl = cek_input($_POST["tglkmbl"]);
            if (!preg_match("/^[0-9+\/]/", $tglkmbl)) {
                $error_tglkmbl="Format tanggal tidak valid";
            }
        }     
    }

    //menyimpan data dalam database
    include 'koneksi.php';
    if (!empty($kategori) && !empty($nmproduk) && !empty($nmuser) && !empty($ktp) && !empty($jenkel) && 
        !empty($notelp) && !empty($alamat) && !empty($ukuran) && !empty($jmsewa) && !empty($tglsewa) && 
        !empty($tglkmbl)) {
        
        //query sql untuk menimpan data ke database
        $sql = "INSERT INTO detail_sewa SET kategori='$kategori', nama_produk='$nmproduk', nama_user='$nmuser', no_ktp='$ktp', 
        jenkel='$jenkel', no_telp='$notelp', alamat='$alamat', ukuran='$ukuran', jumlah_sewa='$jmsewa', tgl_sewa='$tglsewa', tgl_kembali='$tglkmbl'";

        if (mysqli_query($koneksi, $sql)) {
            echo "<script> alert('Data Berhasil Tersimpan') </script>";
            // jika berhasil akan muncul pemberitahuan "Data Berhasil Tersimpan"
            ?><meta http-equiv="refresh" content="5"; url=form_sewa.php><?php
        }
        else {
            echo "<script> alert('Data Gagal disimpan') </script>";
            // jika gagal akan muncul pemberitahuan "Data Gagal disimpan"
        }
    }

    //membuat fungsi variable cek input data
    function cek_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

        <div class="bg-image" style="background-image: url(img/pin.png); height: 200vh;">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: playfair display;">Ann's Clothing</a>
                    </div>
                    
                    <ul class="navbar-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>  
                </div>
            </nav>

            <div class="row" style="margin-top: 30px; margin-left: 20px;">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header" align="center">
                            Form Persewaan Pakaian Ann's Clothing
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group row">
                                    <label for="kategori" class="col-sm-3 col-form-label"> Kategori </label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="kategori" <?php if (isset($kategori) && $kategori=="T") ;?> value="Tradisional / Adat"> Tradisional / Adat <br> 
                                        <input type="radio" name="kategori" <?php if (isset($kategori) && $kategori=="M") ;?> value="Modern"> Modern
                                        <span class="warning"><?php echo $error_kategori; ?></span>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="nmproduk" class="col-sm-3 col-form-label"> Pilihan Produk Pakaian </label>
                                    <div class="col-sm-9">
                                        <select name="nmproduk" class="form-control <?php echo ($error_nmproduk !="" ? "is-invalid":"");?>" id="nmproduk">
                                            <option value="pilih"> - pilih - </option>
                                            <option value="Ulee Balang (Aceh)"> Ulee Balang (Aceh) </option>
                                            <option value="Ulos (Sumatra Utara)"> Ulos (Sumatra Utara) </option>
                                            <option value="Bundo Kanduang (Sumatra Barat)"> Bundo Kanduang (Sumatra Barat) </option>
                                            <option value="Teluk Belanga / Kebaya Labuh (Riau)"> Teluk Belanga / Kebaya Labuh (Riau) </option>
                                            <option value="Baju Kurung Tanggung (Jambi)"> Baju Kurung Tanggung (Jambi) </option>
                                            <option value="Rejang Lenong (Bengkulu)"> Rejang Lenong (Bengkulu) </option>
                                            <option value="Aesan Gede (Sumatera Selatan)">Aesan Gede (Sumatera Selatan)</option>
                                            <option value="Paksian (Bangka Belitung)">Paksian (Bangka Belitung)</option>
                                            <option value="Tulang Bawang (Lampung)">Tulang Bawang (Lampung)</option>
                                            <option value="Pangsi (Banten)">Pangsi (Banten)</option>
                                            <option value="Bedahan (Jawa Barat)">Bedahan (Jawa Barat)</option>
                                            <option value="Sadariah (DKI Jakarta)">Sadariah (DKI Jakarta)</option>
                                            <option value="Kebaya (Jawa Tengah)">Kebaya (Jawa Tengah)</option>
                                            <option value="Kebaya Kesatrian (DI Yogyakarta)">Kebaya Kesatrian (DI Yogyakarta)</option>
                                            <option value="Pesa’an (Jawa Timur)">Pesa’an (Jawa Timur)</option>
                                            <option value="Payas Agung (Bali)">Payas Agung (Bali)</option>
                                            <option value="Rimpu (Nusa Tenggara Barat)">Rimpu (Nusa Tenggara Barat)</option>
                                            <option value="Rote (Nusa Tenggara Timur)">Rote (Nusa Tenggara Timur)</option>
                                            <option value="King Tompang (Kalimantan Barat)">King Tompang (Kalimantan Barat)</option>
                                            <option value="Sangkarut (Kalimantan tengah)">Sangkarut (Kalimantan tengah)</option>
                                            <option value="Kustin (Kalimantan Timur)">Kustin (Kalimantan Timur)</option>
                                            <option value="Ta’a / Sapei Sapaq (Kalimantan Utara">Ta’a / Sapei Sapaq (Kalimantan Utara</option>
                                            <option value="Babaju Kun Galung Pacinan (Kalimantan Selatan)">Babaju Kun Galung Pacinan (Kalimantan Selatan)</option>
                                            <option value="Pattuqduq Towaine (Sulawesi Barat)">Pattuqduq Towaine (Sulawesi Barat)</option>
                                            <option value="Laku Tepu (Sulawesi Utara)">Laku Tepu (Sulawesi Utara)</option>
                                            <option value="Nggembe (Sulawesi Tengah)">Nggembe (Sulawesi Tengah)</option>
                                            <option value="Bodo (Sulawesi Selatan)">Bodo (Sulawesi Selatan)</option>
                                            <option value="Babu Nggawi (Sulawesi Tenggara)">Babu Nggawi (Sulawesi Tenggara)</option>
                                            <option value="Biliu / Makuta (Gorontalo)">Biliu / Makuta (Gorontalo)</option>
                                            <option value="Cele (Maluku)">Cele (Maluku)</option>
                                            <option value="Manteren Lamo / Kimun Gia (Maluku Utara)">Manteren Lamo / Kimun Gia (Maluku Utara)</option>
                                            <option value="Ewer (Papua)">Ewer (Papua)</option>
                                            <option value="Mermaid Dress">Mermaid Dress</option>
                                            <option value="Ball Gown Dress">Ball Gown Dress</option>
                                            <option value="Blouson Dress">Blouson Dress</option>
                                            <option value="Boho Dress">Boho Dress</option>
                                            <option value="Cocktail Dress">Cocktail Dress</option>
                                            <option value="Empire Waist Dress">Empire Waist Dress</option>
                                            <option value="Kaftan Dres">Kaftan Dres</option>
                                            <option value="Lace Dress">Lace Dress</option>
                                            <option value="Kimono Batik Dress">Kimono Batik Dress</option>
                                            <option value="Wrap Dress">Wrap Dress</option>
                                            <option value="Pink Ball Gown Dress">Pink Ball Gown Dress</option>
                                        </select>
                                        <span class="warning"><?php echo $error_nmproduk; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nmuser" class="col-sm-3 col-form-label"> Nama Lengkap </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nmuser" class="form-control <?php echo ($error_nmuser !="" ? "is-invalid" : ""); ?>"
                                        id="nmuser" placeholder="nama" value="<?php echo $nmuser; ?>">
                                        <span class="warning"><?php echo $error_nmuser; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ktp" class="col-sm-3 col-form-label"> No. KTP </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ktp" class="form-control <?php echo ($error_ktp !="" ? "is-invalid" : ""); ?>"
                                        id="ktp" placeholder="no. ktp" value="<?php echo $ktp; ?>">
                                        <span class="warning"><?php echo $error_ktp; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenkel" class="col-sm-3 col-form-label"> Jenis Kelamin </label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="jenkel" <?php if (isset($jenkel) && $jenkel=="L") ;?> value="Laki - Laki"> Laki - Laki <br> 
                                        <input type="radio" name="jenkel" <?php if (isset($jenkel) && $jenkel=="P") ;?> value="Perempuan"> Perempuan
                                        <span class="warning"><?php echo $error_jenkel; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="notelp" class="col-sm-3 col-form-label"> No. Telepon </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="notelp" class="form-control <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>"
                                        id="notelp" placeholder="no. telepon" value="<?php echo $notelp; ?>">
                                        <span class="warning"><?php echo $error_notelp; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label"> Alamat </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>"
                                        id="alamat" placeholder="alamat" value="<?php echo $alamat; ?>">
                                        <span class="warning"><?php echo $error_alamat; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ukuran" class="col-sm-3 col-form-label"> Ukuran Pakaian </label>
                                    <div class="col-sm-9">
                                        <select name="ukuran" class="form-control <?php echo ($error_ukuran !="" ? "is-invalid":"");?>" id="ukuran">
                                            <option value="pilih"> - pilih - </option>
                                            <option value="XS"> XS </option>
                                            <option value="S"> S </option>
                                            <option value="M"> M </option>
                                            <option value="L"> L </option>
                                            <option value="XL"> XL </option>
                                        </select>
                                        <span class="warning"><?php echo $error_ukuran; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jmsewa" class="col-sm-3 col-form-label"> Jumlah Sewa </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jmsewa" class="form-control <?php echo ($error_jmsewa !="" ? "is-invalid" : ""); ?>"
                                        id="jmsewa" placeholder="jumlah sewa" value="<?php echo $jmsewa; ?>">
                                        <span class="warning"><?php echo $error_jmsewa; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tglsewa" class="col-sm-3 col-form-label"> Tanggal Sewa </label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tglsewa" class="form-control <?php echo ($error_tglsewa !="" ? "is-invalid" : ""); ?>"  
                                        id="tglsewa" placeholder="tanggal sewa" value="<?php echo $tglsewa; ?>">
                                        <span class="warning"><?php echo $error_tglsewa; ?></span>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tglkmbl" class="col-sm-3 col-form-label"> Tanggal Kembali </label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tglkmbl" class="form-control <?php echo ($error_tglkmbl !="" ? "is-invalid" : ""); ?>"
                                        id="tglkmbl" placeholder="tanggal kembali" value="<?php echo $tglkmbl; ?>">
                                        <span class="warning"><?php echo $error_tglkmbl; ?></span>
                                    </div>
                                </div>
                                
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-dark"> Submit </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 50px; margin-left: 20px;">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">
                            <h2>Persewaan Ann's Clothing</h2>
                        </div>
                        <div class="card-body" style="line-height: 2;">
                        <?php
                        //menampilkan data yang di input
                        echo "Kategori : ".$kategori;
                        echo "<br>";
                        echo "Pilihan Produk Pakaian : ".$nmproduk;
                        echo "<br>";
                        echo "Nama Lengkap : ".$nmuser;
                        echo "<br>";
                        echo "No. KTP : ".$ktp;
                        echo "<br>";
                        echo "Jenis Kelamin : ".$jenkel;
                        echo "<br>";
                        echo "No. Telepon : ".$notelp;
                        echo "<br>";
                        echo "Alamat : ".$alamat;
                        echo "<br>";
                        echo "Ukuran Pakaian : ".$ukuran;
                        echo "<br>";
                        echo "Jumlah Sewa : ".$jmsewa;
                        echo "<br>";
                        echo "Tanggal Sewa : ".$tglsewa;
                        echo "<br>";
                        echo "Tanggal Kembali : ".$tglkmbl;
                        ?> 
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