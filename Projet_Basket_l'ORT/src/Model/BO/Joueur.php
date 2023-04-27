<?php
namespace  src\Model\BO;
class Joueur
{
    private ?int $idJoueur;
    private ?string $nomJoueur;
    private ?string $preJoueur;
    private ?\DateTime $dateNaissance;

    public function getIdJoueur(): ?int {
        return $this->idJoueur;
    }

    public function setIdJoueur(int $id): self {

        if ($this->idJoueur === null) {
            $this->idJoueur = $id;
        }
        return $this;
    }


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




    public function __construct(?array $data = null){
        if($data !== null) {
            if(isset($data['nomJoueur'])) {
                $this->setNomJoueur($data['nomJoueur']);
            }
            if(isset($data['preJoueur'])) {
                $this->setPreJoueur($data['preJoueur']);
            }
        }
    }

}