<?php
    // creates connection to database    

    function db_connect()
    {
        require "config.php";
        $connection = new PDO($dsn, $db_username, $db_pw, $options);
        return $connection;
    }
?>