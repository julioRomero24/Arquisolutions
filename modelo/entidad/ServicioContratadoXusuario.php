<?php

class ServicioContratadoXusuario
{
    private $idServicioContratado;
    private $costo;
    private $idServicio;
    private $fecha;
    private $idUsuario;
    
    public function __construct($idServicioContratado, $costo, $idServicio, $fecha,$idUsuario){

        $this->idServicioContratado = $idServicioContratado;
        $this->costo = $costo;
		$this->idServicio = $idServicio;
		$this->fecha = $fecha;
        $this->idUsuario = $idUsuario;
    }
    
    public function getIdServicioContratado(){
        return $this->idServicioContratado;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function getIdServicio()
    {
        return $this->idServicio;
    }
    
     public function getFecha()
    {
        return $this->fecha;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

}