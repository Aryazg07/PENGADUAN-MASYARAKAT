<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat', 'root', '');
$query = $koneksi->query("select * from login where username='$username' AND password='$password'");
$data = $query->fetch();
if($query->rowCount() > 0){
    $username = $_POST['username'];
    $password = $_POST['password'];
}else{
    header("Location:form.html");
}