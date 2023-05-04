<?php

namespace src\Model\BO;

class Accueil {
    private $id;
    private $nom;
    private $location;
    private $gerants = array();
    private $joueurs = array();

    public function __construct($id, $nom, $location) {
        $this->id = $id;
        $this->nom = $nom;
        $this->location = $location;
    }

    // Accesseurs/Mutateurs
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getGerants() {
        return $this->gerants;
    }

    public function setGerants($gerants) {
        $this->gerants = $gerants;
    }

    public function getJoueurs() {
        return $this->joueurs;
    }

    public function setJoueurs($joueurs) {
        $this->joueurs = $joueurs;
    }

    // Méthodes de gestion des gérants et joueurs
    public function addGerant($gerant) {
        $this->gerants[] = $gerant;
    }

    public function removeGerant($gerant) {
        $key = array_search($gerant, $this->gerants);
        if ($key !== false) {
            unset($this->gerants[$key]);
        }
    }

    public function addJoueur($joueur) {
        $this->joueurs[] = $joueur;
    }

    public function removePlayer($joueur) {
        $key = array_search($joueur, $this->joueurs);
        if ($key !== false) {
            unset($this->joueurs[$key]);
        }
    }
}