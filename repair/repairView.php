<?php
    session_start();
?>

<!DOCTYPE html>
<!--
Repair Page
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
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        <p>Please Select An Action</p>
        <form action="repair.php" method="post">
            <input type="button" value="Use Item"   name="useItem" /><br>
            <input type="button" value="Report Issue" name="reportIssue" /><br>
            
        </form>
    </body>
</html>