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