<?php
namespace  src\Model\BO;
class Joueur {
    private $idJoueur;
    private $preJoueur;
    private $nomJoueur;
    private $dateJoueur;
    private $club;

    public function __construct($idJoueur, $preJoueur, $nomJoueur, $dateJoueur, $club) {
        $this->idJoueur = $idJoueur;
        $this->preJoueur = $preJoueur;
        $this->nomJoueur = $nomJoueur;
        $this->dateJoueur = $dateJoueur;
        $this->club = $club;
    }

    // Accesseurs/Mutateurs
    public function getIdJoueur() {
        return $this->idJoueur;
    }

    public function getPreJoueur() {
        return $this->preJoueur;
    }

    public function setPreJoueur($preJoueur) {
        $this->preJoueur = $preJoueur;
    }

    public function getNomJoueur() {
        return $this->nomJoueur;
    }

    public function setNomJoueur($nomJoueur) {
        $this->nomJoueur = $nomJoueur;
    }

    public function getDateJoueur() {
        return $this->dateJoueur;
    }

    public function setDateJoueur($dateJoueur) {
        $this->dateJoueur = $dateJoueur;
    }

    public function getClub() {
        return $this->club;
    }

    public function setClub($club) {
        $this->club = $club;
    }
}