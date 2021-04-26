<?php
//admin php functions
//Kelsey McCutcheon, Griffin Baxter, Jacob Capra

require "../database/connection.php";

$connection = db_connect();


#add quantity of parts to the inventory database
#KELSEY
function addInventory(){
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addInventory']))
    {
    echo <<<ABC
    <HTML>
        <body>
            <h1>add Inventory</h1>
        </body>
    </HTML>
ABC;
    }
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
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['removeInventory']))
    {
        echo <<<ABC
        <HTML>
            <body>
                <h1>remove Inventory</h1>
            </body>
        </HTML>
ABC;
    }
}

#manage login information, remove user
#JACOB - validate user info
function removeUsers(){}

#manage login information, add user
#JACOB
function addUsers(){}

?>