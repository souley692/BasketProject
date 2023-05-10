<?php

namespace DAO;




require_once '../../BOProfil.php';

class ProfilDAO
{
    private $db;

    // Constructeur
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // Récupérer un profil à partir de son ID
    public function getById(int $id): BOProfil
    {
        $query = 'SELECT * FROM profils WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return new BOProfil($row['id'], $row['nom'], $row['prenom'], $row['telephone'], $row['profil']);
    }

    // Mettre à jour un profil
    public function update(BOProfil $profil): void
    {
        $query = 'UPDATE profils SET nom = :nom, prenom = :prenom, telephone = :telephone WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $profil->getId(), PDO::PARAM_INT);
        $stmt->bindParam(':nom', $profil->getNom(), PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $profil->getPrenom(), PDO::PARAM_STR);
        $stmt->bindParam(':telephone', $profil->getTelephone(), PDO::PARAM_STR);
        $stmt->execute();
    }
}