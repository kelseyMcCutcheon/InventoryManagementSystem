<?php
require "../database/connection.php";

$connection = db_connect();

$sql = "SELECT product_id, product_name from products";

$result = mysqli_query($connection, $sql);


$x = "";
if ($result != false) {
    $x .= '<label for="bikes">Choose a bike:</label>';
    $x .= '<select name="bikes" id="bikes">';
    while($row = mysqli_fetch_assoc($result)) {
        $x .= "<option value=" . $row["product_id"] . ">" . $row["product_name"] . "</option>";
    }
}
$x .= "</select>";


echo <<<ABC
    <HTML>
    <head>
        <title>Select Inventory Type</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <h1>Select Iventory Type | <a href="./adminView.php">Admin Home</a></h1>
    <body>
        <form action="GetInventory.php" method="post">
        <input type="hidden" value= name="choice_value">
             $x
        <input type="submit" value="submit">
        </form>
    </body>
 </HTML>
ABC;

?>