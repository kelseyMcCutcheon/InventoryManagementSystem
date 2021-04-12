<?php 
    session_start();
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
        <form action="admin.php" method="post">
            <input type="button" value="Add Inventory"   name="addInventory" /><br>
            <input type="button" value="Order Inventory" name="orderInventory" /><br>
            <input type="button" value="Check Inventory" name="checkInventory" /></br>
            <input type="button" value="Remove Inventory"name="removeInventory" /></br>
            <input type="button" value="Manage Users"    name="manageUsers" /></br>
            <input type="button" value="Manage Vendors"  name="manageVendors" /></br>
        </form>
    </body>
</html>