<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			Class Exercise 04
		</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	
<?php
$host = "localhost";
$user = "root"
$password = "";
$dbname = "library";
//connection string


$host="us-cdbr-iron-east-04.cleardb.net";
$port=3306;
$socket="";
$user="bc9b863d027fb5";
$password="49b5f0b8";
$dbname="ad_9d2d0deee119756";
$con = new mysqli($host, $user, $password, $dbname, $port, $socket) or die ('Could not connect to the database server' . mysqli_connect_error());
$con->close();

require_once "dbconnect.php";

$library = $"`library`."
$insert = "INSERT INTO ".$library