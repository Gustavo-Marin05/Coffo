<?php
include("../../app/BaseDatos.php");
//include_once("enviar.php");

include("../../app/config.php");
$bd=new BaseDatos();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //se hace de esta manera para evitar inyecciones de codigo ,hay otra maner mas

   

    $sql="DELETE FROM menu WHERE id= :id_produc ";
    $params=[':id_produc'=>$id];

    $row=$bd->consulta($sql,$params);

    if($row){
        header("location: ../products.php");
    }

    
    
}  exit();



?>