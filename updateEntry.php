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
	/*
	get the filename for the file that we need to update from POST
	*/
	$fileToUpdate = $_POST['fileName'];
	
	/*
	the next line is commented out purposely
	this line will show the file we are updating on the screen for debug purposes
	*/
	//echo $fileToUpdate;
	
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

	//create variables for respective tables
	$bookTable = "book";
	
	// Create a query for the database
	$query = "SELECT * FROM $bookTable WHERE bid = $fileToUpdate";
	
	/*
	the next line is commented out purposely
	this line will show the constructed query on the screen for debug purposes
	*/
	echo $query;
	
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
		//output following string to the user
		echo "No data for bid = $fileToUpdate.";
	}

	//there are result(s) in from our query
	else 
	{		
		/*
		while there are rows of results left from our query - should only be ONE
		mysqli_fetch_array - fetches a result row as an associative array, a numeric array, or both - associative in this case
		*/
		while($row = mysqli_fetch_array($response))
		{
			//store our array values into variables for later use
			$title = $row['title'];
			$author = $row['author'];
			$publisher = $row['publish'];
			$setting = $row['setting'];
			$plot = $row['plot'];
			$oddity = $row['oddity'];
			$themes = $row['themes'];
			$characters = $row['characters'];
			$genre = $row['genre'];
		}
	}

	// Close connection to the database
	mysqli_close($conn);

//close php
?>

<p>

<!-- goes to updatedCompletedEntry.php when form is submitted-->
<form action="updatedCompletedEntry.php" method="post">
	<!-- fieldset tag
	draws a box around the related elements
	-->
	<fieldset class="fieldset-auto-width">
	
		<!-- legend tag
		defines a caption for the <fieldset> element
		-->
		<legend>Book Details</legend>
		<div>
			<!-- label tag
			defines a label for an <input> element
			it provides a usability improvement for mouse users, because if 
				the user clicks on the text within the <label> element, it toggles the control
			for - Specifies which form element a label is bound to
			-->
			<label for = "title">Title:</label>
			
			<!-- input tag
			specifies an input field where the user can enter data
			name - Specifies the name of an <input> element
			value - Specifies the value of an <input> element
			required - Specifies that an input field must be filled out before submitting the form
			aria-required - used to indicate that user input is required on an element before a form can be submitted
			-->
			<!-- 
			input tags are wrapped into php statements in order to use the variables from previous php block.
			we are using these variables to fill in the text boxes with the information already entered into the database
			so the user only changes what they need to
			-->
			<?php echo "<input id=\"title\" name=\"title\" value=\"$title\" required aria-required=\"true\">"; ?>
        </div>
		
		<div>
			<label for = "author">Author:</label>
			<?php echo "<input id=\"author\" name=\"author\" value=\"$author\" required aria-required=\"true\">"; ?>
        </div>
		
		<div>
			<label for = "publish">Publisher:</label>
			<?php echo "<input id=\"publish\" name=\"publish\" value=\"$publisher\">"; ?>
        </div>
		
		<div>
			<label for = "setting">Setting:</label>
			<?php echo "<input id=\"setting\" name=\"setting\" value=\"$setting\">"; ?>
        </div>

		<div>
			<label for = "plot">Plot:</label>
			<?php echo "<input id=\"plot\" name=\"plot\" value=\"$plot\" required aria-required=\"true\">"; ?>
        </div>
		
		<div>
			<label for = "oddity">Oddity:</label>
            <?php echo "<input id=\"oddity\" name=\"oddity\" value=\"$oddity\">"; ?>
        </div>
		
		<div>
			<label for = "theme">Theme(s):</label>
            <?php echo "<input id=\"theme\" name=\"theme\" value=\"$themes\">"; ?>
        </div>
		
		<div>
			<label for = "character">Character(s):</label>
            <?php echo "<input id=\"character\" name=\"character\" value=\"$characters\">"; ?>
        </div>
		
		<div>
			<label for = "genre">Genre:</label>
            <?php echo "<input id=\"genre\" name=\"genre\" value=\"$genre\">"; ?>
        </div>
		
        <div class="submit">
			<!-- input tag
			specifies an input field where the user can submit form
			value - Specifies the value of an <input> element
			-->
            <input type="submit" value="Save">
        </div>
	
		<!-- 
		This php block is passing the filename that needs to be updated to the file specified in form action above.
		Notice that the input type is hidden: hidden field does not show on the page. 
			Therefore the visitor can't type anything into a hidden field, which leads to the purpose of the field:
			To submit information that is not entered by the visitor.
		-->
		<?php 
			$currentFileName = $fileToUpdate;
			echo "<input type=\"hidden\" name=\"fileName\" value=\"$currentFileName\">";
		?>
	<!--close fieldset-->
	</fieldset>

<!--close form-->
</form>

<!--close paragraph-->
</p>

<!--close body-->
</body>

<!--close html-->
</html>