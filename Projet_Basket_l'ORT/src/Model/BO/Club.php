<?php

namespace src\Model\BO;

class

Club {
    private $idClub;
    private $nomClub;
    private $locClub;
    private $gerantsClub = array();
    private $joueursClub = array();

    public function __construct($idClub, $nomClub, $locClub) {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->locClub = $locClub;
    }

    // Accesseurs/Mutateurs
    public function getIdClub() {
        return $this->idClub;
    }

    public function getNomClub() {
        return $this->nomClub;
    }

    public function setNomClub($nomClub) {
        $this->nomClub = $nomClub;
    }

    public function getLocation() {
        return $this->locClub;
    }

    public function setLocClub($locClub) {
        $this->locClub = $locClub;
    }

    public function getGerantsClub() {
        return $this->gerantsClub;
    }

    public function setGerantsClub($gerantsClub) {
        $this->gerantsClub = $gerantsClub;
    }

    public function getJoueursClub() {
        return $this->joueursClub;
    }

    public function setJoueursClub($joueursClub) {
        $this->joueursClub = $joueursClub;
    }

    // Méthodes de gestion des gérants et joueurs
    public function addGerant($gerantClub) {
        $this->gerantsClub[] = $gerantClub;
    }

    public function removeGerantClub($gerantClub) {
        $key = array_search($gerantClub, $this->gerantsClub);
        if ($key !== false) {
            unset($this->gerantsClub[$key]);
        }
    }

    public function addJoueurClub($joueurClub) {
        $this->joueursClub[] = $joueurClub;
    }

    public function removeJoueurClub($joueurClub) {
        $key = array_search($joueurClub, $this->joueursClub);
        if ($key !== false) {
            unset($this->joueursClub[$key]);
        }
    }
}