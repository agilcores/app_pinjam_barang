<?php 


require_once __DIR__ . "./../models/database.php";

function buatPinjaman($data)
{
    global $db;
    $nama = $data["nama"];
    $namaBarang = $data["barang"];
    $noSeri = $data["no-seri"];
    $tanggalPinjam = $data["tanggal-pinjam"];
    $status = $data["status"];

    $result = mysqli_query($db, "INSERT INTO peminjaman (nama, jenis_barang, no_seri, tanggal_pinjam, status) VALUES('$nama', '$namaBarang', '$noSeri', '$tanggalPinjam', '$status')");

    if(mysqli_affected_rows($db) > 0)
    {
        echo "<script>
            alert('sukses menambah data');
            window.location.href = 'index.php';
        </script>";
        
    } else {
        echo "<script>
            alert('gagal menambah data! : ');
        </script>";
        return false;
    }
}

?>