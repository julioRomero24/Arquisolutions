<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correoElectronico;
    private $contraseña;
    private $rol;

    
    public function __construct($idUsuario, $nombre,$apellido,$telefono, $correoElectronico, $contraseña,$rol){

        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
		$this->correoElectronico = $correo;
		$this->contraseña = $contraseña;
        $this->rol = $rol;
    }
    
   // Métodos GET
    public function getId(){
        return $this->idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre.' '.$this->apellido;
    }

    

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCorreo()
    {
        return $this->correoElectronico;
    }
    
     public function getContraseña()
    {
        return $this->contraseña;
    }

    public function getRol()
    {
        return $this->rol;
    }


    public function setId($id)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    //Métodos SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

   

}