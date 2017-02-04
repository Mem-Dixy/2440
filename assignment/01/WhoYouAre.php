<?php require "head.php" ?>
<?php
$name = htmlentities($_GET["name"]);
$age = htmlentities($_GET["age"]);
$address = htmlentities($_GET["address"]);
$state = htmlentities($_GET["state"]);
$gender = htmlentities($_GET["gender"]);
switch ($gender) {
	case "M":
		$gender = "Male";
	break;
	case "F":
		$gender = "Female";
	break;
	case "T":
		$gender = "Trans";
	break;
	case "O":
		$gender = "Other";
	break;
	default:
		$gender = "Unspecified";
	break;
}
$color = "#000000";
switch ($gender) {
	case "M":
		$color = "#cc0000";
	break;
	case "F":
		$color = "#00cc00";
	break;
	case "T":
		$color = "#0000cc";
	break;
	case "O":
		$color = "#777777";
	break;
}
$text = "";
$file = fopen("PostPage.txt", "r");
while (!feof($file)) {
	$text = $text.fread($file, 1024);
}
fclose($file);
$text = str_replace("’", "'", $text);
$text = str_replace("\n", "<br />", $text);
?>
<?php require "head.php" ?>
		<h1 style="text-align:center;">
			Who You Are
		</h1>
		<form accept-charset="utf-8" action="WhoYouAre.php" autocomplete="on" enctype="text/plain" method="get">
			<table style="background-color:<?php printf($color); ?>;">
				<tbody>
					<tr>
						<td>
							<?php printf("Your name is %s.",$name); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
								printf("Your age is %d.<br />",$age);
								$year = date("Y");
								$index = 0;
								do {
									printf($year-$index);
									if (($index += 1) > $age) {
										break;
									}
									printf(", ");
								}
								while(true);
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php printf("Your address is %s.",$address); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php printf("Your state abbrivation is %s.",$state); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php printf("Your gender is %s.",$gender); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php printf("Poem: %s",$text); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
<?php require "body.php" ?>