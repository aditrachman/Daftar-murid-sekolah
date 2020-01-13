<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from tb_23");
$jml = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-dark" href="#"><b>SMK CODER</b></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="form.php"><span class="glyphicon glyphicon-user"></span>Daftar Siswa</a>
    <a href="table.php">  | Lihat Daftar</a>
    </ul>
  </div>
</nav>


<div class="jumbotron text-center bg-light">
        <h1 id="waktu">FORM DAFTAR SISWA BARU</h1>
    </div>
    <div class="container">

    <form action="proses.php" method="post">

  <div class="form-group">
    <label>Nama Siswa</label>
    <input type="text" class="form-control" name="nama">
  </div>

  <div class="mb-3">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat"></textarea>
  </div>

  <div class="form-group">
    <label>Jenis Kelamin</label>
    <select class="form-control" name="jenis_kelamin">
      <option>-- Jenis kelamin --</option>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select>
  </div>
 
  <div class="form-group">
    <label>Agama</label>
    <select class="form-control" name="agama">
      <option>-- Agama --</option>
      <option>Islam</option>
      <option>Kristen</option>
      <option>katolik</option>
      <option>hindu</option>
      <option>Buddha</option>
      <option>Atheis</option>
      <option>Tidak berotak</option>
    </select>
  </div>

  <div class="form-group">
    <label>Asal Sekolah</label>
    <input type="text" class="form-control" name="sekolah">
  </div>
  
<button class="btn btn-outline-success" type="submit">Daftar Siswa</button>

</form>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
     <h3>SMK CODER</h3>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:Aditrachman23
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>