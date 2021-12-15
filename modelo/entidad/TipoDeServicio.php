<?php

class Tabata
{
   private $idTipoDeServicio;
   private $nombre
    
    public function __construct($idTipoDeServicio, $nombre){

        $this->idTipoDeServicio = $idTipoDeServicio;
        $this->nombre = $nombre;
		
    }
    
    public function getIdTipoDeServicio(){
        return $this->getIdTipoDeServicio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    
    
}