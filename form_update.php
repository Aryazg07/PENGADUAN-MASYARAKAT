<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:flogin.php");
}

$id_pengaduan = $_GET['id_pengaduan'];

$db = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat','root','');
$query = $db->query("SELECT * FROM `pengaduan` WHERE  `id_pengaduan`='$id_pengaduan'");


$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
</head>
<body style="background-color: #212529;font-family: 'Poppins', sans-serif;">
<div style="padding:50px;text-align:center;">
    <form action="update.php" method="POST">
    <div class="container">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6" style="border-radius: 50px;background-color:#000">
        <form class="card-body cardbody-color p-lg-4 text-white ">
        <h2 class="mt-4" style="font-family: 'Paytone One', sans-serif;">U P D A T E</h2>
        <hr class="divider text-secondary">
        <input type="hidden" name="id_pengaduan" value="<?= $id_pengaduan ?>">
        <div class="mb-3 mt-4">
            <label>Tanggal :</label><br>
            <input type="date" name="tgl_pengaduan" class="form-control" style="width:300px;margin:auto" value="<?= $data['tgl_pengaduan'] ?>">
        </div>
        <div class="mb-3">

            <input type="hidden" name="nik" class="form-control" style="width:300px;margin:auto" value="<?= $data['nik'] ?>">
        </div>
        <div class="mb-3">
            <label >Isi Laporan :</label><br>
            <input type="text" name="isi_laporan" class="form-control" style="width:300px;margin:auto" value="<?= $data['isi_laporan'] ?>">
        </div>
        <div class="mb-3">
            <label for="formFile">Foto :</label><br>
            <input type="file" name="foto" id="formFile" class="form-control" style="width:300px;margin:auto" value="<?= $data['foto'] ?>">
        </div>
        <div class="pt-1 mb-4">
            <button type="submit" class="btn btn-primary fw-bold btn-block" style="border-radius: 15px;width:100px">Save</button>
        </div>
        </form>
</body>
</html>