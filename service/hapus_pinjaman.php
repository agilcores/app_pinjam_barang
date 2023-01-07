<?php

use LDAP\Result;

require_once __DIR__ . "./../models/database.php";

function deletePinjaman($data)
{
    global $db;
    $id = $data["id"];
    
    // proses hapus
    mysqli_query($db, "DELETE FROM peminjaman WHERE id=$id");
    // cek kalo terhapus
    if(mysqli_affected_rows($db) > 0)
    {
        echo "  <script>
                    alert('sukses menghapus data');
                    window.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data);
            window.location.href = 'index.php';
        </script>";
    }
}




?>