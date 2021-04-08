<?php
    // Credentials to connect to the database
    
    $host = "localhost";
    $db_username = "root";
    $db_pw = "";
    $dbname = "bike_shop";
    $dsn        = "mysql:host=$host;dbname=$dbname";
    $options =  [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
?>