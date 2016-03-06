<html>
<body>

You chose
<?php 
	echo $_POST['searchOptions'];
	echo "<br/>"
?>

<?php
// Get a connection for the database
$dbHost = "mysql.cs.uky.edu";
$dbUser = "jqhi222";
$dbPass = "u0874080";

//create connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass,"jqhi222");

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Create a query for the database
$query = "SELECT * FROM Example";

// Get a response from the database by sending the connection
// and the query
$response = mysqli_query($conn, $query);
if(!$response )
{
  die('Could not get data: ' . mysql_error());
}

// If the query executed properly proceed
if($response)
{
	echo '<table align="left"
	cellspacing="5" cellpadding="8">
	
	<tr>
	<td align="left"><b>pID</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Age</b></td>
	</tr>';

	// mysqli_fetch_array will return a row of data from the query
	// until no further data is available
	while($row = mysqli_fetch_array($response)){
	
	echo '<tr><td align="left">' . 
	$row['pid'] . '</td><td align="left">' . 
	$row['FirstName'] . '</td><td align="left">' . 
	$row['LastName'] . '</td><td align="left">' .
	$row['Age'] . '</td><td align="left">';	
	echo '</tr>';
	}
	echo '</table>';
} 

else 
{
	echo "Couldn't issue database query<br />";
	echo mysqli_error($conn);
}
// Close connection to the database
mysqli_close($conn);

?>
</body>
</html>
