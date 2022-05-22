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
    <h1>Formulir Pendaftaran</h1>
</div>
 
<div class="row justify-content-center">
  <div class="col-lg-5">
   <main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Ayo daftar</h1>
    <form action="/daftar" method="post">
      @csrf
    <div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required>
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="profesi" class="form-control rounded-top @error('profesi') is-invalid @enderror" id="profesi" placeholder="Profesi" required>
      <label for="profesi">Profesi</label>
      @error('profesi')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="gaji" class="form-control rounded-top @error('gaji') is-invalid @enderror" id="gaji" placeholder="Gaji" required>
      <label for="gaji">Gaji</label>
      @error('gaji')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="umur" class="form-control rounded-top @error('umur') is-invalid @enderror" id="umur" placeholder="Umur" required>
      <label for="umur">Umur</label>
      @error('umur')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="pengalamanKerja" class="form-control rounded-top @error('pengalamanKerja') is-invalid @enderror" id="pengalamanKerja" placeholder="Pengalaman Kerja" required>
      <label for="pengalamanKerja">Pengalaman Kerja</label>
      @error('pengalamanKerja')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="deskripsi" class="form-control rounded-top @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" required>
      <label for="deskripsi">Deskripsi</label>
      @error('deskripsi')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
     <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
  </form>
  <small class="d-block text-center mt-3">Sudah punya akun? <a href="/masuk">Masuk<a></small>
 </main>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>