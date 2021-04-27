<?php 
    session_start();
    //checking if user is authorized
    if ($_SESSION['user_role'] != 1) {
        die("unauthorized access");
    }
?>

<!DOCTYPE html>
<!--
Admin Page
Kelsey McCutcheon, Griffin Baxter, Jacob Capra
-->

<html>
    <head>
        <title>Inventory Management System</title>
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Welcome  <?php echo $_SESSION['username'] ?></h1>
        <p>Please Select An Action</p>
        <form name="admin" action="admin.php" method="post">
            <input type="button" value="Add Inventory"   name="addInventory" onClick="document.location.href='./addInventoryView.php'"/><br>
            <input type="submit" value="Order Inventory" name="orderInventory" /><br>
            <input type="submit" value="Check Inventory" name="checkInventory" /></br>
            <input type="button" value="Remove Inventory"name="removeInventory" onClick="document.location.href='./removeInventoryView.php'"/></br>
            <input type="button" value="Manage Users" name="manageUsers" onClick="document.location.href='./usersView.php'"/></br>
            <input type="button" value="Manage Vendors"  name="manageVendors" /></br>
        </form>
    </body>