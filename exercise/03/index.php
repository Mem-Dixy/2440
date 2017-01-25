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
include("server.php");
?>
	</body>
</html>