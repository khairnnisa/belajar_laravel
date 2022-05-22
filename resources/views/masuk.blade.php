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

@if(session()->has('success'))
   <div class="alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

@if(session()->has('error'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{ session('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

<div class="row justify-content-center">
  <div class="col-lg-4">
   <main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Tolong masuk</h1>
    <form action="/masuk" method="post">
      @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" >Masuk</button>
  </form>
  <small class="d-block text-center mt-3">Belum punya akun? <a href="/daftar">Daftar Sekarang!<a></small>
 </main>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>