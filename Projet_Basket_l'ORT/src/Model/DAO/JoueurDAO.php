<?php

namespace DAO;
use BO\Joueur;
class JoueurDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById($id)
    {
        // Requête SQL pour récupérer le joueur par son ID
        $sql = "SELECT * FROM Joueur WHERE idJoueur = :idJoueur";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Création de l'objet PlayerBO à partir des données de la base de données
        $player = new Joueur($row['idJoueur'], $row['nomJoueur'], $row['preJoueur'], $row['dateJoueur'], null);

        // Récupération du club du joueur
        $sql = "SELECT * FROM Club WHERE id = :club_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":club_id", $row['club_id']);
        $stmt->execute();
        $clubRow = $stmt->fetch(PDO::FETCH_ASSOC);

        // Création de l'objet ClubBO du joueur
        $club = new Club($clubRow['idClub'], $clubRow['nomClub'], $clubRow['locClub']);
        $player->setClub($club);

        return $player;
    }

    public function save($joueur)
    {
        if ($joueur->getIdJoueur() === null) {
            // Insertion du joueur dans la base de données
            $sql = "INSERT INTO Player (nomJoueur, preJoueur, dateJoueur, club_id) VALUES (:nomJoueur, :prenomJoueur, :dateJoueur, :club_id)";
            $stmt = $this;
        }
    }
}