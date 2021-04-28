<?php
    session_start();
    require "../database/connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        usePart();
    }
    else {
        $_SESSION['form_msg'] = "Something went wrong";
        header("Location: ./usePartView.php");
    }
    

    function usePart() {
        $connection = db_connect();
        $usePartMsg = "";
        $usePartId = $_POST["use_part_id"];
        $query = "delete from parts where part_id = '$usePartId';";
        if (mysqli_query($connection, $query)) {
            $usePartMsg = "Part $usePartId has been removed";
        } else {
            $usePartMsg = "update failed" . mysqli_error($connection);
        }
        mysqli_close($connection);
        
        $_SESSION['form_msg'] = $usePartMsg;
        header("Location: ./usePartView.php");
    }


?>