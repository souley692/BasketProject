<?php

namespace src\Model\BO;

class Profil
{
    private ?int $id;

    private ?string $nom;
    private ?string $prenom;
    private ?int $telephone;
    private ?string $profil; // Recupération requête SQL

    public function __construct(?int $id, ?string $nom, ?string $prenom, ?int $telephone, ?string $profil)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->profil = $profil;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : void
    {
        $this->id = $id;
    }

    // --------------------------------------------- //
    public function getNom() : ?string
    {
        return $this->nom;
    }

    function setNom(?string $nom)
    {
        $this->nom = $nom;
    }

    // --------------------------------------------- //
    function getPrenom() : ?string
    {
        return $this->prenom;
    }

    function setPrenom(?string $prenom)
    {
        $this->prenom = $prenom;
    }

    // --------------------------------------------- //
    function getTelephone(): ?int
    {
        return $this->telephone;
    }

    function setTelephone(?int $telephone)
    {
        $this->telephone = $telephone;
    }

    // --------------------------------------------- //
    function getProfil() : ?string
    {
        return $this->profil;
    }

    function setProfil(?string $profil)
    {
        $this->profil = $profil;
    }
}