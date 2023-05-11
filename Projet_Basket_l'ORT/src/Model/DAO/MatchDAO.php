<?php

namespace DAO;

use BO\Competition;
use src\Model\BO\Match;

class MatchDAO

{ private \PDO $bdd;
    function __construct(\PDO $bdd){

        $this->bdd=$bdd;
    }

    function getAll(): ?array {
        $resultSet = NULL;
        // Créer la requête SQL qui va permettre de récupérer toutes les oeuvres
        $req = "SELECT * FROM gestionmatch";
        //Exécution de la rêquete
        $res = $this->bdd->query($req);
        //Si votre requête renvoie quelque chose, parcourez le résultat et insérer le dans $resultSet;
        if($res){
            while($row = $res->fetch(\PDO::FETCH_ASSOC)){
                $resultSet [] = new Match($row);//Car on veut un tableau d'acteur
            }
        }
        // renvoi de votre tableau contenant l'ensemble des oeuvres
        return $resultSet;
    }

    function getByID(int $id): ?array{
        $resultatSet = NULL;

        // Créer votre requête de sélection en utilisant une requête préparée
        $req= "SELECT * FROM gestionmatch where idMatch = :id";
        //préparer votre requête
        $reqPrep = $this->bdd->prepare($req);

        // Exécution de votre requête
        $res = $reqPrep->execute(
            [":id" => $id]
        );
        if($res){
            $row =$reqPrep->fetch(\PDO::FETCH_ASSOC);//Si il n'y a qu'un seul élément le while n'est pas utile.
            $resultatSet= $row;


        }

        return $resultatSet;
    }

    function insert(Match $unMatch ): ?Match{

        $req = "INSERT INTO gestionmatch (scoreMatch,jourMatch,vainMatch) VALUES (:scoreMatch, :jourMatch, :vainMatch);";
        // On prépare la rêquete
        $reqPrep = $this ->bdd->prepare($req);
        //On remplace les infos de la req préparée
        $scoreMatch = $unMatch->getScoreMatch();
        $jourMatch = $unMatch->getJourMatch();
        $vainMatch = $unMatch->getVainMatch();
        $res = $reqPrep->execute(
            [
                ':scoreMatch' => $scoreMatch,
                ':jourMatch'=>$jourMatch,
                ':vainMatch'=>$vainMatch,
            ]

        );
        if ($res)// Si ma requête s'est bien passé
        {
            $idMatch= $this->bdd->lastInsertId();//$this->bdd  =  $bdd
            $unMatch->setIdMatch($idMatch);
        }
        else {
            var_dump("probleme de requete ");
        }


        return $unMatch;
    }

    function update(Match $unMatch): ?Match{

        $resultat = null;

        $idMatch = $unMatch->getIdMatch();
        $scoreMatch = $unMatch->getScoreMatch();
        $jourMatch = $unMatch->getJourMatch();
        $vainMatch= $unMatch->getVainMatch();
        $req = "UPDATE gestionmatch SET scoreMatch= :scoreMatch, jourMatch = :jourMatch, vainMatch= :vainMatch WHERE idMatch= :idMatch ";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [':scoreMatch'=> $scoreMatch,
                ':jourMatch'=> $jourMatch,
                ':vainMatch'=> $vainMatch,
                ':idMatch'=>$idMatch ]);

        if ($res){
            $resultat = $unMatch;
        }
        return $resultat;


    }

    function delete(Match $unMatch): ?Match{

        $idMatch= $unMatch->getIdMatch();


        $resultat = null;

        $req = "DELETE FROM gestionmatch WHERE idMatch = :id";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [":id"=>$idMatch]
        );

        if ($res){
            $resultat = $unMatch;
        }
        return $resultat;

    }

}