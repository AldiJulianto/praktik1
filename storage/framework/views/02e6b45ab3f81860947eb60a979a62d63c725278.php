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
    <title>Form tambah siswa | SMK CODING</title>
</head>
<body>
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <div class="container">
        <div class="m-4">
          <h1 class="display-4">Form Tambah Siswa</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent</p>
        </div>
      </div>
      <div class="container">
        <form class="m-4" method="POST" action="/store_siswa" <?php echo csrf_field(); ?> <?php echo method_field('POST'); ?>>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  placeholder="Nama Lengkap" name="nama">
              </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" class="form-control"  placeholder="Tempat Lahir" name="tmpt">
              </div>
              <div class="form-group col-md-6">
                <label for="tgl">Tanggal Lahir</label>
                <input type="date" class="form-control"  placeholder="Password" name="tgl">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select  class="form-select" name="jk">
                      <option selected value="Laki - Laki" >Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="agama" class="form-label">Agama</label>
                    <select  class="form-select" name="agama">
                      <option selected value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Atheis">Atheis</option>
                      <option value="Budha">Budha</option>
                      <option value="Hindu">Hindu</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label for="hobi">Hobi</label>
                <input type="text" class="form-control"  placeholder="Kegiatan yang digemari" name="hobi">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control"  placeholder="Alamat Lengkap" name="alamat">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="notelp">No Telepon</label>
                <input type="text" class="form-control" name="notelp" placeholder="Isikan Nomer Telepon Anda">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email Anda">
              </div>

            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
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
<?php /**PATH C:\xampp\htdocs\praktik1AldiJulianto\resources\views/form_tambah_siswa.blade.php ENDPATH**/ ?>