<?php
include('koneksi.php');

// if (isset($_POST['tComments'])) {
$nama = $_POST['nama'];
$konfirmasi = $_POST['konfirmasi'];
$ucapan = $_POST['ucapan'];

$query = mysqli_query($conn, "INSERT INTO comments (nama, konfirmasi, ucapan) VALUES ('$nama','$konfirmasi','$ucapan')");

if ($query) {
  // header("location:undangan.php");
  $response['status'] = 1;
  $response['message'] = 'success';
} else {
  $response['status'] = 0;
  $response['message'] = 'error';
  // echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
}

header('Content-Type: application/json');
echo json_encode($response);
// }
