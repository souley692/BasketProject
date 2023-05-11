<?php
require_once "../config/appConfig.php";
require_once "../config/Connexionbdd.php";

$infoBdd = array(
    'interface' => 'pdo',        // "pdo" ou "mysqli"
    'type' => 'mysql',        //  mysql ou pgsql
    'host' => 'localhost',             // adresse du serveur, en cas de travail en local localhost
    'port' => 3306,        // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
    'charset' => 'UTF8',
    'dbname' => 'basket',
    'user' => 'root',
    'pass' => '',
);


$db = connectBdd($infoBdd);
$test = new ProfilDAO($db);

// Obtenir un enregistrement par son ID
$id = 1;
$enregistrement = $test->getById($id);