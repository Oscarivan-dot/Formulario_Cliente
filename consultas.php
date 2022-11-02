<?php
include_once "conexiones.php";
$conexion=new conectar();
$conexion->conexion();

echo is_null($conexion->conn);
    $resulConsul=$conexion->GetConn()->query("SELECT empleado.nombre,email,sexo,areas.nombre as area,boletin 
                                    FROM empleado 
                                    INNER JOIN areas 
                                    ON empleado.area_id=areas.id");
    
    $empleado = $resulConsul->fetchAll(PDO::FETCH_OBJ);
    // print_r($empleado);



    
?>