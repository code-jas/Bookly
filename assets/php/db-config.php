<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bookly_db";

    $conn = mysqli_connect($server, $username, $password, $databaseName);
    
    if(mysqli_connect_errno()){
        exit();
    }

?>