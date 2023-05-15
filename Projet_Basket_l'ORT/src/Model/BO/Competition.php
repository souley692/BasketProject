<?php

namespace BO;

class Competition
{
  private ?int $idcomp;
  private ?String $dat_debComp;
  private ?String $dat_finComp;
  private? int $nb_match_maxComp;
    function getIdcomp():? int {
        return $this ->idcomp;
    }
    function getDat_debComp():String {
        return $this -> dat_debComp;
    }
    function getDat_finComp():String {
        return $this -> dat_finComp;
    }

    function getNb_match_maxComp():? int {
    return $this -> nb_match_maxComp;
    }

    function setIdcomp(int $idComp): void {
        $this->idcomp = $idComp;
    }
    function setDat_debComp(String $dat_debComp): void {
        $this->dat_debComp =$dat_debComp;
    }

    function setDat_finComp(String $dat_finComp): void {
        $this->dat_finComp = $dat_finComp;
    }
    function setNb_match_maxComp(int $nb_match_maxComp): void {
    $this->nb_match_maxComp = $nb_match_maxComp;}

    function __construct(?array $datas = null) {
        if(!is_null($datas)){
            (isset($datas['idComp'])) ? $this->setIdcomp($datas['idComp']) : $this->idcomp = null;
            (isset($datas['dat_debComp'])) ? $this->setDat_debComp($datas['dat_debComp']) : $this->dat_debComp=null;
            (isset($datas['dat_finComp'])) ? $this->setDat_finComp($datas['dat_finComp']) : $this->dat_finComp = null;
            (isset($datas['nb_match_maxComp'])) ? $this->setNb_match_maxComp($datas['nb_match_maxComp']) : $this->nb_match_maxComp = null;
        }

    }


}