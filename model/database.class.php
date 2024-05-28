<?php
    class DataBase {
    private $conexion=null;
    private $nombre="db_school";
    private $servidor="localhost";
    private $usuario="root";
    private $clave="#Promo2024";
    
        //Conectar la base de datos
    public function __construct(){
        $this->conexion= new mysqli($this->servidor ,$this->usuario, $this->clave, $this->name);
        if ($this->conexion->connect_error){
            print "fallo la conexion".$this->conexion->connect_error;
        }
    }
    //Ejecuta la consulta a la base de datos
    //por ejemplo: INSERT INTO, SELECT, DELETE, UPDATE..
    public function query ($sql) {
        $this->conexion->query($sql);
        return $this->conexion->query($sql);

    }
    //Cierra la conexion de la base de datos.
    public function closeDB (){
        $mysqli->close();
        closeDB($mysqli);
    }


 }
?>