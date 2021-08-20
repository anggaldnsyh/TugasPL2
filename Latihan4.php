<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];

    mysqli_query($con,"delete from tbl_mahasiswa where id='$id'");
    header("location:latihan1.php");

?>