<?php
$name = htmlentities($_POST["name"]);
$race = htmlentities($_POST["race"]);
$class = htmlentities($_POST["class"]);
$age = htmlentities($_POST["age"]);
$gender = htmlentities($_POST["gender"]);
$kingdom = htmlentities($_POST["kingdom"]);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			Class Exercise 03
		</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<input name="name" type="text" value="<?php print($name); ?>" /><br />
			<input name="race" type="text" value="<?php print($race); ?>" /><br />
			<input name="class" type="text" value="<?php print($class); ?>" /><br />
			<input name="age" type="text" value="<?php print($age); ?>" /><br />
			<input name="gender" type="text" value="<?php print($gender); ?>" /><br />
			<input name="kingdom" type="text" value="<?php print($kingdom); ?>" /><br />
			<input type="submit" value="Send <?php print(rand()); ?>" />
		</form>
	</body>
</html>