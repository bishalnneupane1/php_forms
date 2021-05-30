<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //Connecting our database. (databasename, database_username, database_password, 'our_database_name')
    if(!$connection) {
        die("Database connection failed");
    }


?>
