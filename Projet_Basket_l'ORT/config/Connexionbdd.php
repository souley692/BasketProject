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


    $bd = new \PDO($dsn, $meUser, $mdp);j

    return $bd;

}
