<?php

class Servicio
{
    private $idServicio;
    private $nombre;
    private $idTipoDeServicio;
    private $imagen;

    
    
    public function __construct($idServicio, $nombre, $idTipoDeServicio, $imagen){

        $this->idServicio = $idServicio;
        $this->nombre = $nombre;
		$this->idTipoDeServicio = $idTipoDeServicio;
        $this->imagen = $imagen;
        
    }
    
    public function getServicio(){
        return $this->idServicio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdTipoDeservicio()
    {
        return $this->idTipoDeServicio;
    }
    
     public function getImagen()
    {
        return $this->imagen;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setImagen($imagen){
        $this->imagen=$imagen;
    }
}