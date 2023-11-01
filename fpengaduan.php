<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-danger">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-2 d-none d-sm-inline">pengaduan</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" style="padding-left: 20%;" id="menu">
                    <li class="nav-item">
                        <a href="masyarakat.php" class="nav-link align-middle px-0">
                        <ion-icon name="home" class="fs-2 text-light" style="padding-left: 25px;"></ion-icon> <br><span class="ms-1 d-none d-sm-inline text-light"style="padding-left: 15px;"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="fpengaduan.php" class="nav-link align-middle px-0">
                        <ion-icon name="create" class="fs-2 text-light" style="padding-left: 25px;"></ion-icon><br> <span class="ms-1 d-none d-sm-inline text-light"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link align-middle px-0" class="nav-link text-dark" href="logout.php"onclick="return confirm('anda yakin ingin keluar')">
                        <ion-icon name="log-out" class="fs-2 text-light" style="padding-left: 25px;"></ion-icon><br><span class="ms-1 d-none d-sm-inline text-light"style="padding-left: 10px;"></span>
                        </a>
                    </li>

                </ul>
                <hr>
                
            </div>
        </div>
<div class="col">
    <div style="padding: 10px;">
        <form action="pengaduan.php"  method="POST" enctype="multipart/form-data">
        <div class="container mt-2">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
  <input type="date" name="tgl_pengaduan" class="form-control" placeholder="Tanggal">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
  <textarea class="form-control" name="isi_laporan" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Foto</label>
  <input type="file" name="foto" class="form-control" >
</div>
<div class="text-end mt-3 text-center"> 
    <button type="submit" class="btn btn-primary px-3 mb-3 fw-bold" style="width: 200px;">Selesai</button> 
</div>
</div>
</body>
</html>