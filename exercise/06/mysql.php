<?php
$host = "127.0.0.1";
$username = "root";
$passwd = "";
$dbname = "library";
$port = 3306;
$socket = "";
$mysqli = new mysqli($host, $username, $passwd, $dbname, $port, $socket) or die('Could not connect to the database server' . mysqli_connect_error());
if ($mysqli->connect_error) {
	die("#".$mysqli->connect_errno.":".$mysqli->connect_error);
}
echo 'Success...'.$mysqli->host_info."\n";
$mysqli->close();
?>