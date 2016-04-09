<!-- !DOCTYPE html tag
web browser instruction to use the current version of HTML
as of May 2016, current HTML standard is 5
-->
<!DOCTYPE html>

<!-- html tag
tells the browser that this is an HTML document
is the container for all other HTML elements
-->
<html>

<!-- head tag
is a container for all the head elements
can be omitted in HTML 5 but is required in previous versions
	therefore we include it in the code to be safe
-->
<head>

<!-- meta tag
provides metadata about the HTML document
coded is the HTML 5 version below is HTML 4.01 version
HTML 4.01: <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
charset - Specifies the character encoding for the HTML document
-->
<meta charset=utf-8" />

<!-- title tag
defines a title in the browser tab
provides a title for the page when it is added to favorites
displays a title for the page in search engine results
-->
<title>Project</title>

<!-- link tag
used to link to external style sheets
rel - Specifies the relationship between the current document and the linked document (Required)
type - Specifies the media type of the linked document
href - Specifies the location of the linked document
-->
<link rel = "stylesheet" type = "text/css" href="style.php">

<!-- 
closing head tag
-->
</head>

<!-- body tag
defines the document's body - contains all the contents of an HTML document
-->
<body>

<!-- div tag
used to group block-elements to format them with CSS, specifically with the header class
-->
<div class="header">
	
	<!-- h1 tag
	defines the most important heading
	-->
	<h1>Vanishing Victorians</h1>
</div>

<!-- div tag
used to group block-elements to format them with CSS, specifically with the banner id
-->
<div id="banner">
	<div class="verticalLine">
	
	<!-- p tag
	defines a paragraph
	-->
    <p>ABOUT US</p>
	
	<!--a tag
	defines a hyperlink
	href - Specifies the URL of the page the link goes to
	-->
    <p><a href= "entryPage.php">ADD TO DATABASE</a></p>
    <p>JOURNAL</p>
    <p>CONFERENCE</p>
    <p>CALL FOR PAPERS</p>
    </div>
    <div class="verticalLineRight">
    </div>
	
	<!-- img tag
	defines an image in an HTML page
	alt - Specifies an alternate text for an image
	src - Specifies the URL of an image
	-->
    <img src="library.jpg" alt="library">
    <div class="rightBannerText">
		
		<!--br tag
		tag inserts a single line break.
		-->
    	<p>WEB ADDRESS<br><br><br>EMAIL CONTACT</p>
    </div>
</div>

<div class="searchBar">

	<!-- &nbsp
	non-breaking space
	means that the line should not be wrapped at that point
	used because we don't want an automatic line break at that position
	-->
	<p>&nbsp</p>
    <p>&nbsp</p>
        
    <p>
    Search in
	
	<!-- form tag
	used to create an HTML form for user input
	action - Specifies where to send the form-data when a form is submitted
	method - Specifies the HTTP method to use when sending form-data
	-->
	<form action="feedback.php" method="post">
	
		<!-- select tag
		used to create a drop-down list
		name - Specifies the name of an <select> element
		-->
        <select class="searchField" name = "searchOptions">;
		
			<!-- option tag 
			define the available options in the list
			value - Specifies the value to be sent to a server
			-->
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
		
		<!-- input tag
		specifies an input field where the user can enter data - used to accept user data
		type - Specifies the type <input> element to display
		name - Specifies the name of an <input> element
		-->
		<input type="text" name="searchText"><br>
	
	<!-- input tag
	specifies an input field where the user can submit form
	notice type difference
	-->
	<input type="submit">
	
	<!-- close form-->
	</form>
	
	<!-- close paragraph-->
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

<!-- close body-->
</body>

<!-- close html-->
</html>