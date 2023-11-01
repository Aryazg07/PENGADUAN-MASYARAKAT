<?php

session_start();

$nik = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = 'admin';

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("INSERT INTO petugas VALUES('$nik','$nama','$username','$password','$telp','$level')");
$data=$query->fetch();

if($query){
    header('location:flog.php');
    }