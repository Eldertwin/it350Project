<?php

include ("session.php");
session_start();
 
$database = "FFFF";
$table = "Axes";

if ($db){

$insertAxe = "INSERT INTO $table (Name, Price, Color, Weight, Length, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[length]', '1')";
mysqli_query($db,$insertAxe);

header("Location: admin.php");


}

 
?>