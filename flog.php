<!DOCTYPE html>
<html lang="en">
<head>
    <title>PENGADUAN MASYARAKAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  body{
        background-image: url('');
        

  }
</style>
<body style="background:black">
    <div style="padding: 50px;">
        <form action="log.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold" style="font-family: 'Poppins', sans-serif;">PELAPORAN PENGADUAN MASYARAKAT</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <
            <form class="card-body cardbody-color text-white" >
              <h2 class="text-white text-center "><div class="text-white"></div>L O G I N</h2>
              <div class="text-white text-center">
                Username : <br>
                <input class="rounded-3 border-light text-center" type="text" name="username" placeholder="Masukkan Username Anda" required
                style="width: 300px;">
              </div>
              <div class="text-white text-center">
                Password : <br>
                <input class="rounded-3 border-light text-center" type="password" name="password" placeholder="Masukkan Password Anda" required
                style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px; ">Login</button> <br>
                <p><i class="text-white">Belum Punya Akun? Click<a href="fregister.php" class="text-success">Register</a></i></p>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>