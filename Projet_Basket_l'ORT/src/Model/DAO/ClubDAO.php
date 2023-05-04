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
            $stmt = $this->pdo->prepare("INSERT INTO Club (nomClub, locClub) VALUES (:nomClub, :locClub)");
            $stmt->execute(array(
                ':nomClub' => $club->getNom(),
                ':locClub' => $club->getLocation()
            ));
            $clubId = $this->pdo->lastInsertId();
            $club->setId($clubId);
            return $club;
        }

        // méthode pour récupérer un club de la base de données par son ID
        public function getById($id)
        {
            $stmt = $this->pdo->prepare("SELECT * FROM Club WHERE idClub=:idClub");
            $stmt->execute(array(':id' => $id));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) {
                return null;
            }
            $club = new Club($row['idClub'], $row['nomClub'], $row['locClub']);
            return $club;
        }

        // méthode pour mettre à jour les informations d'un club dans la base de données
        public function update(Club $club)
        {
            $stmt = $this->pdo->prepare("UPDATE Club SET nomClub=:nomClub, locClub=:locClub WHERE idClub=:idClub");
            $stmt->execute(array(
                ':id' => $club->getIdClub(),
                ':nom' => $club->getNomClub(),
                ':ville' => $club->getLocationClub()
            ));
            return $club;
        }

        // méthode pour supprimer un club de la base de données
        public function delete(Club $club)
        {
            $stmt = $this->pdo->prepare("DELETE FROM Club WHERE idClub=:idClub");
            $stmt = $this;
        }
    }
