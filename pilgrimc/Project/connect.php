<?php
//This is where the database credentials for the specific db will go
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "riskdev_site";
$table_name = "desTable";

$connection=mysqli_connect("$servername","$username","$password","$db_name");
if (mysqli_connect_errno())
{
    echo "The application has failed to connect to the mysql database server: " .mysqli_connect_error();
}

//If 
if(isset($_POST['quote']))
    {
        $sql = "INSERT INTO desTable (quote_type) VALUES ('life cover')";
}

//testing if the query was valid
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error, data not inserted ";
}

$connection->close();

?>