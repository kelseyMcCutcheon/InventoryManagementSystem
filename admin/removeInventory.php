<?php
    session_start();
    require "../database/connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        removeInventory();
    }
    else {
        $_SESSION['form_msg'] = "Something went wrong";
        header("Location: ./removeInventoryView.php");
    }
    

    function removeInventory() {
        $connection = db_connect();
        $deletePartMsg = "";
        $deletePartId = $_POST["remove_part_id"];
        $query = "delete from parts where part_id = '$deletePartId';";
        if (mysqli_query($connection, $query)) {
            $deletePartMsg = "Part $deletePartId has been removed";
        } else {
            $deletePartMsg = "update failed" . mysqli_error($connection);
        }
        mysqli_close($connection);
        
        $_SESSION['form_msg'] = $deletePartMsg;
        header("Location: ./removeInventoryView.php");
    }


?>