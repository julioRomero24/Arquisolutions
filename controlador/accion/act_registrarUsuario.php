<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        $rol =  $_POST['rol'];


        $usuario = new Usuario(NULL, $nombre, $apellido,$telefono, $correo, $password, $rol);

        // echo $usuario->getNombre() . ' '. $usuario->getApellido() . ' - '.$usuario->getCorreo() . ' - '.  $usuario->getTelefono() . ' - ' .$usuario->getContraseña() . ' - ' .$usuario->getRol();;
  

        $registro = registrarUsuario($usuario);



        if($registro){
            header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");   
        }
        else{
            //header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
            echo 'Error al registrar usuario';
        }

        
 
        // if(isset($_POST['administrador'])) {
        //     $usuario = new Usuario(NULL, $nombre, $apellido, $correo, $password, $telefono, $fechanac, $sexo, $peso, $administrador);
        //     registrarUsuario($usuario);
        //     header("Location: ../../vista/administradorUsuarios.php");
        // }else{
        //     $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, 0);
        //     $registro = registrarUsuario($usuario);
        //     if($registro)
        //         header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");
        //     else
        //         header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
        // }

        
        

