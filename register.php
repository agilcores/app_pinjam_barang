<?php 

require_once __DIR__ . "./models/database.php";
require_once __DIR__ . "./service/register_service.php";

if(isset($_POST['submit']))
{
    register($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/lib/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register Page</title>
</head>
<body>
    
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; width: 50%;">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="text-headline">
                <h1 class="text-center mb-5">REGISTER PAGE</h1>
            </div>
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Username!</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" width="80" name="username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Enter Password!</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password!</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Register Here!</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>