<?php
$link=mysqli_connect("localhost","Library","nitsikkim");
if(!$link)
{
	$error="Unable to connect to the server";
	include "error.html.php";
	exit();
}
if(!mysqli_set_charset($link,"utf8"))
{
	$error="Unable to set character Encoding";
	include "error.html.php";
	exit();
}
if(!mysqli_select_db($link,"library"))
{
	$error="Unable to select Database";
	include "error.html.php";
	exit();
}
?>