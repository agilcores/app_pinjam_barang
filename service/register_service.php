<?php 

require_once __DIR__ . "./../models/database.php";

function register($data)
{
    global $db;
    $username = $data["username"];
    $password = $data["password"];
    $password2 = $data["password2"];

    // cek nama username tidak boleh duplikat
    
    $cekDuplikasi = mysqli_query($db, "SELECT user FROM user WHERE user='$username'");

    if(mysqli_num_rows($cekDuplikasi) > 0)
    {
        echo "
            <script>alert('Username Sudah Ada :v')</script>
        ";
        return false;
    }

    // mengecek apakah password sama atau tidak
    if($password != $password2)
    {
        echo "
            <script>alert('password tidak sama :v')</script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($db, "INSERT INTO user (user, password) VALUES('$username', '$password')");

    // paksa redirect
    header("Location: login.php");
}
?>