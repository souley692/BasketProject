<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Résultats de la compétition de basket-ball</title>
    <link rel="stylesheet" href="Competition.css">
</head>
<body>
	<h1>Competition</h1>

	<a href="CreeCompetition.php">Cree une nouvelle competition</a>
	<table>
		<tr>
			<th>Equipe</th>
			<th>Score</th>
		</tr>
		<tr>
			<td>Equipe A</td>
			<td><?php echo("ScoreA"); ?></td>
</tr>
<tr>
    <td>Equipe B</td>
    <td><?php echo("ScoreB"); ?></td>
</tr>
</table>
</body>
</html>
