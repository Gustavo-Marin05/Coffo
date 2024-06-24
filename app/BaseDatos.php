<?php
class BaseDatos{

    private $conexion;

    public function __construct()
    {
        //iniciamos la conexion a la base de datos
        $this->conexion=new PDO("mysql:host=localhost;dbname=nuevoCoffe;","root","");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }

    //pasamos la consulta como sql y los parametros en un array para evitar inyeccion de datos
    public function consulta($sql,$params = []) {
        
        $query = $this ->conexion->prepare($sql);
        $query -> execute($params);
        return $query; 
       
    }

    public function consulta2($sql) {
        
        $query = $this ->conexion->prepare($sql);
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_ASSOC); 
       
    }

    //funcio para cerrar la secion
    public function cerrar() {
        $this->conexion=NULL;
        //$this->conexion->close();

        
    }
}


?>