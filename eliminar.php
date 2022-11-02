<?php
if(!isset($_GET['nombre'])){
    header('location: index.php?mensaje=error');
    exit();
}

include_once 'conexiones.php';
$codigo =$_GET['nombre'];
$conexion=new conectar();
$conexion->conexion();


$consulta = $conexion->GetConn()->prepare("DELETE FROM empleado WHERE nombre=?;");
$resultado = $consulta->execute([$nombre]);

if($resultado === TRUE){
    header('location: index.php?mensaje=eliminado');
}else{
    header('location: index.php?mensaje=error');
}

?>