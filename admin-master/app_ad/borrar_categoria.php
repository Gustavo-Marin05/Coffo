<?php
include("../../app/BaseDatos.php");
include("../../app/config.php");
//include ("eliminar_producto.php");
$bd = new BaseDatos();

if (isset($_GET['id'])) {



    



    $id = $_GET['id'];
    //se hace de esta manera para evitar inyecciones de codigo ,hay otra maner mas

    $sql = "DELETE FROM categoria WHERE id= :id_cat";
    $params = [':id_cat' => $id];

    $row = $bd->consulta($sql, $params);

    if ($row) {
        header("location: ../products.php");
    }
}
exit();
