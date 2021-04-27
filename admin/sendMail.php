<?php
    
    require "../database/connection.php";
    $selection = $_POST['bikes'];
    $selection2 = $_POST['seller'];
    

    $connection = db_connect();
    
    $x = "";
    $sql = "select part_name from parts where part_id = '$selection'";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)) {
            $x = $row["part_name"];
     }
    $sql2 = "select sell_name from sellers where email_address = '$selection2'";
    $result2 = mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $name = $row2["sell_name"];
    $msg = "Dear $name at $selection2,\nWe need more of $x parts here at New England Bikes.\n Please get back to us when you can.\n";
    $msg = wordwrap($msg,70);
    //mail("griffin.baxter@mymail.champlain.edu", "Ordering more $x parts", $msg);
    
    
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
    <h1>Email View | <a href="./adminView.php">Admin Home</a></h1>
    <body>
        <form action="orderStart.php" method="post">
        <input type="hidden" value= name="choice_value">
             $msg
        <input type="submit" value="Go Back">
        </form>
    </body>
 </HTML>
ABC;
    
?>