<?php
namespace DAO;
use src\Model\BO\Joueur;


class JoueurDAO{

    private \PDO $bdd;
    function __construct( \PDO $bdd){

        $this->bdd=$bdd;
    }

    function getAll(): ?array {
        $resultSet = NULL;
        // Créer la requête SQL qui va permettre de récupérer toutes les oeuvres
        $req = "SELECT * FROM joueur";
        //Exécution de la rêquete
        $res = $this->bdd->query($req);
        //Si votre requête renvoie quelque chose, parcourez le résultat et insérer le dans $resultSet;
        if($res){
            while($row = $res->fetch(\PDO::FETCH_ASSOC)){
                $resultSet [] = new joueur($row);
            }
        }
        // renvoi de votre tableau contenant l'ensemble des oeuvres
        return $resultSet;
    }

    function getByID(int $id): ?array{
        $resultatSet = NULL;

        // Créer votre requête de sélection en utilisant une requête préparée
        $req= "SELECT * FROM joueur where idJoueur = :id";
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


}
?>