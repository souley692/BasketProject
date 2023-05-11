<?php

use src\Model\BO\Profil;

class ProfilDAO
{

    private $connexion;

// Constructeur qui initialise la connexion à la base de données
    public function __construct()
    {
        $this->connexion = new PDO('mysql:host=localhost;dbname=basket', 'root', '');
    }

// Méthode pour récupérer un profil à partir de son identifiant
    public function getById($id)
    {
        $requete = $this->connexion->prepare('SELECT * FROM administrateur WHERE idAdmin = :id');
        $requete->execute(array('idAdmin' => $id));
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            $profil = new Profil();
            $profil->setId($resultat['idAdmin']);
            $profil->setNom($resultat['nomAdmin']);
            $profil->setPrenom($resultat['preAdmin']);
            $profil->setTelephone($resultat['dateAdmin']);
            $profil->setProfil($resultat['logAdmin']);

            return $profil;
        } else {
            return null;
        }
    }
}
?>