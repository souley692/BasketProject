<?php

namespace src\Model\BO;

class Profil
{
    private $nom;
    private $prenom;
    private $telephone;
    private $profil; // Recupération requête SQL

    public function __construct($nom, $prenom, $telephone, $profil)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->profil = $profil;
    }

    // --------------------------------------------- //
    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    // --------------------------------------------- //
    function getPrenom()
    {
        return $this->prenom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    // --------------------------------------------- //
    function getTelephone()
    {
        return $this->telephone;
    }

    function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    // --------------------------------------------- //
    function getProfil()
    {
        return $this->profil;
    }

    function setProfil($profil)
    {
        $this->profil = $profil;
    }
}