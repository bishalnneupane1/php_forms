<?php

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];



$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }











// if($username && $password) {
//     echo $username;
//     echo $password;

// } else {
//     echo "This field cannot be blank.";
// }






}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bishal Neupane</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    

<div class="container">


<div class="col-sm-6">
<form action="login.php" method="post">  
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

</form>
</div>







</div>






</body>
</html>