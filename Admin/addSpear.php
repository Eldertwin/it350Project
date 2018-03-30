<h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>

<h2>Add Spear </h2>
<form action="insertSpear.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="spname">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="spprice">
    </p>
    <p>
        <label for="color">Color:</label>
        <input type="text" name="color" id="spcolor">
    </p>
    <p>
        <label for="weight">Weight:</label>
        <input type="text" name="weight" id="spweight">
    </p>
    <p>
        <label for="length">Length:</label>
        <input type="text" name="length" id="splength">
    </p>

    <input type="submit" value="Submit">
</form>

<p>
<?php


$database = "FFFF";
$table = "Spears";


$sql = "SELECT * FROM Spears";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SpearID: " . $row["SpearID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. " - Color: " . $row["Color"]. " - Weight: " . $row["Weight"]. " - Length: " . $row["Length"]. " - Quantity: " . $row["Quantity"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
</p>