<?php 

require_once __DIR__ . "./../models/database.php";

function login($login)
{
    global $db;
    $username = $login["username"];
    $password = $login["password"];

    // cek ketersediaan username
    $cekUser = mysqli_query($db, "SELECT user FROM user WHERE user='$username'");
    $cekTersedia = mysqli_num_rows($cekUser);

    if($cekTersedia > 0)
    {

        $cekPass = mysqli_query($db, "SELECT password FROM user WHERE user='$username'");
        $row = mysqli_fetch_array($cekPass);
        $hash = $row['password'];

        if(password_verify($password, $hash))
        {
            $_SESSION["login"] = true;
            header("Location: index.php");
        } else {
           echo "<script>alert('Password salah :v')</script>";
        }
    }
}

?>