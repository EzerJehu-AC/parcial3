<?php

/**
  *Esta clase permite conectar a la base de datos
  * @autor: Ing Alvarado Camarillo
  */
 class Connection{
 
  public $drive;
  public $host;
  public $user;
  public $password;
  public $database;
  public $conn;

  function __construct(){

    $this->drive    = "mysql";
    $this->host     = "localhost";
    $this->user     = "root";
    $this->password   = "root";
    $this->database   = "integradora";

    $this->getConnection();
  }

  public function getConnection(){
    try {
        $this->conn = new PDO($this->drive. ":host=". $this->host. ";dbname=". $this->database,$this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        if($this->conn){
        
        
        }
        else{
          echo "connetion fail";
        }
      }catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
      }
  }
 
  public function crear_citas($correo,$contraseña,$nombre){
    $sql = "CALL crear_citas(?,?,?)";
    $statement = $this->conn->prepare($sql);
    $statement->bindParam(1,$correo);
    $statement->bindParam(2,$contraseña);
    $statement->bindParam(3,$nombre);

    if($statement->execute()){
      return "cliente Registred";
    }
    else{
      return "cliente not Registred";
    }
  }
  function login($correo,$contraseña){

    $sql = "CALL login(?,?)";
    $statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$correo);
    $statement->bindParam(2,$contraseña);

    if($statement->execute()){

      $count=$statement->rowCount();

      if($count){
        $cookie_name = "sesion";
        $cookie_value = "token";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        return true;
      }
      else{
        return false;
      }
    }
  }
}

?>