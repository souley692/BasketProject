<?php

namespace src\Model\BO;

class Competition
{
  private ?int $idcomp;
  private ?\DateTime $dat_debComp;
  private ?\DateTime $dat_finComp;
  private? int $nb_match_maxComp;
    function getIdcomp():? int {
        return $this ->idcomp;
    }
    function getDat_debComp():?\DateTime {
        return $this -> dat_debComp;
    }
    function getDat_finComp():? \DateTime{
        return $this -> dat_finComp;
    }

    function getNb_match_maxComp():? int {
    return $this -> nb_match_maxComp;
    }

    function setIdcomp(int $idComp): void {
        $this->idcomp = $idComp;
    }
    function setDat_debComp(\DateTime $dat_debComp): void {
        $this->dat_debComp =$dat_debComp;
    }

    function setDat_finComp(\DateTime $dat_finComp): void {
        $this->dat_finComp = $dat_finComp;
    }
    function setNb_match_maxComp(int $nb_match_maxComp): void {
    $this->nb_match_maxComp = $nb_match_maxComp;}

    function __construct(?array $datas = null) {
        if(!is_null($datas)){
            (isset($datas['numAct'])) ? $this->setNumAct($datas['numAct']) : $this->numAct = null;
            (isset($datas['nomAct'])) ? $this->setNomAct($datas['nomAct']) : $this->nomAct = '';
            (isset($datas['preAct'])) ? $this->setPreAct($datas['preAct']) : $this->preAct = '';
        }

    }


}