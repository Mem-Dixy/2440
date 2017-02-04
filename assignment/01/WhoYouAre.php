<?php require "head.php" ?>
<?php
print_r($_POST);
print_r($_GET);
$name = htmlentities($_POST["name"]);
$age = htmlentities($_POST["age"]);
$address1 = htmlentities($_POST["address1"]);
$address2 = htmlentities($_POST["address2"]);
$state = htmlentities($_POST["state"]);
$gender = htmlentities($_POST["gender"]);
?>
<?php printf("Your name is %s.",$name); ?>
<br />
<?php printf("Your age is %d.",$age); ?>
<br />
<?php printf("Your address is %s $s.",$address1,$address2); ?>
<br />
<?php printf("You live in the wonderful place called $s.",$state); ?>
<br />
<?php printf("Your gender is %s.",$gender); ?>
		<h1>
			Story Idea Generator
		</h1>
<?php require "body.php" ?>