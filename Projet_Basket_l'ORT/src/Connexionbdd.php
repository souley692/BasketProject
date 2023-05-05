<?php
function connectBdd(array $infoBdd): ?\PDO {
    $bd = null;

    // Récupération des informations de votre table infoBdd
    $myport = ($infoBdd['port']);
    $type = ($infoBdd['type']);
    $myinterface = ($infoBdd['interface']);
    $myhost = ($infoBdd['host']);
    $Charset = ($infoBdd['charset']);
    $DBname = ($infoBdd['dbname']);
    $meUser = ($infoBdd['user']);
    $mdp = ($infoBdd['pass']);
    //  Composition du DSN
    $dsn = "mysql:dbname=$DBname;host=$myhost;port=$myport;charset=$Charset";

    //  Instanciation de PDO (le \ pour l'espace de nom racine... peut être utile par la suite)
    $bd = new \PDO($dsn, $meUser, $mdp);


    // renvoi de votre object PDO

    return $bd;

}
