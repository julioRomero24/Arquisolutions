<?php

require_once(__DIR__."/../../modelo/dao/ServiciosContratadosXusuarioDao.php");

function verEjercicios(){
    $dao = new EjercicioDAO();
    
    $ejercicios = $dao->verEjercicios();

    return $ejercicios;
}

function verEjerciciosPorTipo(){
    $dao = new EjercicioDAO();
    
    $ejercicios = $dao->verEjerciciosPorTipo();

    return $ejercicios;
}

function guardarEjercicios($idTabata,$idEjercicio){
    $dao = new EjercicioDAO();
    
    $dao->guardarEjercicios($idTabata,$idEjercicio);
}

function verEjerciciosGuardados($idTabata){
    $dao = new EjercicioDAO();
    
    $ejercicios = $dao->verEjerciciosGuardados($idTabata);

    return $ejercicios;
}