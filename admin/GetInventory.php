<?php
   require "../database/connection.php";

    $connection = db_connect();
    $selection = $_POST['bikes'];
    
    $sql = "SELECT product_name, list_price, stock from products where product_id = '$selection'";
    $sql2 = "select part_name, part_price, stock from parts where product_id = '$selection'";
    
    $result = mysqli_query($connection, $sql);
    $result2 = mysqli_query($connection, $sql2);
    
    $x = "";
    if ($result != false) {
        $x .= '<table class="table">
        <tr>
        <th>Name<th>
        <th>Price<th>
        <th>Stock<th>
        </tr>';
        // $x .= '<select name="bikes" id="bikes">';
        while($row = mysqli_fetch_assoc($result)) {
            $x .= '<tr>';
            $x .= "<td>" . $row["product_name"] . "</td>";
            $x .= "<td> $" . $row["list_price"] . "</td>";
            $x .= "<td>" . $row["stock"] . "</td>";
            $x .= "</tr>";
        }
        while($row = mysqli_fetch_assoc($result2)) {
            $x .= '<tr>';
            $x .= "<td>" . $row["part_name"] . "</td>";
            $x .= "<td> $" . $row["part_price"] . "</td>";
            $x .= "<td>" . $row["stock"] . "</td>";
            $x .= "</tr>";
        }
        $x .= '</table>';
    } else {
        $x .= "Something isn't working";
    }
    
echo <<<ABC
    <HTML>
    <head>
        <title>Selected Inventory</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <h1>Selected Inventory| <a href="./adminView.php">Admin Home</a></h1>
    <body>
        <form action="selectType.php" method="post">
        <input type="hidden" value= name="choice_value">
             $x
        <input type="submit" value="Go Back">
        </form>
    </body>
 </HTML>
ABC;
    
    
?>