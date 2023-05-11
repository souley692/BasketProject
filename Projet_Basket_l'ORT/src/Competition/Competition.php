<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Résultats de la compétition de basket-ball</title>
    <link rel="stylesheet" href="../Match/M.css">
</head>
<body>
	<h1>Competition</h1>
    <br>
	<a href="FormulaireInsertCompet.php">Cree une nouvelle compétition</a> <br> <br>
	<table>
		<tr>
			<th>Equipe</th>
			<th>Score</th>
		</tr>
		<tr>
			<td>Equipe A</td>
			<td><?php echo("ScoreA"); ?></td>
        </tr>
        </tr>
        <tr>
            <td>Equipe B</td>
            <td><?php echo("ScoreB"); ?></td>
        </tr>
    </table>
    <br>

<h1>Visualisation Compétition</h1> <br>

    <table>
        <tr>
            <th>Equipe domicile</th>
            <th>Score domicile</th>
            <th>Score visiteur</th>
            <th>Equipe visiteur</th>
        </tr>
        <tr>
            <td>Golden State Warriors</td>
            <td>110</td>
            <td>98</td>
            <td>Los Angeles Lakers</td>
        </tr>
        <tr>
            <td>Brooklyn Nets</td>
            <td>120</td>
            <td>115</td>
            <td>Philadelphia 76ers</td>
        </tr>
        <tr>
            <td>Chicago Bulls</td>
            <td>102</td>
            <td>90</td>
            <td>Miami Heat</td>
        </tr>
    </table>


</body>
</html>
