<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbEjercicio.php');
    
    $idTabata = $_GET['idTabata'];

    $ejercicios = verEjerciciosGuardados($idTabata);
    
    echo json_encode($ejercicios);  

