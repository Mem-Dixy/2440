<?php
function money ($key,$array) {
	return array_key_exists($key, $array) ? htmlentities($array[$key]) : "";
}
class adventurer {
	public $name;
	public $race;
	public $_class;
	public $age;
	public $gender;
	public $kingdom;
	public function __construct ($moo) {
		$this->name = money("name",$moo);
		$this->race = money("race",$moo);
		$this->_class = money("class",$moo);
		$this->age = money("age",$moo);
		$this->gender = money("gender",$moo);
		$this->kingdom = money("kingdom",$moo);
	}
	public function __destruct() {
		print 'contained ';
	}
	public function image () {
		return $this->race.$this->_class.$this->gender;
	}
}
$user = new adventurer($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			Class Exercise 03
		</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
            <?php print(rand()."<br />"); ?>
		<form action="index.php" method="post">
			<input name="name" type="text" /><br />
			<select name="race">
				<option>Dw</option>
				<option>El</option>
				<option>Ha</option>
				<option>Hu</option>
			</select><br />
			<select name="class">
				<option>Cl</option>
				<option>Fi</option>
				<option>Ma</option>
				<option>Th</option>
			</select><br />
			<input name="age" type="number" /><br />
			<select name="gender">
				<option>Ma</option>
				<option>Fe</option>
			</select><br />
			<input name="kingdom" type="text" /><br />
			<input type="submit" value="Send" />
		</form>
		<?php
			print("name=".$user->name."<br />");
			print("race=".$user->race."<br />");
			print("class=".$user->_class."<br />");
			print("age=".$user->age."<br />");
			print("gender=".$user->gender."<br />");
			print("kingdom=".$user->kingdom."<br />");
			print("<img alt=\"image\" src=\"image/".$user->image().".jpg\" />");
		?>
	</body>
</html>