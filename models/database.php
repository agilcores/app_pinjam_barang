<?php 

$db = mysqli_connect("localhost", "root", "", "pinjam_barang");

if($db)
{
    echo "<script>
            console.log('sukses konek ke db');
        </script>";
} else {
    "<script>
            console.log('GAGAL konek ke db');
        </script>";
    die;
}