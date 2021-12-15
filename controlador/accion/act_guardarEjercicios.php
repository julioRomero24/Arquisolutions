<?php
   
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbEjercicio.php');
    $arr = $_POST['arrayEjerciciosPorSeries'];
    $idTabata = $_POST['idTabata'];
    
    for($i=0; $i<sizeof($arr);$i++){
        guardarEjercicios($idTabata,$arr[$i]["idEjercicio"]);
    }
    
        //file_put_contents("prueba.txt", $arr[0]["nombreEjercicio"]);
        
        //$tabata = new Tabata(NULL, $nombre, $tPreparacion, $tActividad, $tDescanso, $numSeries, $numRondas, $_SESSION['ID_USUARIO']);

        //guardarTabata($tabata);
    
