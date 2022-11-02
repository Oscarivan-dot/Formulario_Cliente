<?php
include_once "conexiones.php";
include_once "consultas.php";

//instancia la clase
$conexion = new conectar();
//llama el metodo
$conexion->conexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">

    <div class="row mb-3">
        <h1 class="col">Formulario empleados</h1>
    </div>

    <!--alertas-->

    <?php
     if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
    ?>
    <div class="row justify-content-center">
    <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
        <strong>Exito</strong> Actualización realizada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>  
     </div>  
    <?php
     }
    ?>

<?php
     if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
    ?>
    <div class="row justify-content-center">
    <div class="alert alert-warning alert-dismissible fade show col-8" role="alert">
        <strong>Eliminado</strong> Datos eliiminados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>    
    </div>
    <?php
     }
    ?>

    <!--fin de alertas-->
    
    <form action="registro.php" method="post">

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-4 col-form-label">Nombre completo*</label>
                <div class="col-8">
                <input type="text" class="form-control" id="" name="txtNombre" require>
            </div>
            
     
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-4 col-form-label">Correo Electronico*</label>
                <div class="col-8">
                <input type="text" class="form-control" id="" name="txtEmail" requiere>
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
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

    </form>

    <div class="row mb-3 mt-3">
        <h2 class="col">Lista de empleados</h2>
    </div>
    
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col"><i class="bi bi-person"></i> Nombre</th>
      <th scope="col"><i class="bi bi-envelope"></i> Email</th>
      <th scope="col"><i class="bi bi-gender-ambiguous"></i> Sexo</th>
      <th scope="col"><i class="bi bi-gear"></i> Area</th>
      <th scope="col"><i class="bi bi-file-text"></i> Boletín</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  <?php
    foreach($empleado as $personal){
  ?>
        <tr>
        <td><?php echo $personal->nombre;?></td>
        <td><?php echo $personal->email;?></td>
        <td><?php echo $personal->sexo;?></td>
        <td><?php echo $personal->area;?></td>
        <td><?php echo $personal->boletin;?></td>
        <td ><a class="text-success" href="editar.php?nombre=<?php echo $personal->nombre;?>"><i class="bi bi-file-diff"></i></a></td>
        <td ><a class="text-danger" href="eliminar.php?nombre=<?php echo $personal->nombre;?>"><i class="bi bi-trash"></i></a></td>
        
        </tr>

    <?php
    }
    ?>

  </tbody>
</table>
    </div>













</div>

    
</body>
</html>