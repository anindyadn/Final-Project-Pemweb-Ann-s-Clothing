<!DOCTYPE html>
<html>
    <header>
    <title> Ann's Clothing </title>
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </header>
    <body>

        <div class="bg-image" style="background-image: url(img/pin.png); height: 100vh;">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: playfair display;">Ann's Clothing</a>
                    </div>
                    
                    <ul class="navbar-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="logadmin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Login</a>
                        </li>
                    </ul>  
                </div>
            </nav>

            <div class="container" style="margin-top: 100px;">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white mb-0"> <h5 class="text-center"> <span class="font-weight-bold"> REGISTER </span> </h5>                               
                            </div>
                            <div class="card-body">
                                <form action="cekreg.php" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password2" class="form-control" placeholder=" Ulangi Password">
                                    </div>
                                    <div class="input-group mb-3 justify-content-center">
                                        <input type="submit" name="register" value="Register" class="btn btn-dark btn-block">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p align="center"> Sudah mempunyai akun? 
                <a href="index.php"> Login </a>
            </p>
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