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
	
	/*
	the next line is commented out purposely
	this line will show the initial character set on the screen for debug purposes
	*/
	//printf("Initial character set: %s\n", mysqli_character_set_name($conn));
	
	/*
	change character set to utf8
	mysqli_set_charset — Sets the default client character set
	mysqli_character_set_name — Returns the default character set for the database connection
	*/
	if (!mysqli_set_charset($conn, "utf8")) {
		printf("Error loading character set utf8: %s\n", mysqli_error($conn));
		exit();
	} else {
		printf("Current character set: %s\n", mysqli_character_set_name($conn));
	}

	/*
	assigning variables from user entered data - data is sanitized
	mysqli_real_escape_string — Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
	*/	
	$title = mysqli_real_escape_string($conn, $_POST["title"]);
	$publish = mysqli_real_escape_string($conn, $_POST['publish']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);
	$setting = mysqli_real_escape_string($conn, $_POST['setting']);
	$character = mysqli_real_escape_string($conn, $_POST['character']);
	$plot = mysqli_real_escape_string($conn, $_POST['plot']);
	$theme = mysqli_real_escape_string($conn, $_POST['theme']);
	$genre = mysqli_real_escape_string($conn, $_POST['genre']);
	$oddity = mysqli_real_escape_string($conn, $_POST['oddity']);
	
	/*ob_start - will turn output buffering on. 
	While output buffering is active no output is sent 
	from the script (other than headers), 
	instead the output is stored in an internal buffer.
	Basically "traps" input
	*/
    ob_start();
?>

<!--trapping data into buffer -->
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

<p>
<h1>Title : <?php echo $title; ?></h1><br>
Publisher : <?php echo $publish; ?><br>
Author : <?php echo $author; ?><br>
Setting : <?php echo $setting; ?><br>
Character : <?php echo $character; ?><br>
Plot : <?php echo $plot; ?><br>
Theme : <?php echo $theme; ?><br>
Genre : <?php echo $genre; ?><br>
Oddity : <?php echo $oddity; ?>
</p>

</body>
</html>


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

	//create variables for book table
	$booksTable = book;
	
	$fileToUpdate = $_POST['fileName'];
	//echo $fileToUpdate;
	
	// Create a query for the database to update with the user information
	$query = "UPDATE $booksTable SET
	title = '$title', publish = '$publish', setting = '$setting', plot = '$plot', oddity = '$oddity',
	themes = '$theme', characters = '$character', genre = '$genre',author = '$author' WHERE bid = $fileToUpdate";
	
	/*
	the next line is commented out purposely
	this line will show the constructed query on the screen for debug purposes
	*/
	echo $query;

	/*
	Get a response from the database by sending the connection and the query
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
		ouptut success to the screen - success being an valid update on the database
		echo — Output one or more strings
		*/
		echo "<br>" . "New record updated successfully" . "<br>";
	}
	else 
	{
		/*
		ouptut failure to the screen
		mysqli_error — Returns a string description of the last error
		*/
		echo "Error(Update): " . $sql . "<br>" . mysqli_error($conn);
	}
	
	// Create a query for the database to get the bookID 
	$query = "SELECT * FROM $booksTable WHERE title='$title' AND author='$author'";
	
	/*
	the next line is commented out purposely
	this line will show the constructed query on the screen for debug purposes
	*/
	//echo $query;

	/*
	Get a response from the database by sending the connection and the query
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
		ouptut success to the screen - success meaning we got a bookID
		echo — Output one or more strings
		currently commented out since the output buffer is currently being captured
		*/
		//echo "<br>" . "Got result" . "<br>";
	}
	else 
	{
		/*
		ouptut failure to the screen
		mysqli_error — Returns a string description of the last error
		*/
		echo "Error(SELECT - getting bid): " . $sql . "<br>" . mysqli_error($conn);
	}
	
	//initialize bookID variable to hold bid from query
	$bookID = 0;
	
	/*
	if there are no lines returned from our query
	mysqli_num_rows — Gets the number of rows in a result
	*/
	if(!mysqli_num_rows($response))
	{
		//output following string to the user
		echo "No data for query: $query";
	}

	//We have result(s) from our query
	else 
	{		
		/*
		while there are rows of results left from our query - should only be ONE
		mysqli_fetch_array - fetches a result row as an associative array, a numeric array, or both. Here we use associative
		*/
		while($row = mysqli_fetch_array($response))
		{
			//set the bookID variable equal to the bookID from the query
			$bookID = $row['bid'];
		}
	}
	
	/*
	the next line is commented out purposely
	this line will show the bookID on the screen for debug purposes
	*/
	//echo $bookID;

	//create a variable to hold the new webpage url
    $newWebpage = $bookID .".html";
	
	//update database entry - adding value into the url column
	$query = "UPDATE $booksTable SET url = '$newWebpage' WHERE bid = $bookID";
	
	/*
	Get a response from the database by sending the connection and the query
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
		ouptut success to the screen - success meaning a valid update into database
		echo — Output one or more strings
		currently commented out since the output buffer is currently being captured
		*/
		//echo "<br>" . "Updated successfully" . "<br>";
	}
	else 
	{
		/*
		ouptut failure to the screen
		mysqli_error — Returns a string description of the last error
		*/
		echo "Error(UPDATE): " . $sql . "<br>" . mysqli_error($conn);
	}
	
?>

<!-- 
This php block is passing the filename that needs to be updated to the file specified in form action above.
Notice that the input type is hidden: hidden field does not show on the page. 
	Therefore the visitor can't type anything into a hidden field, which leads to the purpose of the field:
	To submit information that is not entered by the visitor.
-->
<form action = "updateEntry.php" method = "post">
	<?php 
		$currentFileName = $bookID;
		echo "<input type=\"hidden\" name=\"fileName\" value=\"$currentFileName\">";
	?>
	<input type="submit" value = "Update Entry">
</form>

	
<?php
	/*
	get contents of trapped output
	ob_get_contents — Return the contents of the output buffer	
	*/
    $output = ob_get_contents();
    
	//ob_end_clean — Clean (erase) the output buffer and turn off output buffering
	ob_end_clean();
	
	/*
	create a new html file
	fopen — Opens file or URL
	*/
	$file = fopen ($newWebpage, "w");

	/*
	write the html code to the file
	fwrite — Binary-safe file write
	*/
    fwrite($file, $output); 
	
	/*
	closing the newWebpage file
	fclose — Closes an open file pointer
	*/
    fclose ($file);
	
	/*
	change permissions on file to allow readability by all
	chmod — Changes file mode
	*/
	chmod($newWebpage, 0644);
	
	
	//Close connection to the database
	mysqli_close($conn);
?>

<!--Display output to the screen for debug purposes -->
<p>
Captured information<br>
Title : <?php echo $title; ?><br>
Publisher : <?php echo $publish; ?><br>
Author : <?php echo $author; ?><br>
Setting : <?php echo $setting; ?><br>
Character : <?php echo $character; ?><br>
Plot : <?php echo $plot; ?><br>
Theme : <?php echo $theme; ?><br>
Genre : <?php echo $genre; ?><br>
Oddity : <?php echo $oddity; ?><br><br>
<a href="<?php echo $newWebpage; ?>">Click here to go to page</a>
</p>

<!-- close body-->
</body>

<!-- close html-->
</html>