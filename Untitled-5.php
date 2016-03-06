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
    <p>ADD TO DATABASE</p>
    <p>JOURNAL</p>
    <p>CONFERENCE</p>
    <p>CALL FOR PAPERS</p>
    </div>
    <div class="verticalLineRight">
    </div>
    <img src="victorianera.jpeg" alt="Victorian Era">
    <img src="VicTimes.jpg" alt="Victorian Times">
    <div class="rightBannerText">
    	<p>WEB ADDRESS<br><br><br>EMAIL CONTACT</p>
    </div>
</div>

<div class="searchBar">
	<p>&nbsp</p>
    <p>&nbsp</p>
        
    <p>
    Search in
    <form action="feedback.php" method="POST">  
        <select class="searchField" name = "searchOptions">;
            <option value = "0"> Select any... </option>";
            <option value = "publisher">Publisher</option>";
            <option value = "title">Title</option>";
            <option value = "author">Author</option>";
            <option value = "setting">Setting</option>";
            <option value = "character">Character</option>";
            <option value = "plot">Plot</option>";
            <option value = "theme">Theme</option>";
            <option value = "oddity">Oddity</option>";
            <option value = "all">All</option>";
        </select>
    <input type="submit" />
	</form>
	for
	<form action="feedback.php" method="POST">
		First name: <input type="text" name="FirstName" value="Mickey"><br>
		Last name: <input type="text" name="LastName" value="Mouse"><br>
		<input type="submit" value="Submit">
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