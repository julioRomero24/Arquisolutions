<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbTabata.php");
    require_once (__DIR__."/../../modelo/entidad/Tabata.php");

       
        $nombre = $_POST['nombre'];
        $tPreparacion = $_POST['tPreparacion'];
        $tActividad = $_POST['tActividad'];
        $tDescanso = $_POST['tDescanso'];
        $numSeries = $_POST['numSeries'];
        $numRondas = $_POST['numRondas'];
        
        $tabata = new Tabata(NULL, $nombre, $tPreparacion, $tActividad, $tDescanso, $numSeries, $numRondas, $_SESSION['ID_USUARIO']);

        $id = guardarTabata($tabata);
    
        echo json_encode($id );  
    