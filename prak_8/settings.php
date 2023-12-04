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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Settings</title>
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
                        <a class="nav-link  " aria-current="page" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                            </svg><span class="ms-1 ">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="settings.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg><span class="ms-1">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container p-4">
        <div class="row">

            <h1 class="text-center mb-5">PENGATURAN</h1>


            <div class="col mt-3">
                <form action="" method="post" class="d-flex " role="search">
                    <input class="form-control me-2" type="search" name="keyword" placeholder="Telusuri..." aria-label="Search" autocomplete="off" style="border: 3px solid #d87093;">
                    <button class="btn btn-outline-primary" name="cari" type="submit">Telusuri</button>
                </form>
            </div>

            <div class="col text-end mt-3">
                <a href="tambah.php">
                    <button type="button" class="btn btn-outline-success">Tambah data mahasiswa</button>
                </a>
            </div>



            <table class="table table-striped table-hover mt-3">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["prodi"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><img src="data/image/<?= $row["gambar"]; ?>" alt="foto rusak" width="80"></td>
                        <td>

                            <a class="text-decoration-none" href="ubah.php?id=<?= $row["id"]; ?>">
                                <button type="button" class="btn btn-outline-warning">UPDATE</button>
                            </a>
                            <a class="text-decoration-none" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin menghapus data ini');">
                                <button type="button" class="btn btn-outline-danger">DELETE</button>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </table>
        </div>
    </div>

</body>

</html>