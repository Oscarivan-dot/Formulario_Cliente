<?php
if(!isset($_GET['nombre'])){
    header('location: index.php?mensaje=error');
    exit(); 
}

include_once 'conexiones.php';
$nombre = $_GET['nombre'];
$conexion=new conectar();
$conexion->conexion();

$consulta = $conexion->GetConn()->prepare("SELECT empleado.nombre,email,sexo,areas.nombre as area,descripcion, roles.nombre as rol
                                        FROM empleado 
                                        INNER JOIN areas 
                                        ON empleado.area_id=areas.id
                                        inner join roles
                                        on empleado.id = roles.id
                                        where empleado.nombre = ?");

$consulta->execute([$nombre]);
$empleado = $consulta->fetch(PDO::FETCH_OBJ);
//print_r($empleado); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar</title>
</head>

<body>

<div class="container text-center">

<div class="row mb-3">
        <h1 class="col">Editar empleado</h1>
    </div>
    <form action="editarProceso.php" method="POST">

<div class="row justify-content-center">
    <div class="col-8">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-4 col-form-label">Nombre completo*</label>
            <div class="col-8">
            <input type="text" class="form-control" id="" name="txtNombre" require value=<?php echo $empleado->nombre;?>>
        </div>
        
 
    </div>
    
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-4 col-form-label">Correo Electronico*</label>
            <div class="col-8">
            <input type="text" class="form-control" id="" name="txtEmail" requiere value=<?php echo $empleado->email;?>>
        </div>
        
 
    </div>
    
</div>


<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row ">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label ">Sexo*</label>  
            </div>
            <div class="col d-flex">
            <input type="radio" class="" id="" name="radio1"  value="M"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Masculino</label>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="radio" class="" id=""name="radio1" value="F"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Femenino</label>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-4 col-form-label">Area*</label>
            <div class="col-8">
            <select class="form-select" aria-label="Default select example" name="area" require>
                <option selected>Selecciona una área</option>
                <option value="1">Administrativa y Financiera</option>
                <option value="2">Ingeniería</option>
                <option value="5">Desarrollo de Negocio</option>
                <option value="6">Proyectos</option>
                <option value="7">Servicios</option>
                <option value="8">Calidad</option>
            </select>
        </div>
        
 
    </div>

    
    
</div>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-4 col-form-label">Descripción*</label>
            <div class="col-8">
            <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="textArea"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        </div>
        
 
    </div>
</div>

    <div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row ">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label">Rol*</label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Desarrollador</label>
            </div>
            
        </div>
    </div>

<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Analista</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Tester</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Diseñador</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Profesinal PMO</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Profesional de Servicios</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1" > 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Auxiliar administrativo</label>
            </div>
        </div>
    </div>
</div>  
<div class="row justify-content-center">
    <div class="col-8 ">
        <div class="row mb-3">

            <div class="col-4">
            <label for="inputPassword" class="col-form-label"></label>  
            </div>
            <div class="col d-flex">
            <input type="checkbox" class="" id="" name="checkBox1"> 
            </div>
            <div class="col-7 d-flex align-items-center" >
                <label for="">Codirector</label>
            </div>
        </div>
    </div>
</div>  

<div class="row" style="">
    <div class="col-6">
        <button type="submit" class="btn btn-primary" value=<?php echo $empleado->nombre;?>> Actualizar</button>
    </div>
</div>
</div>
</form>
</body>
</html>



