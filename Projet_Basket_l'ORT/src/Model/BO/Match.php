<?php

namespace src\Model\BO;

class Match
{  private ?int $idMatch;
    private ?string $scoreMatch;
    private ?\DateTime $jourMatch;
    private ?string $vainMatch;

    function getIdMatch():? int {
        return $this ->idMatch;
    }
    function getScoreMatch():? string {
        return $this -> scoreMatch;
    }
    function getJourMatch():? \DateTime
    {
        return $this ->jourMatch;
    }
    function getVainMatch():? string
    {
        return $this ->vainMatch;
    }
    function setIdMatch(int $idMatch): void {
        $this->idMatch = $idMatch;
    }
    function setScoreMatch(string $scoreMatch): void {
        $this->scoreMatch =$scoreMatch;
    }

    function setJourMatch(\DateTime $jourMatch): void {
        $this->jourMatch = $jourMatch;
    }
    function setVainMatch(string $vainMatch): void {
        $this->vainMatch =$vainMatch;
    }

    function __construct(?array $datas = null) {
        if(!is_null($datas)){
            (isset($datas['numAct'])) ? $this->setNumAct($datas['numAct']) : $this->numAct = null;
            (isset($datas['nomAct'])) ? $this->setNomAct($datas['nomAct']) : $this->nomAct = '';
            (isset($datas['preAct'])) ? $this->setPreAct($datas['preAct']) : $this->preAct = '';
        }

    }

}