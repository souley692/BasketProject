<?php

require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';
require_once '../src/Model/BO/Joueur.php';
require_once '../src/Model/BO/Club.php';

use src\Model\BO\Club;
use src\Model\BO\Joueur;
$array1 = array();
$array2 = array();
$c = new Club(2, "test", "miami",$array1, $array2);

$n = array(
    'idJoueur'=> 1,
    'nomJoueur'=>'Bach',
    'preJoueur'=>'Louis',
    'dateJoueur'=> "shit",
    'clubJoueur'=> $c
);

$testJoueur = new Joueur($n['idJoueur'], $n['preJoueur'], $n['nomJoueur'], $n['dateJoueur'], $n['clubJoueur']);

var_dump($testJoueur);
