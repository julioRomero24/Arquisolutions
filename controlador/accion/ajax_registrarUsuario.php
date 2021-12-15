<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = filter_input(INPUT_POST,'nombre');
        $correo = filter_input(INPUT_POST,'correo');
        $password = filter_input(INPUT_POST,'password');
        $telefono = filter_input(INPUT_POST,'telefono');
        $fechanac = filter_input(INPUT_POST,'fechanac');
        $sexo = filter_input(INPUT_POST,'sexo');
        $peso = filter_input(INPUT_POST,'pesokg');
        $administrador = filter_input(INPUT_POST,'administrador');
 
        
        $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, $administrador);
        $estado  = registrarUsuario($usuario);
        $msg="Se logró registrar el usuario";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    
    echo json_encode($resultado);
        
        

