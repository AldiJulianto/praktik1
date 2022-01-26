<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="welcome">MyBio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="home" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Siswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="list_siswa">Lihat Data</a></li>
                  <li><a class="dropdown-item" href="#">Tambah Siswa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </nav>



      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">{{$judul}}</h1>
          <p class="lead">{{$subJudul}}</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="{{ $foto }}" class="rounded-circle" width="100%" height="60%" >
          </div>
          <div class="col-md-6">
            Informasi Pribadi
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Informasi Ku</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">Nama Lengkap</div>
                    <div class="col-md-6">: {{ $nama }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Tempat, Tanggal Lahir</div>
                    <div class="col-md-6">: {{ $lahir }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Hobby</div>
                    <div class="col-md-6">: {{ $hobi }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Jenis Kelamin</div>
                    <div class="col-md-6">: {{ $jk }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Agama</div>
                    <div class="col-md-6">: {{ $hobi }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Alamat</div>
                    <div class="col-md-6">: {{ $almt }}</div>
                 </div>
                  <div class="row">
                     <div class="col-md-6">Telp</div>
                     <div class="col-md-6">: {{ $telp }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Email</div>
                    <div class="col-md-6">: {{ $email }}</div>
                 </div>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            Riwayat Pendidikan
            <div class="list-group">
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">Universitas Indonesia</h5>
                  <p class="mb-1">Sistem Informasi</p>
                  <small>2022 - 2026</small>
                </div>
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">SMK Bakti Nusantara 666</h5>
                  <p class="mb-1">Rekayasa PErangkat Lunak</p>
                  <small>2019 - 2022</small>
                </div>
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">SMP Negeri Al Ahzar</h5>
                  <small>2016 - 2019</small>
                </div>
          </div>
        </div>
        <div class="text-center mt-5 mb-5"><h4>Pencapaian dan Pengalaman</h4></div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header"><h5 class="card-title">Pencapaian</h5></div>
            <div class="list-group list-group-horizontal">
              <div class="list-group-item">Pencapaian 1</div>
              <div class="list-group-item">Pencapaian 2</div>
              <div class="list-group-item">Pencapaian 3</div>
              <div class="list-group-item">Pencapaian 4</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header"><h5 class="card-title">Pengalaman</h5></div>
            <div class="list-group list-group-horizontal">
              <div class="list-group-item">Pengalaman 1</div>
              <div class="list-group-item">Pengalaman 2</div>
              <div class="list-group-item">Pengalaman 3</div>
              <div class="list-group-item">Pengalaman 4</div>
            </div>
          </div>
        </div>
      </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
