<?php 
    session_start();
    //checking if user is authorized
    if ($_SESSION['user_role'] != 1) {
        die("unauthorized access");
    }
    if(isset($_SESSION['form_msg'])){$_SESSION['form_msg'] = "";}
?>

<!DOCTYPE html>
<!--
Admin Page
Kelsey McCutcheon, Griffin Baxter, Jacob Capra
-->

<html>
    <head>
        <title>Inventory Management System</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <h1>Welcome  <?php echo $_SESSION['fn'] ?></h1>
        <p>Please Select An Action</p>
        <div id="adminViewDiv">
            <button onClick="document.location.href='./addInventoryView.php'">Add Inventory</button>
            <button onClick="document.location.href='./orderStart.php'">Order Inventory</button>
            <button onClick="document.location.href='./selectType.php'">Check Inventory</button>
            <button onClick="document.location.href='./removeInventoryView.php'">Remove Inventory</button>
            <button onClick="document.location.href='./usersView.php'">Manage Users</button>
            <button >Mange Vendors</button>
        </div>
        <!-- <form name="admin" action="admin.php" method="post">
            <input type="button" value="Add Inventory"   name="addInventory" onClick="document.location.href='./addInventoryView.php'"/><br>
            <input type="button" value="Order Inventory" name="orderInventory" onClick="document.location.href='./orderStart.php'"/><br>
            <input type="button" value="Check Inventory" name="checkInventory" onClick="document.location.href='./selectType.php'"/></br>
            <input type="button" value="Remove Inventory"name="removeInventory" onClick="document.location.href='./removeInventoryView.php'"/></br>
            <input type="button" value="Manage Users" name="manageUsers" onClick="document.location.href='./usersView.php'"/></br>
            <input type="button" value="Manage Vendors"  name="manageVendors" /></br>
        </form> -->
    </body>