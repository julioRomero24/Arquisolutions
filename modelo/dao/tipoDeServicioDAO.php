<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidad/TipoDeServicio.php");

class TipoDeServicioDAO {
    
    public function verTipoDeServicios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * from tipodeservicio",NULL);

        $tipoServicios=null;
        $tipoServicios=array();

        foreach($data_table as $indice => $valor){
            $servicio = new TipoDeServicio(
                    $data_table[$indice]["idTipoDeServicio"],
                    $data_table[$indice]["nombre"]
                    );
            array_push($tipoServicios,$servicio);
        }
        
    return $servicio;
    }

    
    public function guardarTipoDeServicio($idTipoDeSer,$nombre){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO tipodeservicio VALUES (:idTipoDeSer,:nombre)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idTipoEjercicio' => $idTipoDeSer,
            ':nombre' => $nombre
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
