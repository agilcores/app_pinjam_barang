<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require_once __DIR__ . "./service/view_pinjaman.php";
require_once __DIR__ . "./service/update_pinjaman.php";

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
// ambil data di sini
$data = $_GET["id"];
$rows = getDataEdit($data);

if (isset($_POST["submit"])) {
    editPinjaman($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/lib/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/style/css/pinjam.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <nav class="navbar navbar-light bg-dark">
                    <h3 class="text-light">Dashboard</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- side bar -->
            <div class="sidebar col-md-2 bg-dark">
                <div class="container">
                    <div class="mt-5 d-flex justify-content-center">
                        <div class="images">

                        </div>
                    </div>
                    <div class="text-center side-text">
                        <h3 class="text-light mt-3">halo admin</h3>

                        <p class="text-light mt-3">Jumlah Pinjam : <?= viewPinjam(); ?></p>
                        <hr style="background-color: white">
                        <p class="text-light mt-3">Jumlah Kembali : <?= viewKembali(); ?></p>
                        <hr style="background-color: white">
                        <p class="text-light mt-3">Belum Kembali : <?= viewBelumKembali(); ?></p>
                        <hr style="background-color: white">
                    </div>
                </div>
            </div>
            <!-- sidebar end -->

            <!-- content -->
            <div class="content col-md-10">
                <div class="container mt-5">
                    <h1 class="text-center">Edit Peminjaman</h1>
                    <form method="post">
                        <div class="form-group" hidden>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $rows["id"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Edit Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $rows["nama"] ?>" required >
                        </div>
                        <div class="form-group">
                            <label for="barang">Edit Barang</label>
                            <input type="text" class="form-control" id="barang" name="barang" value="<?= $rows["jenis_barang"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no-seri">Edit no-seri</label>
                            <input type="text" class="form-control" id="no-seri" name="no-seri" value="<?= $rows["no_seri"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-pinjam">Edit tanggal-pinjam</label>
                            <input type="date" class="form-control" id="tanggal-pinjam" name="tanggal-pinjam" value="<?= $rows["tanggal_pinjam"] ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="status">Status</label>
                            <select name="status" id="status">
                                <optgroup label="Status">
                                    <option value="kembali">Kembali</option>
                                    <option value="belum kembali">Belum Kembali</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal-kembali">Edit Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tanggal-kembali" name="tanggal-kembali" value="<?= $rows["tanggal_kembali"] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
</body>

</html>