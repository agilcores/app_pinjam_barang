<?php 


require_once __DIR__ . "./../models/database.php";

function getDataEdit($data)
{
    global $db;
    $datas = mysqli_query($db, "SELECT * FROM peminjaman WHERE id=$data");
    $return = mysqli_fetch_assoc($datas);
    return $return;
}


function editPinjaman($data)
{
    global $db;
    $id = $data["id"];
    $nama = $data["nama"];
    $namaBarang = $data["barang"];
    $noSeri = $data["no-seri"];
    $tanggalPinjam = $data["tanggal-pinjam"];
    $status = $data["status"];
    $tanggalKembali = $data["tanggal-kembali"];

    mysqli_query($db, "UPDATE peminjaman SET nama='$nama', jenis_barang='$namaBarang', no_seri='$noSeri', tanggal_pinjam='$tanggalPinjam', status='$status', tanggal_kembali='$tanggalKembali' WHERE id=$id");

    if(mysqli_affected_rows($db) > 0)
    {
        echo "<script>
            alert('sukses update data');
            window.location.href = 'index.php';
        </script>";
        
    } else {
        echo "<script>
            alert('gagal update data! : ');
        </script>";
        return false;
    }
}

?>