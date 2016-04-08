<?php
	header('Content-type: text/css; charset:UTF-8');
?>

html
{
	height: 100%;
}

a:hover
{
	text-decoration: none;
	background: red;
}

.header
{
	text-align: center;
    color: #026405;
}

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

#banner p
{
	margin-left: 25px;
    line-height: .7;
    color: #FDFDFD;
    text-align: center;
}

#banner img
{
	float:left;
	height: 150px;
    width: 300px;
}

//for right most save button
#saveButton
{
	margin-top: -50%; 
	left: 5%;
}

.verticalLine
{
	margin-left: 200px;
    height: 150px;
    border-left: 2px solid #FDFDFD;
    margin-top: 0px;
    float: left;

}

.verticalLineRight
{
	margin-left: 30px;
	margin-right: 30px;
    height: 150px;
    border-left: 2px solid #FDFDFD;
    float: left;
}

.rightBannerText p
{
	float: left;
    margin-top: 50px;
}

.searchBar
{
	margin-left: 500px;
}

.searchField
{
	width: 200px;
	height: 50px;
}

legend {
    padding:0 5px;
    text-align:center;
}

.fieldset-auto-width
{
	display: inline-block;
	margin-left: 35%;
	margin-top: 1%;
}

fieldset > div {
    margin:10px 0;
}
fieldset > legend + div {
    margin-top:0;
}
fieldset > div:last-child {
    margin-bottom:0;
}
label {
    display:inline-block;
    width:100px;
}
input {
    width:200px;
}
div > input[type="submit"] {
    background: #ccc;
    border:1px solid #999;
    width:auto;
}
input:required {
    background:hsl(180, 50%, 90%);
    border:1px solid #999;
}
input:optional {
    background:hsl(300, 50%, 90%);
    border:1px dotted hsl(180, 50%, 90%);
}
input:valid,
input:in-range {
    background:hsl(120, 50%, 90%);
    border-color:hsl(120, 50%, 50%);
}

input:invalid,
input:out-of-range {
    border-color:hsl(0, 50%, 50%);
    background:hsl(0, 50%, 90%);
}
.help {
    display:none;
    font-size:90%;
}
input:focus + .help {
    display:inline-block;
}

div.submit {
    margin-left:100px;
}