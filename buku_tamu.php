<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kesaktian Pancasila</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="#">Kesaktian Pancasila</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="materi.php">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Buku Tamu</a>
            </li>
          </ul>
        </div>
      </nav>
      <img src="img/background3.jpg" class="rounded float-right" width="520px">
        <form method="POST" class="pt-5 pl-5">
         <div class="form-group w-25 pl-5">
           <label>Nama</label>
           <input name="nama" class="form-control">
         </div>
         <div class="form-group w-25 pl-5">
           <label>Jenis Kelamin</label>
           <input name="jk" class="form-control">
         </div>
         <div class="form-group w-25 pl-5">
           <label>Alamat</label>
           <input name="alamat" class="form-control">
         </div>
         <div class="form-group w-25 pl-5">
           <label>No Telepon</label>
           <input name="noTelepon" class="form-control" type="number">
         </div>
         <div class="pl-5">
             <button type="submit" name="kirim" class="btn btn-outline-danger">Kirim</button>
         </div>
         <div class="pl-5 pt-5">
         <?php
 if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];

    echo"
    <table class='table w-50 table-bordered'>
     <thead class='thead bg-danger'>
       <tr>
       <th scope='col'>No</th>
       <th scope='col'>Nama</th>
       <th scope='col'>Jenis Kelamin</th>
       <th scope='col'>Alamat</th>
       <th scope='col'>No Telepon</th>
       </tr>
    </thead>
    <tbody>
       <tr>
         <th scope='row'>1</th>
         <td>$nama</td>
         <td>$jk</td>
         <td>$alamat</td>
         <td>$noTelepon</td>
       </tr>
    </tbody>
    </table>
    ";
 }
?>
         </div>
    </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>