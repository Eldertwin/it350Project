<h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>

<h2>Add Shield </h2>
<form action="insertShield.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="shname">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="shprice">
    </p>
    <p>
        <label for="color">Color:</label>
        <input type="text" name="color" id="shcolor">
    </p>
    <p>
        <label for="weight">Weight:</label>
        <input type="text" name="weight" id="shweight">
    </p>
    <p>
        <label for="size">Size:</label>
        <input type="text" name="size" id="shsize">
    </p>

    <input type="submit" value="Submit">
</form>

<p>
<?php


$database = "FFFF";
$table = "Shields";


$sql = "SELECT * FROM Shields";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ShieldID: " . $row["ShieldID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. " - Color: " . $row["Color"]. " - Weight: " . $row["Weight"]. " - Size: " . $row["Size"]. " - Quantity: " . $row["Quantity"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
</p>