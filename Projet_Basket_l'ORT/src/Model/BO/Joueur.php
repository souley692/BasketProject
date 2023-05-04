<?php
namespace  src\Model\BO;
class Joueur {
    private $id;
    private $prenom;
    private $nom;
    private $dateNaissance;
    private $sexe;
    private $club;

    public function __construct($id, $prenom, $nom, $dateNaissance, $sexe, $club) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->sexe = $sexe;
        $this->club = $club;
    }

    // Accesseurs/Mutateurs
    public function getId() {
        return $this->id;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function getClub() {
        return $this->club;
    }

    public function setClub($club) {
        $this->club = $club;
    }
}