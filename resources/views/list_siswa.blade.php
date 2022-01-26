<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- General CSS Files -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Siswa</title>
</head>
<body>
    @include('inc.navbar')
    < <div class="jumbotron jumbotron-fluid">
        <div class="m-4">
          <h1 class="display-4">List Data Siswa</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent</p>
        </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <table class="display" id="tabel_siswa">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Hobi</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php $i=0 @endphp
                        @foreach ($bios as $bio )
                        @php $i++ @endphp

                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$bio -> nama}}</td>
                        <td>{{$bio -> lahir}}, {{$bio -> tgl}}</td>
                        <td>{{$bio -> jk}}</td>
                        <td>{{$bio -> hobi}}</td>
                        <td>{{$bio -> agama}}</td>
                        <td>{{$bio -> almt}}</td>
                        <td>{{$bio -> telp}}</td>
                        <td>{{$bio -> email}}</td>
                      <td>
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-primary">Lihat</button>
                      </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
              </div>
              <button type="button" class="btn btn-primary">Tambah Siswa</button>
          </div>
      </div>


      <script>
        $(document).ready( function () {
            $('#tabel_siswa').DataTable();
        } );
    </script>
</body>
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

</html>
