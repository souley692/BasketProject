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

	<a href="CreeCompetition.php">Cree une nouvelle compétition</a>
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

<h1>Visualisation Compétition</h1>

    <table>
        <thead>
        <tr>
            <th>Position</th>
            <th>Nom du Concurrent</th>
            <th>Score Total</th>
            <th>Score Étape 1</th>
            <th>Score Étape 2</th>
            <th>Score Étape 3</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>250</td>
            <td>100</td>
            <td>75</td>
            <td>75</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>200</td>
            <td>75</td>
            <td>50</td>
            <td>75</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob Johnson</td>
            <td>175</td>
            <td>50</td>
            <td>75</td>
            <td>50</td>
        </tr>
        </tbody>
    </table>

</body>
</html>
