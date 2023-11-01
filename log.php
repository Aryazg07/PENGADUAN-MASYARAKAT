<?php

session_start();

$username= $_POST['username'];
$password= $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$msy = $db->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
$data = $query->fetch();
$datamsy = $msy->fetch();


if($query->rowCount()>0 OR $msy->rowCount()>0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['nik'] = $datamsy['nik'];

    if ($data['level'] == 'petugas') {
        $_SESSION['id_petugas'] = $data['id_petugas'];
        header('location:petugas/hpetugas.php');
    }elseif($data['level'] == 'admin'){
        $_SESSION['id_petugas'] = $data['id_petugas'];
        header('location:admin/tang.php');
    }else{
        header('location:masyarakat/masyarakat.php');
    }
}else{
        header('Location:flog.php');
}