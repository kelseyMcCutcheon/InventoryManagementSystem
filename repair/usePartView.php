<?php
    session_start();
    // checking if user is authorized - repair
    if ($_SESSION['user_role'] != 2) {
        die("unauthorized access");
    }
    require './repair.php';
    $users = fetchInventory();

?>

<html>
    <head>
        <title>Use Part</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Use Part | <a href="./repairView.php">Repair Home</a></h1>
        <h4 id="inventoryFormMsg"><?php if(isset($_SESSION['form_msg'])){echo $_SESSION['form_msg'];}?></h4>
        <div id="usePartDiv">
            <table>
                <form name="use_part" action="usePart.php" method="post">
                    <tr>
                        <th>Part ID: </th>
                        <th><input type="text" name="partID" required></th>
                    </tr>
                    <tr>
                        <th>Vendor ID: </th>
                        <th> <input type="text" name="vendorID" required></th>
                    </tr>
                    <tr>
                        <th>Product ID: </th>
                        <th><input type="text" name="productID" required></th>
                    </tr>
                    <tr>
                        <th>Part Name</th>
                        <th><input type="text" name="partName" required></th>
                    </tr>
                    <tr>
                        <th>Part Price</th>
                        <th><input type="text" name="partPrice" required</th>
                    </tr>
                                        <tr>
                        <th>Stock: </th>
                        <th><input type="text" name="stock" required</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="submit" name="s" value="Use Part"></th>
                    </tr>
                </form>
            </table>
        </div>
        