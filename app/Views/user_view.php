<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="/user.css">
   <title>Home</title>
</head>

<body>

   <!-- Codingan Navbar -->
   <nav class="navbar navbar-expand-md navbar-dark bg-success">
      <a class="navbar-brand" href="#">DataMahasiswa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      </div>

      <a class="navbar-text dropdown no-arrow" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= session()->get('user_nama'); ?> </a>
      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/30x30">

      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
         </a>
         <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
         </a>
         <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
         </a>
      </div>

   </nav>
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary" href="<?= base_url('Login/logout'); ?>">Logout</a>
            </div>
         </div>
      </div>
   </div>
   </form>
   </div>
   </nav>




   <!-- Button menambahkan data -->
   <div class="container mt-3 mb-8">
      <div class="row">
         <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl">
               <a>Menambahkan data</a>
            </button>
         </div>
      </div>
   </div>


   <!-- Modal tambah data -->
   <div class="modal fade" id="mdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Form Tambah data</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="modal-body">
                        <form action="/user/save" method="post">
                           <p>
                              <label for=" nama">Nama</label>
                              <input type="text" placeholder="masukan nama anda" name="user_nama" class="form-control mb-3" id="nama"">
                              <label for=" email">Email</label>
                              <input type="email" placeholder="masukan email anda" name="user_email" class="form-control mb-3" id="email"">
                              <label for=" pass">Password</label>
                              <input type="text" placeholder="masukan password anda" name="user_pass" class="form-control mb-3" id="pass"">
                              <br>
                              <button type=" submit" class="btn btn-primary">tambah</button>
                              <button type=" button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- Table data -->
   <div class="container mt-3">
      <div class="row">
         <div class="col">
            <table class="table table-striped text-center">
               <thead>
                  <tr>
                     <th>User ID</th>
                     <th>Nama</th>
                     <th>Email</th>
                     <th>Password</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- Memunculkan data dari database -->
                  <?php $i = 1; ?>
                  <?php foreach ($user as $u) : ?>
                     <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $u['user_nama']; ?></td>
                        <td><?= $u['user_email']; ?></td>
                        <td><?= $u['user_pass']; ?> </td>
                        <td><a href="/user/edit/<?= $u['user_id']; ?>" class="btn btn-success">Edit</a>
                           <a class="btn btn-danger text-white" onclick="hapusData(<?= $u['user_id']; ?>)" role="button">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <script>
      function hapusData(id) {
         message = confirm('Apakah Anda Yakin Untuk Menghapus Data ?')

         if (message) {
            window.location.href = ("<?= base_url('user/delete'); ?>") + "/" + id
         } else return false
      }
   </script>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
   <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
   <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>