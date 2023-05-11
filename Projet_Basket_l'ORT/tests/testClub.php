<?php

require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';
require_once '../src/Model/BO/Joueur.php';
require_once '../src/Model/BO/Club.php';
require_once '../src/Model/BO/Profil.php';
use \src\Model\BO\Club;

$b = array();
$c = array();

$n = array(
    'idClub' => 45,
    'nomClub' => "Randy",
    'locClub' => "Orton",
    'gerantsClub' => $b,
    'joueursClub' => $c
);

$nC = new Club($n['idClub'], $n['nomClub'], $n['locClub']);
var_dump($nC);