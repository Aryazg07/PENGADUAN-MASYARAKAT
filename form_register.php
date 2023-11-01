<?php
session_start();

if(isset($_SESSION["username"])){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peduli Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:light">
    <div style="padding: 50px;">
        <form action="register.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-dark fw-bold">Pelaporan Pengaduan Masyarakat</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-4" style="border-radius: 15px; box-shadow: 13px 13px 20px rgb( 0 0 0 / 8%), -13px -13px 20px rgb(0 0 0 / 8%);">
            <form class="card-body cardbody-color text-white" >
            <h2 class="mb-1 mt-3 text-center" style="color:rgb(61, 61, 61);">Register</h2>
              <div class="mb-2 mt-2 text-center">
                nik : <br>
                <input class="rounded-2 border-light text-center" type="text" name="nik" placeholder="masukan nik anda" required
                style="width: 300px;">
              </div>
              <div class="mb-2 mt-2 text-center">
                nama : <br>
                <input class="rounded-2 border-light text-center" type="nama" name="nama" placeholder="masukan nama anda" required
                style="width: 300px;">
              </div>
              <div class="mb-2 mt-2 text-center">
                username : <br>
                <input class="rounded-2 border-light text-center" type="text" name="username" placeholder="masukan Username anda" required
                style="width: 300px;">
              </div>
              <div class="mb-2 mt-2 text-center">
                password : <br>
                <input class="rounded-2 border-light text-center" type="password" name="password" placeholder="masukan password anda" required
                style="width: 300px;">
              </div>
              <div class="mb-2 mt-2 text-center">
                telp : <br>
                <input class="rounded-2 border-light text-center" type="text" name="telp" placeholder="masukan telp anda" required
                style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-primary px-3 mb-3" style="width: 200px;">Register</button> <br>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>