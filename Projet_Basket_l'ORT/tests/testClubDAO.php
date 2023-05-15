<?php

//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once "../config/appConfig.php";
require_once "../config/Connexionbdd.php";
require_once "../config/globalConfig.php";
require_once "../src/Model/DAO/ProfilDAO.php";
require_once "../src/Model/BO/Profil.php";

use src\Model\BO\Joueur;
use DAO\JoueurDAO as PDAO;

