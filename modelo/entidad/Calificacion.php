<?php
//no tiene los set, por lo que solo se pueden declarar las variables cuando se instancie
class Ejercicio
{
    private $idCalificacion;
    private $idCliente;
    private $idServicio;
    private $numeroDeCalificacion;
    private $comentario;

    
    public function __construct($idCalificacion, $idCliente, $idServicio, $numeroDeCalificacion, $comentario){

        $this->idCalificacion = $idCalificacion;
        $this->idCliente = $idCliente;
		$this->idServicio = $idServicio;
        $this->numeroDeCalificacion =  $numeroDeCalificacion;
        $this->comentario = $comentario;
    }
    
    public function getIdCalificacion(){
        return $this->getIdCalificacion;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getIdServicio()
    {
        return $this->idServicio;
    }
    
     public function getNumeroDeCalificacion()
    {
        return $this->numeroDeCalificacion;
    }

    public function getComentario()
    {
        return $this->comentario;
    }


   
}
