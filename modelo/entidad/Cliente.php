<?php

class Cliente
{
    private $idCliente;
    
    public function __construct($idCliente){

        $this->idCliente = $idCliente;
        
    }
    
    public function getIdCliente(){
        return $this->getIdCliente;
    }

    public function SetIdCliente($idCliente){
        return $this->idCliente=$idCliente;
    }


   
}