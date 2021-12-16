<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();
    require_once (__DIR__."/../mdb/mdbConstractService.php");
    
    // echo 'Hola: '. $_SESSION['NOMBRE_USUARIO']. ' '. $_SESSION['ID_USUARIO'];
  
    $res = addContractService('1000', '1', '2021-12-15', '7')
    if($res != null){
        echo '{"succes": true, "error": false}';
    }
    else{
        echo '{"succes":false, "error":true}';
    }



