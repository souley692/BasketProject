<?php

namespace DAO;

use src\Model\BO\Competition;

class CompetitionDAO
{

    private \PDO $bdd;
    function __construct(\PDO $bdd){

        $this->bdd=$bdd;
    }

    function getAll(): ?array {
        $resultSet = NULL;
        // Créer la requête SQL qui va permettre de récupérer toutes les oeuvres
        $req = "SELECT * FROM Competition";
        //Exécution de la rêquete
        $res = $this->bdd->query($req);
        //Si votre requête renvoie quelque chose, parcourez le résultat et insérer le dans $resultSet;
        if($res){
            while($row = $res->fetch(\PDO::FETCH_ASSOC)){
                $resultSet [] = new Competition($row);//Car on veut un tableau d'acteur
            }
        }
        // renvoi de votre tableau contenant l'ensemble des oeuvres
        return $resultSet;
    }

    function getByID(int $id): ?array{
        $resultatSet = NULL;

        // Créer votre requête de sélection en utilisant une requête préparée
        $req= "SELECT * FROM Competition where idcomp = :id";
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

    function insert(Competition $uneCompet): ?Competition{

        $req = "INSERT INTO Competion(date_debutComp,date_finComp,nb_match_maxcom ) VALUE (:dateDebutComp, :dateFinComp, :nombreMatchMax); ";
        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($req);
        //On remplace les infos de la req préparée
        $dateDebut = $uneCompet->getDat_debComp();
        $dateFin = $uneCompet->getDat_finComp();
        $nombreMatchMax = $uneCompet->getNb_match_maxComp();
        $req = $reqPrep->execute(
            [ ':dateDebutComp' => $dateDebut,
                ':dateFinComp'=>$dateFin,
                    'nombreMatchMax'=>$nombreMatchMax]

        );
        if ($req)// Si ma requête s'est bien passé
        {
            $idcomp = $this->bdd->lastInsertId();//$this->bdd  =  $bdd
            $uneCompet->setIdcomp($idcomp);
        }


        return $uneCompet;
    }

    function update(Competition $uneCompet): ?Competition{

        $resultat = null;

        $idcomp = $uneCompet->getIdcomp();
        $dateDebut = $uneCompet->getDat_debComp();
        $dateFin = $uneCompet->getDat_finComp();
        $nbMatchMaxComp= $uneCompet->setNb_match_maxComp();
        $req = "UPDATE Competition SET dat_debComp= :dateDebut, dat_finComp= :dateFin, nb_match_maxComp= :nbMatchMaxComp WHERE idcomp= :idcomp ";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [':dateDebut'=> $dateDebut,
                ':dateFin'=> $dateFin,
                ':nbMatchMaxComp'=> $nbMatchMaxComp,
                   ':idcomp'=>$idcomp ]);

        if ($res){
            $resultat = $uneCompet;
        }
        return $resultat;


    }

    function delete(Competition $uneCompet): ?Competition{

        $idcomp= $uneCompet->getIdcomp();


        $resultat = null;

        $req = "DELETE FROM Competition WHERE idcomp = :id";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [":id"=>$idcomp]
        );

        if ($res){
            $resultat = $uneCompet;
        }
        return $resultat;

    }

}