<?php
declare(strict_types=1);
define('DUMP', true);

require_once '../config/appConfig.php';
require_once '../config/Connexionbdd.php';

$db = connectBdd($infoBdd);
var_dump($db);

use BO\Competition;
use DAO\CompetitionDAO;

if(!is_null($db)){
    $repo = new CompetitionDAO($db);

    $DateDeb = date_create("2023-08-19");
    echo date_format($DateDeb, "Y/m/d H:i:s");
    $DateFin = date_create("2023-08-19");
    echo date_format($DateFin, "Y/m/d H:i:s");


    echo("Insert compet");

    $tab = array (
        "date_debutComp"=>$DateDeb,
        "date_finComp"=>$DateFin,
        "nb_match_maxcom"=>10
    );
    var_dump($tab);

    $uneCompet = new Competition($tab);
    $res = $repo->insert($uneCompet);
    var_dump($res);
}
