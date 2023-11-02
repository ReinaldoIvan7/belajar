<?php
include('koneksi.php');

if (isset($_POST['tComments'])) {

$errorMSG = "";

// NAME
if (empty($_POST["nama"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["nama"];
}

// EMAIL
if (empty($_POST["konfirmasi"])) {
    $errorMSG .= "Email is required ";
} else {
    $konfirmasi = $_POST["konfirmasi"];
}

// MSG Guest
if (empty($_POST["ucapan"])) {
    $errorMSG .= "Subject is required ";
} else {
    $ucapan = $_POST["ucapan"];
}


$EmailTo = "reinaldoivan00@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "nama: ";
$Body .= $nama;
$Body .= "\n";
$Body .= "konfirmasi: ";
$Body .= $konfirmasi;
$Body .= "\n";
$Body .= "ucapan: ";
$Body .= $ucapan;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        header("location:undangan.php");
    } else {
        echo "<script>alert('Gagal Simpan!');history.go(-1);</script>";
    }
}
}

?>