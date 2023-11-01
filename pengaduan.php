<?php

session_start();


$tgl=$_POST['tgl_pengaduan'];
$nik=$_SESSION['nik'];
$islap=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$status="proses";
// var_dump($_FILES);
// die();
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("INSERT INTO `pengaduan`(`tgl_pengaduan`,`nik`,`isi_laporan`,`foto`,`status`) VALUES ('$tgl','$nik','$islap','$foto','$status')");

if($query){
move_uploaded_file($tmp, 'img/'. $foto);

    header ("location:masyarakat.php");

}
    


