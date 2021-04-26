<<<<<<< HEAD
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
        <form name="admin" action="admin.php" method="post">
            <input type="submit" value="Add Inventory"   name="addInventory" /><br>
            <input type="submit" value="Order Inventory" name="orderInventory" /><br>
            <input type="submit" value="Check Inventory" name="checkInventory" /></br>
            <input type="submit" value="Remove Inventory"name="removeInventory" /></br>
            <input type="submit" value="Manage Users"    name="manageUsers" /></br>
            <input type="submit" value="Manage Vendors"  name="manageVendors" /></br>
        </form>
    </body>
=======
<?php 
    session_start();
    // checking if user is authorized
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
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Welcome  <?php echo $_SESSION['fn'] ?></h1>
        <p>Please Select An Action</p>
        <form action="admin.php" method="post">
            <input type="button" value="Add Inventory"   name="addInventory" /><br>
            <input type="button" value="Order Inventory" name="orderInventory" /><br>
            <input type="button" value="Check Inventory" name="checkInventory" /></br>
            <input type="button" value="Remove Inventory"name="removeInventory" /></br>
            <input type="button" value="Manage Users"    name="manageUsers" onClick="document.location.href='./usersView.php'"/></br>
            <input type="button" value="Manage Vendors"  name="manageVendors" /></br>
        </form>
    </body>
>>>>>>> 5bc36364427454f52a655d453dd0055cdd1f63a1
</html>