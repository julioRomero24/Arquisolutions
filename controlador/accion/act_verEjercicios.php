<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbEjercicio.php');
    
    $ejercicios = verEjercicios();
   
    echo json_encode($ejercicios);  

