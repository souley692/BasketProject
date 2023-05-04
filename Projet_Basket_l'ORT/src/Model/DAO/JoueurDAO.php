<?php

namespace DAO;

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
        $sql = "SELECT * FROM Joueur WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Création de l'objet PlayerBO à partir des données de la base de données
        $player = new Joueur($row['id'], $row['nom'], $row['prenom'], $row['dateNaissance'], $row['sexe'], null);

        // Récupération du club du joueur
        $sql = "SELECT * FROM Club WHERE id = :club_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":club_id", $row['club_id']);
        $stmt->execute();
        $clubRow = $stmt->fetch(PDO::FETCH_ASSOC);

        // Création de l'objet ClubBO du joueur
        $club = new ClubBO($clubRow['id'], $clubRow['name'], $clubRow['location']);
        $player->setClub($club);

        return $player;
    }

    public function save($player)
    {
        if ($player->getId() === null) {
            // Insertion du joueur dans la base de données
            $sql = "INSERT INTO Player (prenom, nom, dateNaisssance, sexe, club_id) VALUES (:prenom, :nom, :dateNaissance, :sexe, :club_id)";
            $stmt = $this;
        }
    }
}