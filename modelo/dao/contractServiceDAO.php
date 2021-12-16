<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidad/ContractService.php");

class ContractService{
    
    public function verServiciosContratados($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT (select nombre FROM servicio s where s.idservicio=ss.idservicio)as servicios from servicioscontratadosxusuario ss where idusuario=$idUsuario",NULL);

        $servicio=null;
        $servicios=array();

        foreach($data_table as $indice => $valor){
            $servicio = new ContractService(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"], 
                    $data_table[$indice]["idTipoEjercicio"],
                    $data_table[$indice]["imagen"],
                    $data_table[$indice]["video"]
                    );
            array_push($servicios,$servicio);
        }
        
    return $ejercicios;
    }

    public function verEjerciciosPorTipo(){
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT tipoejercicio.id AS idejercicio,tipoejercicio.nombre AS nombretipo, ejercicio.nombre AS nombreejercicio , ejercicio.idTipoEjercicio, ejercicio.imagen, ejercicio.video
        FROM ejercicio INNER JOIN tipoejercicio ON ejercicio.idTipoEjercicio = tipoejercicio.id",NULL);

        $ejercicio=null;
        $ejercicios=array();

        foreach($data_table as $indice => $valor){
            $ejercicio = new Ejercicio(
                    $data_table[$indice]["idejercicio"],
                    $data_table[$indice]["nombreejercicio"], 
                    $data_table[$indice]["nombretipo"],
                    $data_table[$indice]["imagen"],
                    $data_table[$indice]["video"]
                    );
            array_push($ejercicios,$ejercicio);
        }
        
    return $ejercicios;

    }
    
    public function addContratcService($costo, $idServicio, $fecha, $idUsuario){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO servicioscontratadosxusuario VALUES (:costo,:idservicio, :fecha, :idusuario)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':costo' => $costo,
            ':idservicio' => $idServicio,
            ':fecha' => $idTabata,
            ':idusuario' => $idUsuario
            )
        );
        
        return $resultado;
    }

    public function verEjerciciosGuardados($idTabata){
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT id, nombre, imagen, video
        FROM ejercicio 
        INNER JOIN ejercicioxtabata 
        ON ejercicioxtabata.idEjercicio = ejercicio.id 
        WHERE ejercicioxtabata.idTabata = :idTabata", array(':idTabata'=>$idTabata));

        $ejercicio=null;
        $ejercicios=array();

        foreach($data_table as $indice => $valor){
            $ejercicio = new Ejercicio(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"], 
                    0,
                    $data_table[$indice]["imagen"],
                    $data_table[$indice]["video"]
                    );
            array_push($ejercicios,$ejercicio);
        }
        
    return $ejercicios;
    }

}
