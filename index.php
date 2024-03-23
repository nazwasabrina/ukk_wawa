<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
      .banner{
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('bg/estetik.jpg');
            background-size: cover;
            background-position: center;
        }

        .banner-content{
            height: 100%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #E0BBE4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container-fluid banner" >
           <div class="container banner-content col-lg-6">
              <div class="text-center">
                <p class="fs-1">
                  Selamat Datang Di Website Gallery Foto
                </p>
              </div>
           </div>
        </div>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
</footer>
    
<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
</body>
</html>