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
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <div>
        <div class="m-4">
          <h1 class="display-4">List Data Siswa</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent</p>
        </div>
      </div>
      <div class="m-4 ">
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
                        <?php $i=0 ?>
                        <?php $__currentLoopData = $bios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++ ?>

                      <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($bio -> nama); ?></td>
                        <td><?php echo e($bio -> lahir); ?>, <?php echo e($bio -> tgl); ?></td>
                        <td><?php echo e($bio -> jk); ?></td>
                        <td><?php echo e($bio -> hobi); ?></td>
                        <td><?php echo e($bio -> agama); ?></td>
                        <td><?php echo e($bio -> almt); ?></td>
                        <td><?php echo e($bio -> telp); ?></td>
                        <td><?php echo e($bio -> email); ?></td>
                        <td><form method="POST" action="<?php echo e(route('destroy-siswa',$bio->id)); ?>">
                            <a button type="button" class="btn btn-warning" href="<?php echo e(route('edit-siswa',$bio->id)); ?>">Edit</button></a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a button type="button" class="btn btn-primary" href="<?php echo e(route('show-bio',$bio->id)); ?>">Lihat</button></a>
                            </form>
                        </td>
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
              </div>
          </div>
          <a href="<?php echo e(route('add-siswa')); ?>"><button type="button" class="btn btn-primary">Tambah Siswa</button></a>

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
<?php /**PATH C:\xampp\htdocs\praktik1AldiJulianto\resources\views/list_siswa.blade.php ENDPATH**/ ?>