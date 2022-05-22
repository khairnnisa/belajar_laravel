<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home Service | {{ $title }}</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
  <img src="{{ URL::asset('assets//img/logo.png')}}" alt=" " width=" " height="100" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container mt-4">
    <h1>Formulir Pemesanan</h1>
</div>

<div class="row justify-content-center">
  <div class="col-md-4">
   <main class="form-pesan w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Silahkan diisi</h1>
    <form action="/pesan" method="post">
    @csrf
       <div class="form-floating">
        <input type="nama" name="nama" class="form-control" id="nama" placeholder="Nama">
        <label for="nama">Nama</label>
       </div>
       <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email</label>
       </div>
       <div class="form-floating">
         <input type="no_telepon" name="noTelepon" class="form-control" id="no_telepon" placeholder="No_Telepon">
         <label for="no_telepon">No Telepon</label>
       </div>
       <button class="w-100 btn btn-lg btn-warning mt-2" type="submit">Pesan</button>
    </form>
    <small class="d-block text-center mt-3">Dengan memilih "Pesan" Anda menyatakan setuju dengan Ketentuan dan Biaya Pemesanan</small>
 </main>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>