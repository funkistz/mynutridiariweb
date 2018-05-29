<?php

$servername = "localhost";
	$username = "root";
	$password = "xxxxx";
	$dbname = "mynutridiariv2";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
	}

	if ($result = mysqli_query($conn, "SELECT imagepath FROM social")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));

    /* free result set */
    mysqli_free_result($result);
}

	mysqli_close($conn);

?>