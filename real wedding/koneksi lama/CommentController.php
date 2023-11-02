<?php

class CommentController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function create($inputData)
    {
        $nama = $inputData['nama'];
        $konfirmasi = $inputData['konfirmasi'];
        $ucapan = $inputData['ucapan'];
        

        $commentQuery = "INSERT INTO comments (nama,konfirmasi,ucapan) VALUES ('$nama','$konfirmasi','$ucapan')";
        $result = $this->conn->query($commentQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>