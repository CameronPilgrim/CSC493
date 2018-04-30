<?php
//This is where the database credentials for the specific db will go
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE riskdev_site";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//selects the database
$sql = "use riskdev_site";
if ($conn->query($sql) === TRUE) {
    echo "Database selected successfully";
} else {
    echo "Error selecting database: " . $conn->error;
}

$sql = "CREATE TABLE desTable(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    quote_type VARCHAR(30) NOT NULL,
    sex VARCHAR(30) NOT NULL,
    smoker VARCHAR(70) NOT NULL UNIQUE,
	age INT(3)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

/*if(mysqli_query(mysqli, $link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error(mysqli);
}*/

mysqli_close($conn);
?>
