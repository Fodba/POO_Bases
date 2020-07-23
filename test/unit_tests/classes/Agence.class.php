<?php

class Agence
{
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;

    
    public function getNom() {return $this->_nom; }
    public function setNom($sNom){$this->_nom = $sNom;}

    public function getAdresse(){return $this->_adresse;}
    public function setAdresse($sAdresse){ $this->_adresse = $sAdresse;}

    public function getCodePostal(){return $this->_codePostal;}
    public function setCodePostal($sCodePostal){$this->_codePostal = $sCodePostal;}

    public function getVille(){return $this->_ville; }
    public function setVille($sVille){$this->_ville = $sVille;}

    public function getModeRestauration(){return $this->_modeRestauration; }
    public function setModeRestauration($bModeRestauration){$this->_modeRestauration = $bModeRestauration;}
}
?>