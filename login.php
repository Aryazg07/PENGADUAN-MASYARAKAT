<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($query->rowCount()>0){
    // die('berhasil');
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['nik']=$data['nik'];
    header('location:masyarakat.php');
    }else{
        // die('gagal');
        header("Location:flogin.php");
    }
    // echo '<meta http-equiv="refresh" content="1; url=index.php">';