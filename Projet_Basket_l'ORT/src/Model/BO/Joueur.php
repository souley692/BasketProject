<?php
namespace  src\Model\BO;
use Cassandra\Date;

class Joueur {
    private ?int $idJoueur = null;
    private ?string $preJoueur;
    private ?string $nomJoueur;
    private \DateTime $dateJoueur;
    private Club $clubJoueur;

    public function __construct(?array $datas = null)
    {
        // Si le paramètre est différent de false
        if(!is_null($datas)){
            // Si tel élément existe alors on lui attribut la valeur, sinon il est null
            (isset($datas['idJoueur']))?$this-> setIdJoueur($datas['idJoueur']):$this->numAct = null;
            (isset($datas['nomJoueur']))?$this-> setNomJoueur($datas['nomJoueur']):$this->nomAct ="";
            (isset($datas['preJoueur']))?$this-> setPreJoueur($datas['preJoueur']):$this->preAct ="";
            (isset($datas['dateJoueur']))?$this-> setDateJoueur($datas['dateJoueur']):$this->dateJoueur=date_date_set();
            (isset($datas['clubJoueur']))?$this-> setClubJoueur(($datas['clubJoueur'])):$this->clubJoueur;
        }
    }

    // Accesseurs/Mutateurs
    public function getIdJoueur():?int{
        return $this->idJoueur;
    }

    function setIdJoueur(int $idJoueur):self{
        if($this->idJoueur == null) {
            $tmp = filter_var($idJoueur, FILTER_VALIDATE_INT);
            if (!is_null($tmp)) {
                $this->idJoueur = $tmp;
            }
            else {
                $this->idJoueur = null;
            }
        }

        return $this;
    }
    public function getPreJoueur():?string {
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

    public function getDateJoueur():?\DateTime {
        return $this->dateJoueur;
    }

    public function setDateJoueur(\DateTime $dateJoueur):self {
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
