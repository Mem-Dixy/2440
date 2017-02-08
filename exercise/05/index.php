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