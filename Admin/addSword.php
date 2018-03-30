<h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>
<h2>Add Sword </h2>
<form action="insertSword.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="swname" id="swname">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="swprice" id="swprice">
    </p>
    <p>
        <label for="color">Color:</label>
        <input type="text" name="swcolor" id="swcolor">
    </p>
    <p>
        <label for="weight">Weight:</label>
        <input type="text" name="swweight" id="swweight">
    </p>
    <p>
        <label for="length">Length:</label>
        <input type="text" name="swlength" id="swlength">
    </p>


    <input type="submit" value="Submit">
</form>

<p>
<?php


$database = "FFFF";
$table = "Swords";


$sql = "SELECT * FROM Swords";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SwordID: " . $row["SwordID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. " - Color: " . $row["Color"]. " - Weight: " . $row["Weight"]. " - Length: " . $row["Length"]. " - Quantity: " . $row["Quantity"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
</p>