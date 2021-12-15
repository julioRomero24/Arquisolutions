<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbEjercicio.php');
    
    $ejerciciosPorTipo = verEjerciciosPorTipo();
   
    echo json_encode($ejerciciosPorTipo);  



