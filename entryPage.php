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

<p>
<form action="completedEntry.php" method="post">
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
            <input id="title" name="title" value="" required aria-required="true">
        </div>
		
		<div>
			<label for = "author">Author:</label>
            <input id="author" name="author" value="" required aria-required="true">
        </div>
		
		<div>
			<label for = "publish">Publisher:</label>
            <input id="publish" name="publish" value="">
        </div>
		
		<div>
			<label for = "setting">Setting:</label>
            <input id="setting" name="setting" value="">
        </div>

		<div>
			<label for = "plot">Plot:</label>
            <input id="plot" name="plot" value="" required aria-required="true">
        </div>
		
		<div>
			<label for = "oddity">Oddity:</label>
            <input id="oddity" name="oddity" value="">
        </div>
		
		<div>
			<label for = "theme">Theme(s):</label>
            <input id="theme" name="theme" value="">
        </div>
		
		<div>
			<label for = "character">Character(s):</label>
            <input id="character" name="character" value="">
        </div>
		
		<div>
			<label for = "genre">Genre:</label>
            <input id="genre" name="genre" value="">
        </div>
		
        <div class="submit">
			<!-- input tag
			specifies an input field where the user can submit form
			value - Specifies the value of an <input> element
			-->
            <input type="submit" value="Save">
        </div>
	
	<!--close fieldset-->
	</fieldset>
<input type="submit" value="Save" id="saveButton">

<!--close form-->
</form>

<!--close paragraph-->
</p>

<!--close body-->
</body>

<!--close html-->
</html>