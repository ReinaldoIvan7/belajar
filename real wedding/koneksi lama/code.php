<?php
session_start();

include('dbconn.php');
include('CommentController.php');

$db = new DatabaseConnection;

if(isset($_POST['save_komentar']))
{
    $inputData = [
        'nama' => mysqli_real_escape_string($db->conn,$_POST['nama']),
        'konfirmasi' => mysqli_real_escape_string($db->conn,$_POST['konfirmasi']),
        'ucapan' => mysqli_real_escape_string($db->conn,$_POST['ucapan']),
        
    ];

    $comment = new CommentController;
    $result = $comment->create($inputData);
    
    if($result)
    {
        $_SESSION['message'] = "Comment Added Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Inserted";
        header("<h1>Comment Failed</h1>");
        exit(0);
    }
}
?>