<?php
$host = "memdixyp.mysql.db.hostpoint.ch";
$username = "memdixyp_root";
$passwd = "zrT6HtXcnTzT2lS3MBTG";
$dbname = "memdixyp_monster";
$port = 3306;
$socket = "";
$mysqli = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
$sql = "SELECT * FROM `memdixyp_monster`.`monster`";
if (!$mysqli->multi_query($sql)) {
	echo "You are a looser. Here is why: " . $mysqli->error;
}
do {
	$res = $mysqli->store_result();
	if ($res) {
		var_dump($res->fetch_all(MYSQLI_ASSOC));
		$res->free();
	}
} while ($mysqli->more_results() && $mysqli->next_result());
$mysqli->close();
?>