<?php

require 'functions.php';


//cek apakah tombol sudaah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAH');
                document.location.href = 'settings.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DITAMBAH');
                document.location.href = 'settings.php';
            </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">
    


</head>

<body>

    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row border rounded-3 p-3   shadow box-area " style="background-color:rgba(217, 112, 147,.7) ;">
            <h2 class="text-white mb-3">Tambah Data Mahasiswa</h2>
            <form action="" method="post" enctype="multipart/form-data" class="mb-3  ">
                <div class="mb-3 ps-3">
                    <label class="form-label" for="nama"> NAMA : </label>
                    <input class="form-control " type="text" name="nama" id="nama" required>
                </div>
                <div class="mb-3 ps-3">
                    <label class="form-label" for="nim"> NIM : </label>
                    <input class="form-control" type="number" name="nim" id="nim" required>
                </div>
                <div class="mb-3 ps-3">
                    <label class="form-label" for="prodi"> PROGRAM STUDI : </label>
                    <input class="form-control" type="text" name="prodi" id="prodi" required>
                </div>
                <div class="mb-3 ps-3">
                    <label class="form-label" for="alamat"> ALAMAT : </label>
                    <textarea class="form-control" type="text" name="alamat" id="alamat" required></textarea>
                </div>
                <div class="mb-5 ps-3">
                    <label class="form-label" for="gambar"> GAMBAR : </label>
                    <input class="form-control" type="file" name="gambar" id="gambar" required>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-light" type="submit" name="submit">Tambahkan Data</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>