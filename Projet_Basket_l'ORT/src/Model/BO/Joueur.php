<?php
namespace  src\Model\BO;
class Joueur
{
private ?int $numJoueur = null;
private ?string $nomJoueur;

private ?string $preJoueur;

public function getNumJoueur(): ?int {
    return $this->numJoueur;
}

public function setNumJoueur(int $num): self{
    if($this->numJoueur === null){
        $this->numJoueur = $num;
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
        if(isset($data['numJoueur'])) {
            $this->setNumJoueur($data['numJoueur']);
        }
        if(isset($data['nomJoueur'])) {
            $this->setNomJoueur($data['nomJoueur']);
        }
        if(isset($data['preJoueur'])) {
            $this->setPreJoueur($data['preJoueur']);
        }
    }
}

}