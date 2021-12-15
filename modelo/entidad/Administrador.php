<?php

class Administrador
{
  
    private $idAdministrador;
    
    public function __construct($idAdministrador){

        $this->idAdministrador = $idAdministrador;
        
    }
    
    public function getIdAdministrador(){
        return $this->idAdministrador;
    }

    public function setAdministrador($idAdministrador)
    {
        $this->idAdministrador = $idAdministrador;

        return $this;
    }

}