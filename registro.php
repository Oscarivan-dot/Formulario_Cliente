<?php

//validacion por parte del servidor.

if(empty($_POST["txtNombre"]) || empty($_POST["txtEmail"]) || empty($_POST["radio1"]) || empty($_POST["area"]) || empty($_POST["textArea"]) || empty($_POST["checkBox1"])){
 header('location:index.php?echo"faltan datos"');
}
include_once "conexiones.php";
$conexion=new conectar();
$conexion->conexion();

$nombre = $_POST["txtNombre"];
$email = $_POST["txtEmail"];
$sexo = $_POST["radio1"];
$area = $_POST["area"];
$descripcion = $_POST["textArea"];
$rol = $_POST["checkBox1"];

$sentencia = $conexion->GetConn()->prepare("INSERT INTO empleado(nombre,email,sexo,area_id,descripcion) VALUES(?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre,$email,$sexo,$area,$descripcion]);

if ($resultado === TRUE){
    header('location:index.php?mensaje=agregado');
}else{
    header('location:index.php?mensaje=error');
}

?>