<!DOCTYPE html>
<html>
    <header>
    <title> Ann's Clothing </title>
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </header>
    <body>
        <div class="bg-image" style="background-image: url(img/pin.png); height: auto;">

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
                        <a class="nav-link active" aria-current="page" href="product.php">Product</a>
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
            
            <div class="text-center" style="margin-top: 30px;">
                <img src="img/p5.jpg" class="rounded" style="width: 700px;" alt="pict">
            </div>

            <div class="container" style="margin-top: 25px; margin-left: 25px;">
                <div class="row">
                    <div class="col-md-2">
                        <div id="list-kategori" class="list-group">
                            <a class="list-group-item list-group-item-action" href="#tradisional">Tradisional / Adat</a>
                            <a class="list-group-item list-group-item-action" href="#modern">Modern Dress</a>
                        </div>
                        <a href="form_sewa.php" type="button" class="btn btn-dark" style="margin-top: 25px;" >Form Sewa Pakaian</a>
                    </div>
                    <div class="col-md-10">
                        <div data-bs-spy="scroll" data-bs-target="#list-kategori" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                            <h4 id="tradisional">Pakaian Tradisional Indonesia</h4>
                                <p>
                                    <div class="row">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Ulee Balang (Aceh)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t2.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Ulos (Sumatra Utara)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t3.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Bundo Kanduang (Sumatra Barat)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t4.JPG" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Teluk Belanga / Kebaya Labuh (Riau)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t5.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Baju Kurung Tanggung (Jambi)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t6.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Rejang Lenong (Bengkulu)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t7.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Aesan Gede (Sumatera Selatan)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t8.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Paksian (Bangka Belitung)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t9.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Tulang Bawang (Lampung)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t10.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Pangsi (Banten)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t11.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Bedahan (Jawa Barat)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t12.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Sadariah (DKI Jakarta)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t13.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kebaya (Jawa Tengah)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t14.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kebaya Kesatrian (DI Yogyakarta)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t15.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Pesa’an (Jawa Timur)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t16.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Payas Agung (Bali)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t17.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Lamung (Nusa Tenggara Barat)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t18.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Rote (Nusa Tenggara Timur)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t19.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">King Tompang (Kalimantan Barat)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t20.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Sangkarut (Kalimantan tengah)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t21.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kustin (Kalimantan Timur)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t22.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Ta’a / Sapei Sapaq (Kalimantan Utara)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t23.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Babaju Kun Galung Pacinan (Kalimantan Selatan)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t24.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Pattuqduq Towaine (Sulawesi Barat)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t25.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Laku Tepu (Sulawesi Utara)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t26.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Nggembe (Sulawesi Tengah)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t27.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Bodo (Sulawesi Selatan)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t28.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Babu Nggawi (Sulawesi Tenggara)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/t29.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Biliu / Makuta (Gorontalo)</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t30.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Cele (Maluku)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t31.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Manteren Lamo / Kimun Gia (Maluku Utara)</h5>
                                                <p class="card-text">Rp 100.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/t32.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Ewer (Papua)</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            <h4 id="modern">Modern Dress</h4>
                                <p>
                                    <div class="row">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/m1.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Mermaid Dress</h5>
                                                <p class="card-text">Rp 1.200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m2.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Ball Gown Dress</h5>
                                                <p class="card-text">Rp 1.500.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m3.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Blouson Dress</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m4.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Boho Dress</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/m5.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Cocktail Dress</h5>
                                                <p class="card-text">Rp 200.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m6.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Empire Waist Dress</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m7.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kaftan Dress</h5>
                                                <p class="card-text">Rp 150.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m8.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Lace Dress</h5>
                                                <p class="card-text">Rp 350.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/m9.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kimono Batik Dress</h5>
                                                <p class="card-text">Rp 400.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m10.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Wrap Dress</h5>
                                                <p class="card-text">Rp 500.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/m11.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Pink Ball Gown Dress</h5>
                                                <p class="card-text">Rp 1.500.000</p>
                                                <a href="form_sewa.php" class="btn btn-dark">Sewa</a>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
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