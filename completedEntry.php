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

<?php

	//This function will turn output buffering on. 
	//While output buffering is active no output is sent 
	//from the script (other than headers), 
	//instead the output is stored in an internal buffer.
	//Basically "traps" input
    ob_start();
	
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
    $output = ob_get_contents(); // get contents of trapped output  
    ob_end_clean(); // discard trapped output and stop trapping
		
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
	
	//write to file, e.g.
    $newWebpage= $title. $author .".html"; 
    $file = fopen ($newWebpage, "w"); 
    fwrite($file, $output); 
    fclose ($file);
	
	$booksTable = book;
	// Create a query for the database
	$query = "INSERT INTO $booksTable 
	(title,publish,setting,plot,oddity,themes,characters,genre,author,url) VALUES 
	('$title','$publisher','$setting','$plot','$oddity','$theme','$character','$genre','$author','$newWebpage')";

	echo $query;
	
	$response = mysqli_query($conn, $query);
	if ($response)
	{
		echo "<br>" . "New record created successfully" . "<br>";
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	//Close connection to the database
	mysqli_close($conn);
?>

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

</body>
</html>