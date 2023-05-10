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
            (isset($datas['idComp'])) ? $this->setIdcomp($datas['idComp']) : $this->idcomp = null;
            (isset($datas['dat_debComp'])) ? $this->setDat_debComp($datas['dat_debComp']) : $this->dat_debComp= '';
            (isset($datas['dat_finComp'])) ? $this->setDat_finComp($datas['dat_finComp']) : $this->dat_finComp = '';
            (isset($datas['nb_match_maxComp'])) ? $this->setNb_match_maxComp($datas['nb_match_maxComp']) : $this->nb_match_maxComp = '';
        }

    }


}