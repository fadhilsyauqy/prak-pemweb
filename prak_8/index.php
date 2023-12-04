<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


//tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Data Siswa </title>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #d87093;">
        <div class="container">
            <a class="navbar-brand" href="#">
                Fadhil Syauqy | 121140109
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                            </svg><span class="ms-1 ">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg><span class="ms-1">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->




    <div class="container my-5">

        <h1 class="text-center mb-3">DAFTAR MAHASISWA</h1>

        <div>
            <form action="" method="post" class="d-flex " role="search">
                <input class="form-control me-2" type="search" name="keyword" placeholder="Telusuri..." aria-label="Search" autocomplete="off" style="border: 3px solid #d87093;">
                <button class="btn btn-outline-primary" name="cari" type="submit">Telusuri</button>
            </form>
        </div>


        <div class="row mt-4">
            <?php foreach ($mahasiswa as $row) : ?>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card m-2 p-3" style="max-width: 540px; border:3px solid #d87093 ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="data/image/<?= $row["gambar"];  ?>" class="img-fluid rounded" alt="gbr rusak">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                                    <p class="card-text ">
                                    <ul class="list-unstyled">
                                        <li><b>NIM : </b><?= $row["nim"]; ?> </li>
                                        <li><b>Program Studi : </b> <?= $row["prodi"]; ?> </li>
                                        <li><b>Alamat : </b> <?= $row["alamat"]; ?> </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>