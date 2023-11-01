<?php
session_start();

if(isset($_SESSION["username"])){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>R E G I S T E R</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body style="background:orange">
    <div style="padding: 10px;">
        <form action="reg.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-dark fw-bold" style="font-family: 'Poppins', sans-serif;"><ion-icon name="earth" class="fs-2 text-center"></ion-icon>&nbsp;Pelaporan Pengaduan Masyarakat</h1></div>
        <div class="container mt-1">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-4" style="border-radius: 15px; box-shadow: 12px 12px 10px rgb( 0 0 0 / 8%), -13px -13px 20px rgb(0 0 0 / 8%);">
            <form class="card-body cardbody-color text-white" >
            <h2 class="mb-1 mt-1 text-center fw-bold" style="color:rgb(61, 61, 61);">R E G I S T E R</h2>
            <hr class="divider">
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