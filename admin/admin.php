<?php
//admin php functions
//Kelsey McCutcheon, Griffin Baxter, Jacob Capra

require "../database/connection.php";

$connection = db_connect();


#add quantity of parts to the inventory database
#KELSEY
function addInventory(){
}


#order parts from supplier
#send email?
#GRIFFIN
function orderInventory(){}


#check the inventory available, list out info
#based on user specifications
#GRIFFIN
function checkInventory(){}

#remove a user given quantity of a user given
#part ID from database
#should be used by repair's useItem
#KELSEY
function removeInventory(){

}

#manage login information, remove user
#JACOB - validate user info
function removeUsers(){}

#manage login information, add user
#JACOB
function addUsers(){}

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

function fetchUsers(){
    $connection = db_connect();
    $query = "select user_id, email_address, first_name, last_name, user_type from users;";
    $result = mysqli_query($connection, $query);
    $users = array();
    //$users[] = ['User ID', 'Email Address', 'First Name', 'Last Name', 'User Role'];
    while($row = mysqli_fetch_assoc($result)) {
        $users[] = ['id' => $row['user_id'],
                    'email' => $row['email_address'],
                    'fn' => $row['first_name'],
                    'ln' => $row['last_name'],
                    'role' => $row['user_type']];
    }
    return $users;
}

?>