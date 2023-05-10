<?php
require_once '../../config/appConfig.php';
require_once '../../config/globalConfig.php';
require_once '../../config/Connexionbdd.php';

use DAO\CompetitionDAO;
use BO\Competition;


	if(!empty($_POST)){
        //apper function
		$db = connectBdd($infoBdd);
        $repo = new CompetitionDAO($db);
		
		
		$tab = array (
			'dat_debComp'=> $_POST["datedebut"],
			'dat_finComp'=>$_POST["datefin"],
			'nb_match_maxComp'=>$_POST["max"],
		);
		$act = new Competition($tab);

		$res = $repo->insert($act);
		
		var_dump($res);
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Résultats de la compétition de basket-ball</title>
		<link rel="stylesheet" href="Competition.css">
	</head>
	<body>
		<h1>Création Competition</h1>
		
		<form action="" method="post">

			<div>
				<label for="peas">Date de debut</label>
				<input type="datetime" name="datedebut" id="datedebut">
			</div>
			<div>
				<label for="peas">Date de fin</label>
				<input type="datetime" name="datefin" id="datefin">
			</div>
			<div>
				<label for="peas">Nombre max</label>
				<input type="text"  name="max" id="max">
			</div>
			</br>

			<input type="submit" value="Cree la competition">

		</form>

		
	</body>
</html>
