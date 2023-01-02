<?php

use LDAP\Result;

require_once __DIR__ . "./../models/database.php";

function viewData()
{
    global $db;
    $views = [];
    $data = mysqli_query($db, "SELECT * FROM peminjaman");
    while($row = mysqli_fetch_assoc($data))
    {
        $views[] = $row;
        return $views;
    }
}

function viewPinjam()
{
    global $db;
    $data = mysqli_query($db, "SELECT * FROM peminjaman");
    $result = mysqli_num_rows($data);
    return $result;
}

function viewKembali()
{
    global $db;
    $data = mysqli_query($db, "SELECT status FROM peminjaman WHERE status='kembali'");
    $result = mysqli_num_rows($data);
    return $result;
}

function viewBelumKembali()
{
    global $db;
    $data = mysqli_query($db, "SELECT status FROM peminjaman WHERE status='belum kembali'");
    $result = mysqli_num_rows($data);
    return $result;
}

// untuk view di index
$viewData = viewData();