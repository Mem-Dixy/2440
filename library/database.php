<?php
class database {
	private $mysqli;
	public function __construct(string $database) {
		$host = "memdixyp.mysql.db.hostpoint.ch";
		$username = "memdixyp_root";
		$passwd = "zrT6HtXcnTzT2lS3MBTG";
		$dbname = "memdixyp_" . $database;
		$port = 3306;
		$socket = "";
		$this->mysqli = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
	}
	public function __destruct() {
		$this->mysqli->close();
	}
	public function query(string $sql) {
		if (!$this->mysqli->multi_query($sql)) {
			echo "You are a looser. Here is why: " . $this->mysqli->error;
		}
		$array = [];
		do {
			$result = $this->mysqli->store_result();
			if ($result) {
				$array[] = $result->fetch_all(MYSQLI_ASSOC);
				$result->free();
			}
		}
		while ($this->mysqli->more_results() && $this->mysqli->next_result());
		return $array;
	}
}
?>