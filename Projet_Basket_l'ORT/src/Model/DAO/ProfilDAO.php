<?php
class ProfilDAO {
    private $dbh;

    public function __construct(PDO $dbh) {
        $this->dbh = $dbh;
    }

    public function getById($id) {
        $stmt = $this->dbh->prepare("SELECT * FROM administrateur");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}