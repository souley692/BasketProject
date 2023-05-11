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

$infoBdd = array(
    'interface' => 'pdo',        // "pdo" ou "mysqli"
    'type' => 'mysql',        //  mysql ou pgsql
    'host' => 'localhost',             // adresse du serveur, en cas de travail en local localhost
    'port' => 3306,        // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
    'charset' => 'UTF8',
    'dbname' => 'basket l\'ort',
    'user' => 'root',
    'pass' => '',
);


$db = connectBdd($infoBdd);
dump_var($db, DUMP, 'Objet PDO:');

if (!is_null($db)) {
    $repo = new DAO\JoueurDAO($db);
    echo '<h1>Liste des joueurs</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Joueur numéro 5 </h1>';
    $res = $repo->getById(4);
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Ajout joueur </h1>';
    $tab = array (
        'nomJoueur'=>"GOUDET",
        'preJoueur'=>"Joachim"
    );
    $joueur = new BO\Joueur($tab);
    $res = $repo->insert($joueur);
    dump_var($res, DUMP, 'résultat après insertion :');


    echo '<h1>Modif acteur </h1>';
    $joueur->setPreAct('Bertrand');
    dump_var($res, DUMP, 'résultat:');
    $res = $repo->update($joueur);
    dump_var($res, DUMP, 'résultat:');


    echo '<h1>Supression joueur </h1>';
    $tab = array (
        'numJoueur' => 26
    );
    $act = new BO\Joueur($tab);

    $res = $repo->delete($act);
    dump_var($res, DUMP, 'résultat:');


}