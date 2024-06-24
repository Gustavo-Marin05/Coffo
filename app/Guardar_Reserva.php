<?php
include("BaseDatos.php");
session_start();

$bd = new BaseDatos();

if (!isset($_SESSION['usuario'])) {
    header("location:../registro_usuario.php");
    exit;
}

$id_usuario = $_SESSION['id'];
$sql = "SELECT *FROM usuarios WHERE id = :id_usuario";
$params = [':id_usuario' => $id_usuario];
$query = $bd->consulta($sql, $params);


//en este if se podria colocar rowCol o como se muestra el fechtAll , eso tendria que investigar cual seria el mejor en estos casos
if ($query->fetchAll() == $id_usuario) {
    echo "El usuario no existe.";
    exit;
}


if (empty($_POST["Anombre"]) || empty($_POST["registro"])) {
    echo '<div class="alert alert-danger">Los campos están vacíos</div>';
} else {
    $Anombre = $_POST["Anombre"];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];



    $sql = "INSERT INTO reservas (Anombre,id_usuario,hora,fecha,cantidad) VALUES (:Anombre,:id_usuario,:hora,:fecha,:cantidad)";
    $params = [':Anombre' => $Anombre, ':id_usuario' => $id_usuario, ':hora' => $hora, ':fecha' => $fecha, ':cantidad' => $cantidad];
    if ($bd->consulta($sql, $params)) {
        header("Location: ../reservas.php");
        exit();
    }
}
