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
<form action="completedEntry.php" method="post">
	<fieldset class="fieldset-auto-width">
		<legend>Book Details</legend>
		<div>
			<label for = "title">Title:</label>
            <input id="title" name="title" value="" required pattern="[A-Za-z-0-9]+" aria-required="true">
        </div>
		
		<div>
			<label for = "author">Author:</label>
            <input id="author" name="author" value="" required pattern="[A-Za-z-0-9]+" aria-required="true">
        </div>
		
		<div>
			<label for = "publish">Publisher:</label>
            <input id="publish" name="publish" value="" pattern="[A-Za-z-0-9]+">
        </div>
		
		<div>
			<label for = "setting">Setting:</label>
            <input id="setting" name="setting" value="" pattern="[A-Za-z-0-9]+">
        </div>

		<div>
			<label for = "plot">Plot:</label>
            <input id="plot" name="plot" value="" required pattern="[A-Za-z-0-9]+" aria-required="true">
        </div>
		
		<div>
			<label for = "oddity">Oddity:</label>
            <input id="oddity" name="oddity" value="" pattern="[A-Za-z-0-9]+">
        </div>
		
		<div>
			<label for = "theme">Theme(s):</label>
            <input id="theme" name="theme" value="" pattern="[A-Za-z-0-9]+">
        </div>
		
		<div>
			<label for = "character">Character(s):</label>
            <input id="character" name="character" value="" pattern="[A-Za-z-0-9]+">
        </div>
		
		<div>
			<label for = "genre">Genre:</label>
            <input id="genre" name="genre" value="" pattern="[A-Za-z-0-9]+">
        </div>
		
        <div class="submit">
            <input type="submit" value="Save">
        </div>
		
	</fieldset>
<input type="submit" value="Save" id="saveButton">
</form>
</p>

</body>
</html>