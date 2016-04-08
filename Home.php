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

<div class="recentTags">
</div>

<div class ="donate">
</div>

<div class="textBlock">
</div>

<div class="bottomInfo">
</div>

</body>
</html>
