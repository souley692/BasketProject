<?php

namespace src\Model\BO;

class

Club {
    private ?int  $idClub;
    private ?string $nomClub;
    private ?string $locClub;
    private ?array $gerantsClub = array();
    private ?array $joueursClub = array();

    public function __construct($idClub, $nomClub, $locClub) {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->locClub = $locClub;
    }

    // Accesseurs/Mutateurs
    public function getIdClub():?int {
        return $this->idClub;
    }

    public function getNomClub():?string {
        return $this->nomClub;
    }

    public function setNomClub(string $nomClub):self {
        $this->nomClub = $nomClub;
        return $this;
    }

    public function getLocation():?string {
        return $this->locClub;
    }

    public function setLocClub(string $locClub):self {
        $this->locClub = $locClub;
        return $this;
    }

    public function getGerantsClub():?array {
        return $this->gerantsClub;
    }

    public function setGerantsClub(array $gerantsClub):self {
        $this->gerantsClub = $gerantsClub;
        return $this;
    }

    public function getJoueursClub():?array {
        return $this->joueursClub;
    }

    public function setJoueursClub(array $joueursClub): self {
        $this->joueursClub = $joueursClub;
        return $this;
    }

    // Méthodes de gestion des gérants et joueurs
    public function addGerant(GerantClub $gerantClub): self{
        $this->gerantsClub[] = $gerantClub;
        return $this;
    }

    public function removeGerantClub(GerantClub $gerantClub): self{
        $key = array_search($gerantClub, $this->gerantsClub);
        if ($key !== false) {
            unset($this->gerantsClub[$key]);
        }
        return $this;
    }

    public function addJoueurClub(JoueurClub $joueurClub): self {
        $this->joueursClub[] = $joueurClub;
        return $this;
    }

    public function removeJoueurClub(JoueurClub $joueurClub): self {
        $key = array_search($joueurClub, $this->joueursClub);
        if ($key !== false) {
            unset($this->joueursClub[$key]);
        }
        return $this;
    }
}