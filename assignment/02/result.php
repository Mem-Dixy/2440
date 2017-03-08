<?php require "header.php"; ?>
<?php
$database = new database("2440A02");
$sql = "SELECT * FROM `memdixyp_2440A02`.`user`;";
$sql .= "SELECT * FROM `memdixyp_2440A02`.`person`;";
$sql .= "SELECT * FROM `memdixyp_2440A02`.`address`;";
$table = $database->query($sql); ?>

		<h3>
			Results Page
		</h3><?php
$index_a = count($table);
while (($index_a -= 1) >= 0) { ?>

		<table>
			<thead>
				<tr><?php
	foreach ($table[$index_a][0] as $key => $value) { ?>

					<th>
						<?php
		echo $key; ?>

					</th><?php
	} ?>

				</tr>
			</thead>
			<tbody><?php
	$index_b = count($table[$index_a]);
	while (($index_b -= 1) >= 0) { ?>

				<tr><?php
		foreach ($table[$index_a][$index_b] as $key => $value) { ?>

					<td>
						<?php
			echo $value; ?>

					</td><?php
		} ?>

				</tr><?php
	} ?>

			</tbody>
		</table><?php
} ?>

<?php require "footer.php"; ?>