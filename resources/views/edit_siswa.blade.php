<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>List Data Siswa</title>
  </head>
  <body>
    @include('inc.navbar')
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid" >
          <h1 class="display-5">Edit Biodata Siswa</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ $route }}" method="POST">
                    @csrf
                    @method($method)
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{ $bio->nama }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pob">Tempat Lahir</label>
                            <input type="text" class="form-control" id="lahir" placeholder="Tempat Kelahiran" name="tmpt" value="{{ $bio->lahir }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" placeholder="Tanggal Kelahiran" name="tgl" value="{{ $bio->tgl }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="gender">Jenis Kelamin</label>

                        <select class="form-control" id="jk" name="jk"  value="{{ $bio->jk }}">
                            <option value="{{  $bio->jk }}">{{  $bio->jk }}</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <select class="form-control" name="agama">
                            <option value="{{  $bio->agama }}">{{  $bio->agama }}</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Hobby</label>
                      <input type="text" class="form-control" id="hobby" placeholder="Hobby Anda" name="hobby" value="{{ $bio->hobi }}">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Apartment, studio, or floor" name="alamat" value="{{ $bio->almt }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control" id="telp" placeholder="Telp" name="telp" value="{{ $bio->telp }}">
                          </div>
                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="mail" placeholder="Email" name="email" value="{{ $bio->email }}">
                        </div>
                      </div>

                        <button type="submit" class="btn btn-primary" >Update Data</button>
                  </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#table_siswa').DataTable();
        } );
    </script>
</body>
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</html>
