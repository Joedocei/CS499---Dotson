<?php
if($_POST)
{
	$name = $_POST['name'];
	$content = $_POST['commentSection'];
	$handle = fopen("comments.html","a") or die("Unable to open file!");
	fwrite($handle, $name . "<br>" . $content . "<br>");
	fclose($handle);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Project</title>
</head>
<body>

<p>
<h2>Title : Bleak House</h2><br>
Publisher : Bleak House was first published as a serial between March 1852 and September 1853<br>
Author : Charles Dickens<br>
Setting : There is some debate among scholars as to when Bleak House is set. The English legal historian Sir William Holdsworth sets the action in 1827; 
however, reference to preparation for the building of a railroad in Chapter LV suggests the 1830s.<br>
Character : Esther Summerson, Lady Dedlock, John Jarndyce, Richard Carstone, Ada Clare, Harold Skimpole, Lawernce Boythorn, 
Sir Leicester Dedlock, Mr. Tulkinghorn, Mr. Snagsby, Miss Flite, Mr. William Guppy, Inspector Bucket, Mr. George, 
Caddy Jellyby, Krook, Jo, Allan Woodcourt, Grandfather Smallweed, Mr. Vholes, Conversation Kenge<br>
Plot : At the centre of Bleak House is the long-running legal case, Jarndyce and Jarndyce, which came about because someone wrote several conflicting wills. 
This legal case is used by Dickens to satirize the English judicial system, and he makes use of his earlier experiences as a law clerk, 
and as a litigant seeking to enforce copyright on his earlier books.<br>
Theme : Legal Reform<br>
Genre : Novel<br>
Oddity : NULL
</p>

<form action = "" method = "POST">
Comments: <textarea rows = "10" cols = "30" name = "commentSection"></textarea><br>
Name: <input type = "text" name = "name"><br>
<input type = "submit" value = "Post!"><br>
</form>
<?php include "comments.html"; ?>
</body>
</html>