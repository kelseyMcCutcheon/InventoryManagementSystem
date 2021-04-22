<?php
//admin php functions
//Kelsey McCutcheon, Griffin Baxter, Jacob Capra

require "../database/connection.php";

$connection = db_connect();


#add quantity of parts to the inventory database
#KELSEY
function addInventory(){
    pass
}

#order parts from supplier
#send email?
#GRIFFIN
function orderInventory(){
    pass
}

#check the inventory available, list out info
#based on user specifications
#GRIFFIN
function checkInventory(){
    pass
}

#remove a user given quantity of a user given
#part ID from database
#should be used by repair's useItem
#KELSEY
function removeInventory(){
    pass
}

#manage login information, remove user
#JACOB - validate user info
function removeUsers(){
    pass
}

#manage login information, add user
#JACOB
function addUsers(){
    pass
}

?>