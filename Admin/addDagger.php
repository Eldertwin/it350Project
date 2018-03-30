<h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>

<h2>Add Dagger </h2>
<form action="insertDagger.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="dname">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="dprice">
    </p>
    <p>
        <label for="color">Color:</label>
        <input type="text" name="color" id="dcolor">
    </p>
    <p>
        <label for="weight">Weight:</label>
        <input type="text" name="weight" id="dweight">
    </p>
    <p>
        <label for="length">Length:</label>
        <input type="text" name="length" id="dlength">
    </p>

    <input type="submit" value="Submit">
</form>


<p>
<?php


$database = "FFFF";
$table = "Daggers";


$sql = "SELECT * FROM Daggers";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "DaggerID: " . $row["DaggerID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. " - Color: " . $row["Color"]. " - Weight: " . $row["Weight"]. " - Length: " . $row["Length"]. " - Quantity: " . $row["Quantity"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
</p>