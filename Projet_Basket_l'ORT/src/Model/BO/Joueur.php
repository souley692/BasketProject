<?php
namespace  src\Model\BO;
class Joueur
{
    private ?string $nomJoueur;
    private ?string $preJoueur;
    private ?string $sexeJoueur;
    private ?\DateTime $dateNaissance;


    public function getNomJoueur(): ?string{
        return $this->nomJoueur;
    }
    public function setNomJoueur(?string $nom): self {
        $this->nomJoueur = $nom;
        return $this;
    }

    public function getPreJoueur(): ?string{
        return $this->preJoueur;
    }

    public function setPreJoueur(?string $prenom): self{
        $this->preJoueur = $prenom;
        return $this;
    }

    public function getSexeJoueur(): ?string{
        return $this->sexeJoueur;
    }

    public function setSexeJoueur(?string $sexe): self{
        $this->sexeJoueur = $sexe;
        return $this;
    }



    public function __construct(?array $data = null){
        if($data !== null) {
            if(isset($data['nomJoueur'])) {
                $this->setNomJoueur($data['nomJoueur']);
            }
            if(isset($data['preJoueur'])) {
                $this->setPreJoueur($data['preJoueur']);
            }
            if(isset($data['sexeJoueur'])){
                $this->setSexeJoueur($data['sexeJoueur']);
            }
        }
    }

}