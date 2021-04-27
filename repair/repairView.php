<?php
    session_start();
    // checking if user is authorized
    if ($_SESSION['user_role'] != 2) {
        die("unauthorized access");
    }
?>

<!DOCTYPE html>
<!--
Repair Page
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
        <h1>Welcome <?php echo $_SESSION['fn'] ?></h1>
        <p>Please Select An Action</p>
        <form action="repair.php" method="post">
            <input type="button" value="Use Item" name="useItem" onClick="document.location.href='./usePartView.php'"/ /><br>
            <input type="button" value="Report Issue" name="reportIssue" /><br>
            
        </form>
    </body>
</html>