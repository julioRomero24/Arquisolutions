<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $idUsuario = $_POST['idUsuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $fechanac = $_POST['fechanac'];
    $sexo = $_POST['sexo'];
    $peso = $_POST['peso'];
    $administrador = $_POST['administrador'];
    
    $usuario = new Usuario($idUsuario, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, $administrador);
    editarUsuario($usuario);

    header("Location: ../../vista/administradorUsuarios.php");
