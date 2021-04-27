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
        $addInventoryMsg = "";
        $partID = $_POST['partID'];
        $vendorID = $_POST['vendorID'];
        $productID = $_POST['productID'];
        $partName = $_POST['partName'];
        $partPrice = $_POST['partPrice'];
        $stock = $_POST['stock'];

        //validate info?
        
        if(empty($form_msg)) {
            $connection = db_connect();
            $query = "delete from parts (part_id, vendor_id, product_id, part_name, part_price, stock)
                        values ('$partID', '$vendorID', '$productID', '$partName', '$partPrice', '$stock');";
            if (mysqli_query($connection, $query)) {
                $form_msg = "$partName: $partID has been removed";
            } else {
                $form_msg = "update failed" . mysqli_error($connection);
            }
            mysqli_close($connection);
        }

        $_SESSION['form_msg'] = $form_msg;
        header("Location: ./usePartView.php");

    }


?>