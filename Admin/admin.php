<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fancy Fony Foam Fighters Admin</title>
</head>
<body>
<?php
   include("session.php");      
   session_start();
?>
        <h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>
                <h2><a href = "addSword.php">Add Sword</a></h2>
                <h2><a href = "addShield.php">Add Shield</a></h2>
                <h2><a href = "addSpear.php">Add Spear</a></h2>
                <h2><a href = "addAxe.php">Add Axe</a></h2>
                <h2><a href = "addDagger.php">Add Dagger</a></h2>
                <h2><a href = "addCustomer.php">Add Customer</a></h2>

</body>
</html>
