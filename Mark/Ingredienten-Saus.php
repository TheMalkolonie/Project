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

	$sql = "SELECT naam FROM Ingredienten2 where Catogorie like'saus' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	echo "<select name='Saus'>";
    	// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='$row[naam]'>"  .$row["naam"] . "</option>";
    }
    	echo "</select>";
	} else {
    	echo "0 results";
	}
	$conn->close();
	

?>
