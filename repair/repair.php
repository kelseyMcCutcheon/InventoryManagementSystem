<?php
//repair php functions
//Kelsey McCutcheon, Griffin Baxter, Jacob Capra

require "../database/connection.php";

$connection = db_connect();

#user given part ID lowers quantity of the
#given part by 1, 
#also enter info like what product it was used on?
#admin's removeInventory function
#KELSEY
function usePart(){}

#report an issue with a part
#part ID and description of issue
#send it somewhere - to admin or vendor?
#GRIFFIN
function reportIssue(){
    
}


function fetchInventory(){
    $connection = db_connect();
    $query = "select part_id, vendor_id, product_id, part_name, part_price, stock from parts;";
    $result = mysqli_query($connection, $query);
    $parts = array();
    //$parts[] = ['Part ID', 'Vendor ID', 'Product ID', 'Part Name', 'Part Price', 'Stock'];
    while($row = mysqli_fetch_assoc($result)) {
        $parts[] = ['partID' => $row['part_id'],
                    'vendorID' => $row['vendor_id'],
                    'productID' => $row['product_id'],
                    'partName' => $row['part_name'],
                    'partPrice' => $row['part_price'],
                    'stock' => $row['stock']];
    }
    return $parts;
}

?>