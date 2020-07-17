<!doctype html>
<html lang="en">

<head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <title>Edit data</title>
</head>

<body>

   <div class="container-fluid pt-3 ">
      <div class="card border-primary" style="width: 22rem;">
         <div class="card-header">Edit Data</div>
         <div class="card-body">
            <form action="/user/updateData" method="POST">
               <div class="form-group">
                  <label for="no">No</label>
                  <input type="text" class="form-control" name="user_id" value="<?= $user->user_id; ?>" readonly>
               </div>
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="user_nama" value="<?= $user->user_nama; ?>">
               </div>
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control " id="email" placeholder="masukan email" name="user_email" value="<?= $user->user_email; ?>">
               </div>
               <div class="form-group">
                  <label for="email">Password</label>
                  <input type="text" class="form-control " id="pass" placeholder="masukan password" name="user_pass" value="<?= $user->user_pass; ?>">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>