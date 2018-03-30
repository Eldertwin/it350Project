<?php

include ("session.php");
session_start();
 
$database = "FFFF";
$table = "Daggers";

if ($db){

$insertDagger = "INSERT INTO $table (Name, Price, Color, Weight, Length, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[length]', '1')";
mysqli_query($db,$insertDagger);

header("Location: admin.php");


}

 
?>