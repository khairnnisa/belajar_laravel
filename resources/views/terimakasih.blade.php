<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL :: asset('assets/css/style.css')}}">
  
    <title>Home Service | {{ $title }}</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
  <img src="{{ URL::asset('assets//img/logo.png')}}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="/art">ART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/baby_sitter">Baby Sitter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/perawat_lansia">Perawat Lansia</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
         <a <button type="button" class="btn btn-light" href="/masuk">Masuk</button></a>
         <a <button type="button" class="btn btn-light" href="/daftar">Daftar</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="body">
                <div class="col-md-15">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="container rounded-3" style="margin-top:200px; height: 250px; width: 600px; background-color:rgb(112, 128, 145);">
                                <div class="row fw-bold">
                                    <div class="col" style="margin-top:30px;">
                                        <div class="h1 mb-3 fw-normal text-center" style="width: 35rem; font-family:serif;">
                                                               Pesanan anda sedang diproses Pekerja akan segera menghubungi anda Terimakasih
                                        </div>
                                        <a <button type="button" class="btn btn-success" href="/">Oke</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>