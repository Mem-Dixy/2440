<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			Class Exercise 02
		</title>
	</head>
	<body><?php
$d = date("D");
echo "$d<br />";
if ($d == "Fri" or $d == "Sat" || $d == "Sun") {
	$message = "Have a nice weekend!";
}
else if ($d == "Mon") {
	$message = "Oh no it is Monday.";
}
else {
	$message = "Have a nice day!";
}
echo $message."<br />";
switch ($d) {
	case "Sun":
		echo 'Today is Sunday';
	break;
	case "Mon":
		echo "Today is Monday";
	break;
	case "Tue":
		echo "Today is Tuesday";
	break;
	case "Wed":
		echo "Today is Wednesday";
	break;
	case "Thu":
		echo "Today is Thursday";
	break;
	case "Fri":
		echo "Today is Friday";
	break;
	case "Sat":
		echo "Today is Saturday";
	break;
	default:
		echo "What day is it today?";
	break;
}
$a = 0;
$b = 0;
print("<table><tr><th>A</th><th>B</th></tr>");
for ($index=0; $index<5; $index+=1) {
	$a += 10;
	$b += 5;
	print("<tr><td>$a</td><td>$b</td></tr>");
}
print("</table>");
$index = rand(0,50);
$count = rand(51,100);
while ($index<$count) {
	$count -= 1;
	$index += 1;
}
echo "<br />Loop stopped at i=$index and num = $count";
echo "<br />Year of Birth:<select>";
$year = date("Y");
for ($index=0; $index<100; $index+=1) {
	if ($index>10) {
		echo "<option>".($year-$index)."</option>";
	}
}
echo "</select>";
?>
	</body>
</html>