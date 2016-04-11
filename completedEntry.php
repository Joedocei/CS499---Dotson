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
	/*ob_start - will turn output buffering on. 
	While output buffering is active no output is sent 
	from the script (other than headers), 
	instead the output is stored in an internal buffer.
	Basically "traps" input
	*/
    ob_start();
	
	//assigning variables from user entered data
	$title = $_POST["title"];
	$publisher = $_POST['publisher'];
	$author = $_POST['author'];
	$setting = $_POST['setting'];
	$character = $_POST['character'];
	$plot = $_POST['plot'];
	$theme = $_POST['theme'];
	$genre = $_POST['genre'];
	$oddity = $_POST['oddity'];
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
Title : <?php echo $title; ?><br>
Publisher : <?php echo $publisher; ?><br>
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
	/*
	get contents of trapped output
	ob_get_contents — Return the contents of the output buffer	
	*/
    $output = ob_get_contents();
    
	//ob_end_clean — Clean (erase) the output buffer and turn off output buffering
	ob_end_clean();
		
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
	
	//create a variable to hold the new webpage url
    $newWebpage = $title. $author .".html"; 
    
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
	close the newWebpage file
	fclose — Closes an open file pointer
	*/
    fclose ($file);
	
	//create variables for book table
	$booksTable = book;
	
	// Create a query for the database
	$query = "INSERT INTO $booksTable 
	(title,publish,setting,plot,oddity,themes,characters,genre,author,url) VALUES 
	('$title','$publisher','$setting','$plot','$oddity','$theme','$character','$genre','$author','$newWebpage')";

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
		ouptut success to the screen
		echo — Output one or more strings
		*/
		echo "<br>" . "New record created successfully" . "<br>";
	}
	else 
	{
		/*
		ouptut failure to the screen
		mysqli_error — Returns a string description of the last error
		*/
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	//Close connection to the database
	mysqli_close($conn);
?>

<!--Display output to the screen for debug purposes -->
<p>
Captured information<br>
Title : <?php echo $title; ?><br>
Publisher : <?php echo $publisher; ?><br>
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
