<?php
include('koneksi.php');

if (isset($_POST['tComments'])) {


  $nama = $_POST['nama'];
  $konfirmasi = $_POST['konfirmasi'];
  $ucapan = $_POST['ucapan'];
 
  


  $query = mysqli_query($con, "insert into comments values ('','$nama','$konfirmasi','$ucapan')");
  if ($query) {
    header("location:undangan.php");
  } else {
    echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
  }

 
}


