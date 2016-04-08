<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project</title>
<link rel = "stylesheet" type = "text/css" href="style.php">
</head>
<body>

<div class="header">
	<h1>Vanishing Victorians</h1>
</div>

<div id="banner">
	<div class="verticalLine">
    <p>ABOUT US</p>
    <p><a href= "entryPage.php">ADD TO DATABASE</a></p>
    <p>JOURNAL</p>
    <p>CONFERENCE</p>
    <p>CALL FOR PAPERS</p>
    </div>
    <div class="verticalLineRight">
    </div>
    <img src="library.jpg" alt="library">
    <div class="rightBannerText">
    	<p>WEB ADDRESS<br><br><br>EMAIL CONTACT</p>
    </div>
</div>

<div class="searchBar">
	<p>&nbsp</p>
    <p>&nbsp</p>
        
    <p>
    Search in
	<form action="feedback.php" method="post">
        <select class="searchField" name = "searchOptions">;
            <option value = "0"> Select any... </option>";
            <option value = "Publisher">Publisher</option>";
            <option value = "Title">Title</option>";
            <option value = "Author">Author</option>";
            <option value = "Setting">Setting</option>";
            <option value = "Character">Character</option>";
            <option value = "Plot">Plot</option>";
            <option value = "Theme">Theme</option>";
			<option value = "Genre">Genre</option>";
            <option value = "Oddity">Oddity</option>";
            <option value = "All">All</option>";
        </select>
		for<br>
		<input type="text" name="name"><br>
	<input type="submit">
	</form>
    </p>
</div>

<?php
// Get a connection for the database
$dbHost = "mysql.cs.uky.edu";
$dbUser = "srve222";
$dbPass = "u0459665";

//create connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass,"srve222");

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//$tableName = "Example";

$bookTable = "book";
$commentsTable = "comments";

// Create a query for the database
//$query = "SELECT * FROM $bookTable";


$searchOption = $_POST["searchOptions"];
$searchText = $_POST["searchText"];

unset($sql);

if ($searchOption) {
	$sql[] = "$searchOption";
}
if ($searchText) {
	$sql[] = "'%$searchText%'";
}

$query = "SELECT * FROM $bookTable";

if (!empty($sql)) {
	$query .= ' WHERE ' . implode(' LIKE ', $sql);
}

//echo $query;

//Get a response from the database by sending the connection
// and the query
$response = mysqli_query($conn, $query);
if ($response)
{
	echo "<br>" . "Records searched successfully." . "<br>";
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if(!mysqli_num_rows($response))
{
	echo "No data for " . $searchText. ". Would you like to Add an entry into the Databse?";
}
else
{
	echo '<table align="left" cellspacing="5" cellpadding="8">';
	
	while($row = mysqli_fetch_array($response))
	{
		echo '<tr><td align="left"><a href =\"http://www.cs.uky.edu/~jqhi222/' . $row['url'] . '\">' .
		$row['title'] . '</td><td align="left">'  . "by" .
		$row['author'] . '</a></td>' . '</tr>';
		//$row['url'] . '</td><td align="left">';	
		//echo "<a href =\"" . $row['url'] . "\">" . $row['url'] . "</a>";
	}
	echo '</table>';
	
}

/*
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
*/
// Close connection to the database
mysqli_close($conn);

?>
</body>
</html>
