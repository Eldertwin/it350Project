<?php

include ("session.php");
session_start();
 
$database = "FFFF";
$table = "Customers";

if ($db){

$insertCustomers = "INSERT INTO $table (FirstName, LastName, PhoneNumber, Username, Password) 
VALUES ('$_POST[fName]', '$_POST[lName]','$_POST[pNumber]', '$_POST[username]', '$_POST[password]')";
mysqli_query($db,$insertCustomers);



header("Location: admin.php");


}

 
?>