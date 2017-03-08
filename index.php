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
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PHP Starter Application</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <td>
                        <a href="assignment/01/WhoAmI.php">Assignment 1</a>
                    </td>
                    <td>
                        <a href="assignment/02/index.php">Assignment 2</a>
                    </td>
                    <td>
                        <a href="assignment/03/index.php">Assignment 3</a>
                    </td>
                    <td>
                        <a href="assignment/04/index.php">E-Commerce</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="exercise/01/index.php">Exercise 01</a>
                    </td>
                    <td>
                        <a href="exercise/02/index.php">Exercise 02</a>
                    </td>
                    <td>
                        <a href="exercise/03/index.php">Exercise 03</a>
                    </td>
                    <td>
                        <a href="exercise/04/index.php">Exercise 04</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="exercise/05/index.php">Exercise 05</a>
                    </td>
                    <td>
                        <a href="exercise/06/index.php">Exercise 06</a>
                    </td>
                    <td>
                        <a href="exercise/07/index.php">Exercise 07</a>
                    </td>
                    <td>
                        <a href="exercise/08/index.php">Exercise 08</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="exercise/09/index.php">Exercise 09</a>
                    </td>
                    <td>
                        <a href="exercise/10/index.php">Exercise 10</a>
                    </td>
                    <td>
                        <a href="exercise/11/index.php">Exercise 11</a>
                    </td>
                    <td>
                        <a href="exercise/12/index.php">Exercise 12</a>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <a href="exercise/13/index.php">Exercise 13</a>
                    </td>
                    <td>
                        <a href="exercise/14/index.php">Exercise 14</a>
                    </td>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="text-align:center;">
            <img alt="Image of the student." src="images/student.jpg"><br />
            <h3><a href="http://hellopoetry.com/poem/677401/if-i-were-a-fish/">if I were a fish</a></h3>
            <span>
                i wish i was a fish swimming in a brook<br />
                swimming in the river and every little nook<br />
                in and out of reed having lots of fun<br />
                coming up for air basking in the sun
            </span>
            <br /><br />
            <span>
                hiding under rocks from the fishermen<br />
                wait until there gone then come out again<br />
                swimming with the flow as it goes down stream<br />
                swimming past the roach and the golden bream
            </span>
            <br /><br />
            <span>
                i would be so happy just to be a fish and hope i dont get caught<br />
                would be my only wish.
            </span>
            <h4><a href="http://hellopoetry.com/william-worthless-1/">WILLIAM WORTHLESS</a></h4>
        </div>
        <table>
            <thead>
                <tr>
                    <th>
                        Hobbies
                    </th>
                    <th>
                        Interests
                    </th>
                    <th>
                        Favorite Book
                    </th>
                    <th>
                        Favorite Film
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Watching paint dry, ice melt, and snails race.
                    </td>
                    <td>
                        Sleeping. Eating. Working. Learning.
                    </td>
                    <td>
                        Php and MySQL Web Development, Fifth Edition
                    </td>
                    <td>
                        <a href="http://www.imdb.com/title/tt0808240/">Turks in Space</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>