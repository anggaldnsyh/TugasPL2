<?php
	include 'koneksi.php';
	$db = new Database();
	$con=$db->Connect();

	if(isset($_POST['proses'])) {
		$query = mysqli_query($con,"insert into tbl_mahasiswa (npm, nama, jeniskelamin) values('".$_POST['npm']."','".$_POST['nama']."','".$_POST['jeniskelamin']."')");

        header('location:latihan1.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambah Data</h2>
                    </div>
                    <form action="latihan2.php" method="POST" name="form1">
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>JenisKelamin</label>
                            <input type="text" name="jeniskelamin" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="proses" value="Simpan">
                        <a href="latihan1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>