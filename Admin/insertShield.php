<?php

include ("session.php");
session_start();
 
$database = "FFFF";
$table = "Shields";

if ($db){

$insertShield = "INSERT INTO $table (Name, Price, Color, Weight, Length, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[size]', '1')";
mysqli_query($db,$insertShield);

header("Location: admin.php");


}

 
?>