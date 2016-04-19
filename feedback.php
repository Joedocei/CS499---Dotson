<!--please refer to Home.php for full documentation on HTML elements and sections-->
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
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
	<form action="" method="POST">
        <select class="searchField" name = "searchOptions">;
            <option value = "0"> Select any... </option>";
            <option value = "publish">Publisher</option>";
            <option value = "title">Title</option>";
            <option value = "author">Author</option>";
            <option value = "setting">Setting</option>";
            <option value = "characters">Character</option>";
            <option value = "plot">Plot</option>";
            <option value = "themes">Theme</option>";
			<option value = "genre">Genre</option>";
            <option value = "oddity">Oddity</option>";
            <option value = "*">All</option>";
        </select>
		for<br>
		<input type="text" name="searchText"><br>
	<input type="submit">
	</form>
    </p>
</div>

<!-- php tag
tell PHP to start and stop interpreting the code between them
-->
<?php
// Get a connection for the database
$dbHost = "mysql.cs.uky.edu";
$dbUser = "srve222";
$dbPass = "u0459665";

/*
create connection
last parameter is the database to be used
mysqli_connect — Open a new connection to the MySQL server
*/
$conn = mysqli_connect($dbHost, $dbUser, $dbPass,"srve222");

// Check connection
if ($conn->connect_error)
{
	/*
	report the error and close the connection
	die — Equivalent to exit
	*/
    die("Connection failed: " . $conn->connect_error);
}

//create variable for database table
$bookTable = "book";

//store the search option(publisher, title, author, etc...) into a variable
$searchOption = $_POST["searchOptions"];

//store the user entered search text into a variable
$searchText = $_POST["searchText"];

//unset(destroy the contents) a given variable
unset($sql);

//if there are contents in $searchOption and $searchText assign them the sql variable
if ($searchOption)
{
	$sql[] = "$searchOption";
}
if ($searchText)
{
	$sql[] = "'%$searchText%'";
}

// Create a query for the database
$query = "SELECT * FROM $bookTable";

/*
if the sql variable is not empty
empty — Determine whether a variable is empty
*/
if (!empty($sql))
{
	/*
	construct the rest of the query call
	implode — Join array elements with a string
	*/
	$query .= ' WHERE ' . implode(' LIKE ', $sql);
}

else //report error
{
	echo "Error-empty sql variable: $sql <br>";
}

/*
the next line is commented out purposely
this line will show the constructed query on the screen for debug purposes
*/
//echo $query;

/*Get a response from the database by sending the connection and the query
mysqli_query — Performs a query on the database
return values
	Returns FALSE on failure. 
	For successful SELECT, SHOW, DESCRIBE or EXPLAIN queries mysqli_query() will return a mysqli_result object. 
	For other successful queries mysqli_query() will return TRUE.
*/
$response = mysqli_query($conn, $query);

//if our query did not fail
if ($response)
{
	/*
	ouptut success to the screen - success being a valid search on the database
	echo — Output one or more strings
	*/
	echo "<br>" . "Records searched successfully." . "<br>";
}
else 
{
	/*
	ouptut failure to the screen
	mysqli_error — Returns a string description of the last error
	*/
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*
if there are no lines returned from our query
mysqli_num_rows — Gets the number of rows in a result
*/
if(!mysqli_num_rows($response))
{
	//output following string to the user asking if they want to add an entry into database
	echo "No data for " . $searchText. ". Would you like to Add an entry into the Database?";
	echo "<a href= \"entryPage.php\"> Click Here! </a>";
}

//there are result(s) in from our query
else 
{
	//echo the following html to create a results table
	echo '<table align="center" cellspacing="5" cellpadding="8">';
	
	/*
	while there are rows of results left from our query
	mysqli_fetch_array - fetches a result row as an associative array, a numeric array, or both
	*/
	while($row = mysqli_fetch_array($response))
	{
		//echo a row of our reponse variable to the screen
		// "." concatenates strings
		echo '<tr><td><a href =' . 
		$row['url'] . '>' .
		$row['title'] . '</td><td align="left">'  . "by: " .
		$row['author'] . '</a></td>' . '</tr>';
	}
	//echo closing table tag
	echo '</table>';
}

// Close connection to the database
mysqli_close($conn);

//close php
?>

<!-- close body-->
</body>
<!-- close html-->
</html>
