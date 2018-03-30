<?php

include ("session.php");
session_start();
 
$database = "FFFF";
$table = "Swords";

if ($db){

$insertSword = "INSERT INTO $table (Name, Price, Color, Weight, Length, Quantity) 
VALUES ('$_POST[swname]','$_POST[swprice]', '$_POST[swcolor]','$_POST[swweight]', '$_POST[swlength]', '1')";
mysqli_query($db,$insertSword);

header("Location: addSword.php");


}

 
?>