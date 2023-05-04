<?php



namespace DAO;

    use BO\Club;

    class ClubDAO
    {
        private $pdo;

        // constructeur
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        // méthode pour ajouter un club à la base de données
        public function add(Club $club)
        {
            $stmt = $this->pdo->prepare("INSERT INTO Club (nom, ville) VALUES (:nom, :ville)");
            $stmt->execute(array(
                ':nom' => $club->getNom(),
                ':location' => $club->getLocation()
            ));
            $clubId = $this->pdo->lastInsertId();
            $club->setId($clubId);
            return $club;
        }

        // méthode pour récupérer un club de la base de données par son ID
        public function getById($id)
        {
            $stmt = $this->pdo->prepare("SELECT * FROM Club WHERE id=:id");
            $stmt->execute(array(':id' => $id));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) {
                return null;
            }
            $club = new Club($row['id'], $row['nom'], $row['location']);
            return $club;
        }

        // méthode pour mettre à jour les informations d'un club dans la base de données
        public function update(Club $club)
        {
            $stmt = $this->pdo->prepare("UPDATE Club SET nom=:nom, ville=:ville WHERE id=:id");
            $stmt->execute(array(
                ':id' => $club->getId(),
                ':nom' => $club->getNom(),
                ':ville' => $club->getVille()
            ));
            return $club;
        }

        // méthode pour supprimer un club de la base de données
        public function delete(Club $club)
        {
            $stmt = $this->pdo->prepare("DELETE FROM Club WHERE id=:id");
            $stmt = $this;
        }
    }
