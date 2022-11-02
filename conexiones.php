<?php
 class conectar{
 
  //Propiedas

  public $usr = "root";
  public $servidor = "127.0.0.1:3306";
  public $passw="123456789";
  public $conn;

  //Metodo

function conexion(){
      try{
          //se tiene que referenciar de donde vienen las variables con $this
          $this->conn = new PDO("mysql:host=$this->servidor;dbname=prueba_tecnica_dev",$this->usr,$this->passw);

          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Conexion satisfactoria";
      }catch(PDOExeption $e){
        
          echo "fallo en la conexion " .$e->getMessage();
      }
  }

function GetConn(){
    return $this->conn;
}

  }

  //$newConn = new conectar();
//$newConn->conexion();

    


?>