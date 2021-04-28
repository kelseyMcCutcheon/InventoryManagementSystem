<?php
require "../database/connection.php";

$connection = db_connect();

$sql = "SELECT part_name, part_id from parts";
$sql2 = "SELECT sell_name, email_address from sellers";


$result = mysqli_query($connection, $sql);
$result2 = mysqli_query($connection, $sql2);

$x = "";
if ($result != false) {
    $x .= '<label for="bikes">Choose a bike:</label>';
    $x .= '<select name="bikes" id="bikes">';
    while($row = mysqli_fetch_assoc($result)) {
        $x .= "<option value=" . $row["part_id"] . ">" . $row["part_name"] . "</option>";
    }
}
$x .= "</select>";
if ($result2 != false) {
    $x .= '<label for="seller">Choose person to contact:</label>';
    $x .= '<select name="seller" id="seller">';
    while($row = mysqli_fetch_assoc($result2)) {
        $x .= "<option value=" . $row["email_address"] . ">" . $row["sell_name"] . "</option>";
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
    <h1>Select Iventory Item and Vendor | <a href="./adminView.php">Admin Home</a></h1>
    <body>
        <form action="sendMail.php" method="post">
        <input type="hidden" value= name="choice_value">
             $x
        <input type="submit" value="submit">
        </form>
    </body>
 </HTML>
ABC;



?>