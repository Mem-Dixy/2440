<?php
class adventurer {
	public $name;
	public $race;
	public $class;
	public $age;
	public $gender;
	public $kingdom;
	public function __construct ($moo) {
		$this->$name = htmlentities($moo["name"]);
		$this->$race = htmlentities($moo["race"]);
		$this->$class = htmlentities($moo["class"]);
		$this->$age = htmlentities($moo["age"]);
		$this->$gender = htmlentities($moo["gender"]);
		$this->$kingdom = htmlentities($moo["kingdom"]);
	}
	public function __destruct() {
		print 'contained ';
	}
	public function image () {
		return $this->race.$user->class.$user->gender;
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
			print("class=".$user->class."<br />");
			print("age=".$user->age."<br />");
			print("gender=".$user->gender."<br />");
			print("kingdom=".$user->kingdom."<br />");
			print("<img alt=\"image\" src=\"image/".$user->image().".jpg\" />");
		?>
	</body>
</html>