<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        $fechanac = $_POST['fechanac'];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $administrador = $_POST['administrador'];
 
        if(isset($_POST['administrador'])) {
            $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, $administrador);
            registrarUsuario($usuario);
            header("Location: ../../vista/administradorUsuarios.php");
        }else{
            $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, 0);
            $registro = registrarUsuario($usuario);
            if($registro)
                header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
        }

        
        

