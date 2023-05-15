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

        $DateDebut = $_POST['datedebut'];
        $DateFin = $_POST['datefin'];
        $Date_Debut = $DateDebut;
        $Date_Fin = $DateFin;

        $NbMatchMax= filter_input(INPUT_POST, 'max',FILTER_SANITIZE_NUMBER_INT);


		
		
		$tab = array (
			'dat_debComp'=> $Date_Debut,
			'dat_finComp'=>$Date_Fin,
			'nb_match_maxComp'=>$NbMatchMax,
		);

		$laCompet = new Competition($tab);
		$unecomp = $repo->insert($laCompet);
		$act = new Competition($tab);
        var_dump($act);

		$res = $repo->insert($act);
		
		var_dump($res);
	}

?>

