<?php
// Turn off all error reporting
error_reporting(0);
// include database connection file
include_once("config.php");

  // Check If form submitted
  if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    

    // include database connection file
    include_once("config.php");

    
    $result = mysqli_query($mysqli, "INSERT INTO barang(nama,harga) VALUES('$nama','$harga')");

    
  }
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id ASC");
?>

<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="order.php">TA IMK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="order.php">Order <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="daftar_barang.php">Daftar Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftar_member.php">Benefit Member</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="bg-dark text-white">
<div class="bg-secondary text-white">
    <br></br>
        <h1 class="text-center ">Daftar Barang</h1>
    <br></br>
</div>
<table class="table table-dark">
    <thead class="bg-dark text-white">
    <tr>
        <th scope="col"class='text-center'>ID</th>
        <th scope="col"class='text-center'>Nama Barang</th>
        <th scope="col"class='text-center'>Harga</th>
        <th scope="col"class='text-center'>Update</th>
    </tr>
    </thead>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td class='text-center'>".$user_data['id']."</td>";
        echo "<td class='text-center'>".$user_data['nama']."</td>";
        echo "<td class='text-center'>".$user_data['harga']."</td>";   
        echo "<td class='text-center'><a href='edit_barang.php?id=$user_data[id]' class='btn btn-primary'>Edit</a> <a href='delete_barang.php?id=$user_data[id]'class='btn btn-danger'>Delete</a></td></tr>";        
        
    }
    ?>
    
</table>

<form action="daftar_barang.php" method="post" name="form1">
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" name="nama">

    </div>
    <div class="form-group">
        <label for="harga">Harga Barang</label>
        <input type="text" class="form-control" name="harga">

    </div>
  
    <button type="submit" name="Submit" class="btn btn-primary" value="Add">Tambahkan Barang</button>
</form>

<footer class="page-footer bg-secondary text-white">
    <div class="container">
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h2 class="mb-1">Tugas Akhir Interaksi Manusia dan Komputer</h2>
        </li>
      </ul>
    </div>
    <div class="footer-copyright text-center py-3">2020 Copyright: Kelompok 6</div>
  </footer>
  
</div>
</html>