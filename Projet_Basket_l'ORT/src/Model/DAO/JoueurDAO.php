<?php


namespace DAO;
use BO\Joueur;
class JoueurDAO
{
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    function getAll(): ?array {
        $resultSet = NULL;
        // Créer la requête SQL qui va permettre de récupérer toutes les oeuvres
        $req = "SELECT * FROM Joueur";
        //Exécution de la rêquete
        $res = $this->bdd->query($req);
        //Si votre requête renvoie quelque chose, parcourez le résultat et insérer le dans $resultSet;
        if($res){
            while($row = $res->fetch(\PDO::FETCH_ASSOC)){
                $resultSet [] = new Joueur($row);//Car on veut un tableau d'acteur
            }
        }
        // renvoi de votre tableau contenant l'ensemble des oeuvres
        return $resultSet;
    }


    public function getById($id) {
        $stmt = $this->bdd->prepare("SELECT * FROM Joueur");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    function insert(Joueur $unJoueur): ?Joueur {

        $req = "INSERT INTO Joueur(nomJoueur, preJoueur) VALUE (:nom, :prenom); ";
        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($req);
        //On remplace les infos de la req préparée
        $nom = $unJoueur->getNomJoueur();
        $prenom = $unJoueur->getPreJoueur();
        $req = $reqPrep->execute(
            [ ':nom' => $nom,
                ':prenom'=>$prenom]
        );
        if ($req)// Si ma requête s'est bien passé
        {
            $idJoueur = $this->bdd->lastInsertId();//$this->bdd  =  $bdd
            $unJoueur->setIdJoueur($idJoueur);
        }

        //retourner le tableau $oeuvre maj avec l'id

        return $unJoueur;
    }

    function update(Joueur $unJoueur): ?Joueur
    {

        $resultat = null;

        $id = $unJoueur->getIdJoueur();
        $nom = $unJoueur->getNomJoueur();
        $prenom = $unJoueur->getPreJoueur();
        $req = "UPDATE Joueur SET nomJoueur= :nom, preJoueur= :prenom WHERE idJoueur= :id";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [':nom' => $nom,
                ':prenom' => $prenom,
                ':id' => $id]);

        if ($res) {
            $resultat = $unJoueur;
        }
        return $resultat;
    }

    function delete(Joueur $unJoueur): ?Joueur{

        $id = $unJoueur->getIdJoueur();
        $nom = $unJoueur->getNomJoueur();
        $prenom = $unJoueur->getPreJoueur();

        $resultat = null;

        $req = "DELETE FROM Joueur WHERE idJoueur = :id";
        $reqPrep = $this->bdd->prepare($req);
        $res = $reqPrep->execute(
            [":id"=>$id]
        );

        if ($res){
            $resultat = $unJoueur;
        }
        return $resultat;

    }






    }