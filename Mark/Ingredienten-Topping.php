<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Get data

$sql = "SELECT naam FROM Ingredienten2 where Catogorie like'Topping'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Naam</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" ."<input type='checkbox' value='$row[naam]'  name='$row[naam]' />"  .$row["naam"] ."</td></tr>";   		
	
	}
	
    echo "</table>";
} 
$conn->close();

?>
