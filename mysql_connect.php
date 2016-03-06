<?php
$dbHost = "mysql.cs.uky.edu";
$dbUserAndName = "jqhi222";
$dbPass = "u0874080";
$dbname = "jqhi222";

//create connection
$conn = mysqli_connect($dbHost, $dbUserAndName, $dbPass,$dbname);

// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>