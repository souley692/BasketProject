<?php

require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';
require_once '../src/Model/BO/Joueur.php';
require_once '../src/Model/BO/Club.php';
require_once '../src/Model/BO/Profil.php';
use \src\Model\BO\Profil;

$n = array(
    'nom' => "josh",
    'prenom' => "Randy",
    'telephone' => 04532423,
    'profil' => 'admin'
);

$nP = new Profil($n['nom'], $n['prenom'], $n['telephone'], $n['profil']);
var_dump($nP);