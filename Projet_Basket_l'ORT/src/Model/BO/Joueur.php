<?php
namespace  src\Model\BO;
use Cassandra\Date;

class Joueur {
    private ?int $idJoueur = null;
    private ?string $preJoueur;
    private ?string $nomJoueur;
    private ?string $dateJoueur;
    private Club $clubJoueur;

    public function __construct(?int $idJoueur, ?string $preJoueur, ?string $nomJoueur, ?string $dateJoueur, Club $clubJoueur){
        $this->idJoueur = $idJoueur;
        $this->preJoueur = $preJoueur;
        $this->nomJoueur = $nomJoueur;
        $this->dateJoueur = $dateJoueur;
        $this->clubJoueur = $clubJoueur;
    }

    // Accesseurs/Mutateurs
    public function getIdJoueur(): ?int{
        return $this->idJoueur;
    }

    function setIdJoueur(int $idJoueur):self{
        $this->idJoueur = $idJoueur;
        return $this;
    }
    public function getPreJoueur(): ?string {
        return $this->preJoueur;
    }

    public function setPreJoueur(string $preJoueur):self {
        $this->preJoueur = $preJoueur;
        return $this;
    }

    public function getNomJoueur():?string {
        return $this->nomJoueur;
    }

    public function setNomJoueur(string $nomJoueur):self {
        $this->nomJoueur = $nomJoueur;
        return $this;
    }

    public function getDateJoueur():?string {
        return $this->dateJoueur;
    }

    public function setDateJoueur(?string $dateJoueur):self {
        $this->dateJoueur = $dateJoueur;
        return $this;
    }

    public function getClubJoueur(): Club {
        return $this->clubJoueur;
    }

    public function setClubJoueur(Club $clubJoueur):self {
        $this->clubJoueur = $clubJoueur;
        return $this;
    }
}

/*if(!is_null($datas)){
    // Si tel élément existe alors on lui attribut la valeur, sinon il est null
    (isset($datas['idJoueur']))?$this-> setIdJoueur($datas['idJoueur']):$this->numAct = null;
    (isset($datas['nomJoueur']))?$this-> setNomJoueur($datas['nomJoueur']):$this->nomAct ="";
    (isset($datas['preJoueur']))?$this-> setPreJoueur($datas['preJoueur']):$this->preAct ="";
    (isset($datas['dateJoueur']))?$this-> setDateJoueur($datas['dateJoueur']):$this->dateJoueur=date_date_set();
    (isset($datas['clubJoueur']))?$this-> setClubJoueur(($datas['clubJoueur'])):$this->clubJoueur;
}*/