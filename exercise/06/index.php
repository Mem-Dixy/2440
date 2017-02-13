<?php
$PATH = "/lock/";
$SSL_CLIENT_KEY_FILE = "23d8f2a3fab5b6-key.pem";
$SSL_CLIENT_CERT_FILE = "23d8f2a3fab5b6-cert.pem";
$CA_CERT_FILE = "cleardb-ca.pem";
$PATH_TO_SSL_CLIENT_KEY_FILE = $PATH.$SSL_CLIENT_KEY_FILE;
$PATH_TO_SSL_CLIENT_CERT_FILE = $PATH.$SSL_CLIENT_CERT_FILE;
$PATH_TO_CA_CERT_FILE = $PATH.$CA_CERT_FILE;
$db = mysqli_init();
$db->ssl_set(PATH_TO_SSL_CLIENT_KEY_FILE, PATH_TO_SSL_CLIENT_CERT_FILE, PATH_TO_CA_CERT_FILE, null, null);
//
$host="us-cdbr-iron-east-04.cleardb.net";
$port=3306;
$socket="";
$user="bc9b863d027fb5";
$password="49b5f0b8";
$dbname="ad_9d2d0deee119756";
$con = new mysqli($host, $user, $password, $dbname, $port, $socket) or die ('Could not connect to the database server' . mysqli_connect_error());
$con->close();
//
include "head.php";
include "body.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>PHP Starter Application</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div style="text-align:center;">
			<img alt="Image of the student." src="images/student.jpg"><br />
			<h3><a href="http://hellopoetry.com/poem/677401/if-i-were-a-fish/">if I were a fish</a></h3>
			<span>
				i wish i was a fish swimming in a brook<br />
				swimming in the river and every little nook<br />
				in and out of reed having lots of fun<br />
				coming up for air basking in the sun
			</span>
			<br /><br />
			<span>
				hiding under rocks from the fishermen<br />
				wait until there gone then come out again<br />
				swimming with the flow as it goes down stream<br />
				swimming past the roach and the golden bream
			</span>
			<br /><br />
			<span>
				i would be so happy just to be a fish and hope i dont get caught<br />
				would be my only wish.
			</span>
			<h4><a href="http://hellopoetry.com/william-worthless-1/">WILLIAM WORTHLESS</a></h4>
		</div>
	</body>
</html>