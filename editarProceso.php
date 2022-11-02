<?php
//print_r($_POST);
if(!isset($_POST['nombre'])){
 header('location: index.php?mensaje=error');
}

include_once 'conexiones.php';
$nombre = $_GET['nombre'];
$conexion=new conectar();
$conexion->conexion();

$nombre = $_POST['txtNombre'];
$email = $_POST['txtEmail'];
$sexo = $_POST['radio1'];
$area = $_POST['area'];
$descripcion = $_POST['textArea'];
//$rol = $_POST['checkBox1'];

$consulta = $conexion->GetConn()->prepare("UPDATE empleado SET email=?, sexo=?, area_id=?, descripcion=? WHERE nombre=?;");
$resultado= $consulta->execute([$nombre,$email,$sexo,$area,$descripcion]);

if ($resultado === TRUE) {
    header('location: index.php?mensaje=editado');
} else {
    header('location: index.php?mensaje= error');
    exit();
}





?>