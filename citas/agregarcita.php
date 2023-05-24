<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
	include '../database/conexion.php';

    //definir las variables

    $corte_pelo = $_POST["corte"];
    $fecha = $_POST["fecha"];
    $opcion = $_POST["opcion"];
    $descripcion = $_POST["descripcion"];
    
    //consultamos la insercion

    $consulta = $DB_con->prepare("INSERT INTO citas (corte,fecha,opcion,descripcion) VALUES (:corte, :fecha, :opcion, :descripcion)");

    //creamos el bindParam

    $consulta->bindParam(':corte',$corte_pelo);
    $consulta->bindParam(':fecha',$fecha);
    $consulta->bindParam(':opcion',$opcion);
    $consulta->bindParam(':descripcion',$descripcion);
    $ver = $consulta->execute(); 

    if($ver){
        session_start();
        $_SESSION["agenda"]="Registro correcto";
        header("location: ../agendar.php");
    }else{
        echo " No se pudo guardar los datos";
    }


// try{
//     $agregar = $DB_con->prepare("INSER INTO citas (corte,fecha,opcion,descripcion) VALUES (:corte,:fecha,:opcion,:descripcion)");
//     $agregar->bindParam(':corte',$corte_pelo);
//     $agregar->bindParam(':fecha',$fecha);
//     $agregar->bindParam(':opcion',$opcion);
//     $agregar->bindParam(':descripcion',$descripcion);
//     $agregar->execute();
// }catch(\Throwable){

// }
    