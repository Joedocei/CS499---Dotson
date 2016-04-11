<?php
	header('Content-type: text/css; charset:UTF-8');
?>

/*HTML page height*/
html
{
	height: 100%;
}

/*Hyperlink*/
a:hover
{
	text-decoration: none;
	background: red;
}

/*Header ID*/
.header
{
	text-align: center;
    color: #026405;
}

/*Banner class for the top of each webpage*/
#banner
{
	float: left;
	height: 150px;
    width: 110%;
    margin-left: -15px;
	border: 2px solid #026405;
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#4dff4d, #009900); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#4dff4d, #009900); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#4dff4d, #009900); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#4dff4d, #009900); /* Standard syntax */
}

/*paragraph tag for banner class for the top of each webpage*/
#banner p
{
	margin-left: 25px;
    line-height: .7;
    color: #FDFDFD;
    text-align: center;
}

/*image tag for banner class for the top of each webpage*/
#banner img
{
	float:left;
	height: 150px;
    width: 300px;
}

/*for right most save button*/
#saveButton
{
	margin-top: -50%; 
	left: 5%;
}

/*Left side vertical line*/
.verticalLine
{
	margin-left: 200px;
    height: 150px;
    border-left: 2px solid #FDFDFD;
    margin-top: 0px;
    float: left;

}

/*Right side vertical line*/
.verticalLineRight
{
	margin-left: 30px;
	margin-right: 30px;
    height: 150px;
    border-left: 2px solid #FDFDFD;
    float: left;
}

/*styling for text on the right side of the banner*/
.rightBannerText p
{
	float: left;
    margin-top: 50px;
}

/*search bar styling*/
.searchBar
{
	margin-left: 500px;
}

/*search field styling*/
.searchField
{
	width: 200px;
	height: 50px;
}

/*legend styling for entry page*/
legend {
    padding:0 5px;
    text-align:center;
}

/*fieldset styling for entry page*/
.fieldset-auto-width
{
	display: inline-block;
	margin-left: 35%;
	margin-top: 1%;
}

/*div tag for fieldset styling for entry page*/
fieldset > div {
    margin:10px 0;
}

/*div and legend tag for fieldset styling for entry page*/
fieldset > legend + div {
    margin-top:0;
}

/*last div tag for fieldset styling for entry page*/
fieldset > div:last-child {
    margin-bottom:0;
}

/*label styling for entry page*/
label {
    display:inline-block;
    width:100px;
}

/*input styling for entry page*/
input {
    width:200px;
}

/*submit button styling*/
div > input[type="submit"] {
    background: #ccc;
    border:1px solid #999;
    width:auto;
}

/*required field styling for entry page*/
input:required {
    background:hsl(180, 50%, 90%);
    border:1px solid #999;
}

/*optional field styling for entry page*/
input:optional {
    background:hsl(300, 50%, 90%);
    border:1px dotted hsl(180, 50%, 90%);
}

/*valid and in-range field styling for entry page*/
input:valid,
input:in-range {
    background:hsl(120, 50%, 90%);
    border-color:hsl(120, 50%, 50%);
}

/*invalid and out-of-range field styling for entry page*/
input:invalid,
input:out-of-range {
    border-color:hsl(0, 50%, 50%);
    background:hsl(0, 50%, 90%);
}

/*help pop up styling for entry page*/
.help {
    display:none;
    font-size:90%;
}

/*focused help view field styling for entry page*/
input:focus + .help {
    display:inline-block;
}

/*submit button styling*/
div.submit {
    margin-left:100px;
}