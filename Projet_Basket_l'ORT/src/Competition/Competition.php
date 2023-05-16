<?php
require_once '../../config/appConfig.php';
require_once '../../config/globalConfig.php';
require_once '../../config/Connexionbdd.php';

$repo = new \DAO\CompetitionDAO($infoBdd);
$res = $repo->getAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Competition Basket ORT</title>
    <link rel="stylesheet" href="../Match/M.css">
</head>
<body>
	<h1>Competition</h1>
    <br>
	<a href="FormulaireInsertCompet.php">Cree une nouvelle compétition</a> <br> <br>
	<?php
    for($i =0;$i<count($res); $i++){


    ?>
    <table>
        <tr>
            <td>Competition</td>
            <td>date debut Competion</td>
            <td>date debut Competion</td>
            <td>Nombre match </td>

        </tr>
        <tr>
            <td><?php echo $res[$i]["dat_debComp"]?></td>;
            <td><?php echo $res[$i]["dat_finComp"]?></td>;
            <td><?php echo $res[$i]["nb_match_maxComp"]?></td>;

        </tr>

    </table>
    <br>
<?php
    }

    ?>
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
