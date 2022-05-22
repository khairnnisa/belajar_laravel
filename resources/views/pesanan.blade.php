<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <h1>Pesanan</h1>
</div>

<div class="dropdown" style="margin: 50px 1300px">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a <button class="dropdown-item" type="button">Pesanan</button></a>
    <a <button class="dropdown-item" type="button" href="/">Keluar</button></a>
  </ul>
</div>

               <div class="d-flex justify-content-center">
                </div>
                @if(session()->has('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('berhasil')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                 @endif
                 @if(session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('gagal')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                 @endif
                <div class="container-fluid" style="width: 775px; margin-left: 260px;">
                    <table class="table">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telepon</th>
                            </tr>
                        </thead>
                        <tbody class="table-primary text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Khairun Nisa</td>
                                    <td>kkhairunnisa1122@gmail.com</td>
                                    <td>082361139584</td>
                                </tr>
                        </tbody>
                    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>