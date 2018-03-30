<h1><a href = "admin.php">Fancy Foam Fighters Admin Home<?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>

<h2> Add Customers </></h2>

<form action="insertCustomers.php" method="post">
    <p>
        <label for="fName">First Name:</label>
        <input type="text" name="fName" id="cfname">
    </p>
    <p>
        <label for="lName">Last Name:</label>
        <input type="text" name="lName" id="clname">
    </p>
    <p>
        <label for="pNumber">Phone Number:</label>
        <input type="text" name="pNumber" id="cPnumber">
    </p>
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="cUsername">
    </p>
    
    <p>
        <label for="password">Password:</label>
        <input type="text" name="password" id="cpassword">
    </p>
    

    <input type="submit" value="Submit">
</form>


<p>
<?php
$database = "FFFF";
$table = "Customers";


$sql = "SELECT * FROM Customers";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "CustomerID: ". $row["CustomerID"]. " - Name: ". $row["FirstName"]. " " . $row["LastName"] . " - Phone Number: ". $row["PhoneNumber"]. " - Username: ". $row["Username"]. "<br>" ;
    }
} else {
    echo "0 results";
}
?>
</p>