<?php 

session_start();

require_once __DIR__ . "./service/view_pinjaman.php";

if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/lib/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/css/index.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Dashboard Peminjaman Barang</title>
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
                <div class="container">
                    <h1 class="text-center my-4">Daftar Peminjaman Barang</h1>
                    <a href="pinjam.php" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <table class="table table-striped">
                        <thead class="thead-dark text-center">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Barang</th>
                            <th scope="col">No Seri</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach($viewData as $views) : ?>
                            <tr>
                            <th scope="row"><?= $views["id"] ?></th>
                            <td><?= $views["nama"] ?></td>
                            <td><?= $views["jenis_barang"] ?></td>
                            <td><?= $views["no_seri"] ?></td>
                            <td><?= $views["tanggal_pinjam"] ?></td>
                            <td><?= $views["status"] ?></td>
                            <td><?= $views["tanggal_kembali"] ?></td>
                            </tr>
                            <?php endforeach ?>
                            
                        </tbody>
                        </table>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>

    <script src="public/lib/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>