<?php
require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';

use BO\Joueur;

$testJoueur = new Joueur();

$newJoueur = array(
    'idJoueur'=> '1',
    'nomJoueur'=>'Bach',
    'preJoueur'=>'Louis',
    'dateJouer'=>'08/09/2000',
    'clubJoueur'=> 'Chicago Bulls'
);

$testJoueur = new Joueur($newJoueur);
var_dump($testJoueur);
