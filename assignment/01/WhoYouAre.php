<?php require "head.php" ?>
		<h1>
			Story Idea Generator
		</h1>
		<form accept-charset="utf-8" action="index.php" autocomplete="on" enctype="text/plain" method="post">
			Please Create a Character to put into the story.<br>
			Name: <input type="text" name="Name"><br>
			Age: <input type="number" name="Age"><br>
			Gender: F<input type="radio" value="F" name="Gender" checked="checked">  M<input type="radio" value="M" name="Gender"><br>
			Class:
			<select name="Class">
				<option value="Detective">Detective</option>
				<option value="Scientist">Scientist</option>
				<option value="Soldier">Soldier</option>
				<option value="Doctor">Doctor</option>
			</select><br>
			<input type="submit" value="Show Me" name="Create"><br>
			<input type="hidden" value ="1" name="sneaky"> 
		</form>
<?php require "body.php" ?>