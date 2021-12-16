<?php

require_once(__DIR__."/../../modelo/dao/contractServiceDAO.php");

function addContractService($costo, $idServicio, $fecha, $idUsuario){
   $dao =  new ContractService();
   $contractService = $dao->addContratcService($costo, $idServicio, $fecha, $idUsuario) ;
   
   return $contractService;
}