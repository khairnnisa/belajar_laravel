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
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="/art">ART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/baby_sitter">Baby Sitter</a>
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

<ul class="pagination pagination-sm" style="margin: 50px 1300px">
  <li class="page-item"><a class="page-link"  href="#">Previous</a></li>
  <li class="page-item"><a class="page-link"  href="#">1</a></li>
  <li class="page-item"><a class="page-link"  href="#">2</a></li>
  <li class="page-item"><a class="page-link"  href="#">3</a></li>
  <li class="page-item"><a class="page-link"  href="#">Next</a></li> 
</ul>

<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-4">
    <img src="{{ URL::asset('assets//img/profil.png')}}" alt=" " width=" " height="200" class="d-inline-block align-text-top">
      <h2>Sarni</h2>
      <p>Profesi: <button type="button" class="btn btn-warning">Baby Sitter</button></p>
      <button type="button" class="btn btn-danger">Rp. 50.000,00/jam</button>
    </div>
    <div class="col-sm-8">
      <p>Umur : 30 Tahun</p>
      <p>Pengalaman kerja : 2 Tahun</p>
      <p>Deskripsi : Baby sitter Sarni sudah biasa mengasuh anak dengan penuh rasa kasih sayang, baik, sabar, telaten, cekatan, disiplin, inisiatif, mudah diarahkan, bertanggung jawab dalam bekerja, bisa membujuk anak yang susah untuk makan, steril botol, memandikan anak, ceria, bisa memasak makanan anak , mengganti popok dan hal lain yang berhubungan dengan baby, niat bekerja dengan sungguh - sungguh, sehat walafiat, suhu tubuh normal, mematuhi protokol kesehatan identitas lengkap siap bekerja dan sudah vaksin.</p>
    </div>
  </div>
</div>

    <a <button type="button" class="btn btn-warning" style="margin: 5px 560px" href="/pesan">Pesan Sekarang</button></a>

  <div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-4">
    <img src="{{ URL::asset('assets//img/profil.png')}}" alt=" " width=" " height="200" class="d-inline-block align-text-top">
      <h2>Ina</h2>
      <p>Profesi: <button type="button" class="btn btn-warning">Baby Sitter</button></p>
      <button type="button" class="btn btn-danger">Rp. 40.000,00/jam</button>
    </div>
    <div class="col-sm-8">
      <p>Umur : 39 Tahun</p>
      <p>Pengalaman kerja : 6 Tahun</p>
      <p>Deskripsi : Sarmita bisa di panggil Mita, Mita pengalaman kerja 4 tahun sebagai art. Mita berkepribadian, jujur, sopan, sabar, rajin, ramah, disiplin, inisiatif, bertanggung jawab, mudah diarahkan, gesit, telaten, sabar, tidak mudah tersinggung, Mita bisa memasak masakan sederhana seperti, sayur, sop ,opor ayam, pindang ikan, terong balado, nasi goreng, tumis sayuran, goreng ayam tempe tahu ikan dll, Mita juga mahir dalam mengerjakan pekaerjaan rumah seperti, menyapu, lap2, ngepel, nyetrika, nyuci pakaian menggunakan mesin/manual, nyiram tanaman sudah menjadi rutinitas sehari hari. Mita tidak memiliki riwayat penyakit apapun,tidak sedang batuk, flu demam, ataupun sakit lain nya, Mita memiliki identitas lengkap dan siap kerja hari ini. Mita sudah di vaksin dan siap kerja sekarang.</p>
    </div>
  </div>
</div>

    <a <button type="button" class="btn btn-warning" style="margin: 5px 560px" href="/pesan">Pesan Sekarang</button></a>

  <div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-4">
    <img src="{{ URL::asset('assets//img/profil.png')}}" alt=" " width=" " height="200" class="d-inline-block align-text-top">
      <h2>Mia</h2>
      <p>Profesi: <button type="button" class="btn btn-warning">Baby Sitter</button></p>
      <button type="button" class="btn btn-danger">Rp. 45.000,00/jam</button>
    </div>
    <div class="col-sm-8">
      <p>Umur : 30 Tahun</p>
      <p>Pengalaman kerja : 5 Tahun</p>
      <p>Deskripsi : Sarmita bisa di panggil Mita, Mita pengalaman kerja 4 tahun sebagai art. Mita berkepribadian, jujur, sopan, sabar, rajin, ramah, disiplin, inisiatif, bertanggung jawab, mudah diarahkan, gesit, telaten, sabar, tidak mudah tersinggung, Mita bisa memasak masakan sederhana seperti, sayur, sop ,opor ayam, pindang ikan, terong balado, nasi goreng, tumis sayuran, goreng ayam tempe tahu ikan dll, Mita juga mahir dalam mengerjakan pekaerjaan rumah seperti, menyapu, lap2, ngepel, nyetrika, nyuci pakaian menggunakan mesin/manual, nyiram tanaman sudah menjadi rutinitas sehari hari. Mita tidak memiliki riwayat penyakit apapun,tidak sedang batuk, flu demam, ataupun sakit lain nya, Mita memiliki identitas lengkap dan siap kerja hari ini. Mita sudah di vaksin dan siap kerja sekarang.</p>
    </div>
  </div>
</div>

    <a <button type="button" class="btn btn-warning" style="margin: 5px 560px" href="/pesan">Pesan Sekarang</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>