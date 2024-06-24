<?php
include("../../app/BaseDatos.php");
include("../../app/config.php"); 

$bd = new BaseDatos();
$descripcion = $_POST['descripcion'];

// Verificar si la categoría ya existe
$sql = "SELECT * FROM categoria WHERE descripcion = :descripcion";
$params = [':descripcion' => $descripcion];
$query = $bd->consulta($sql, $params);


    if ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "ya existe";
    } else {
        // Insertar la nueva categoría
        $sql = "INSERT INTO categoria (descripcion) VALUES (:descripcion)";
        $params = [':descripcion' => $descripcion];
        $insertQuery = $bd->consulta($sql, $params);
        
        if ($insertQuery) {
            header("location: ../products.php");
        } else {
            echo "Error al agregar la categoría";
        }
    }

