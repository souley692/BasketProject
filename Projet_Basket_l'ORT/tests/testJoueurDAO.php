<?php
//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);


require_once "../config/appConfig.php";
require_once "../config/Connexionbdd.php";
require_once "../config/globalConfig.php";
require_once "../src/Model/DAO/JoueurDAO.php";
require_once "../src/Model/BO/Joueur.php";

use src\Model\BO\JoueurDAO as JDAO;
$infoBdd = array(
    'interface' => 'pdo',
    'type' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'charset' => 'UTF8',
    'dbname' => 'basket l\'ort',
    'user' => 'root',
    'pass' => '',
);



$db = connectBdd($infoBdd);
dump_var($db, DUMP, 'Objet PDO:');

if (!is_null($db)) {
    $repo = new DAO\JoueurDAO($db);
    echo '<h1>Liste des Joueur</h1>';
    $res = $repo->getAll();
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Joueur numéro 5 </h1>';
    $res = $repo->getById(1);
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Ajout joueur</h1>';
    $tab = array(
        'nomJoueur' => "GOUDET",
        'preJoueur' => "Joachim"
    );
    $joueur = new BO\Joueur($tab);
    $res = $repo->insert($joueur);
    dump_var($res, DUMP, 'résultat après insertion :');


    echo '<h1>Modif acteur </h1>';
    $joueur->setPreJoueur('Bertrand');
    dump_var($res, DUMP, 'résultat:');
    $res = $repo->update($joueur);
    dump_var($res, DUMP, 'résultat:');


    echo '<h1>Supression acteur </h1>';
    $tab = array(
        'idJoueur' => 26
    );
    $joueur = new BO\Joueur($tab);

    $res = $repo->delete($joueur);
    dump_var($res, DUMP, 'résultat:');
}