<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require_once __DIR__ . "./service/hapus_pinjaman.php";
deletePinjaman($_GET);

?>