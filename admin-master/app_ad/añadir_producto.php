<?php
include("../../app/BaseDatos.php");
include_once("enviar.php");// el enviar estaria de mas ya que se puede colocar tranquilamente el codigo de enviar en esta seccion
include("../../app/config.php");  
$bd = new BaseDatos();




$nombre = $_POST['nombre'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio']; 

// Verifica si $_SESSION['categoria_id'] está presente y no está vacío
if (isset($_SESSION['categoria_id']) && !empty($_SESSION['categoria_id'])) {
    $id_categoria = $_SESSION['categoria_id'];  // obtenimos el id de la categoria
} else {
    die("Error: id_categoria no está definido en la sesión.");
}

// Verifica si todos los campos POST están presentes
if (empty($nombre) || empty($descrip) || empty($precio)) {
    die("Error: Todos los campos deben ser completados.");
}

// Consulta para verificar si la categoría existe
$sql = "SELECT * FROM categoria WHERE id = :id_categoria";
$params = [':id_categoria' => $id_categoria];
$query = $bd->consulta($sql, $params);

if ($query->fetch()) {
    // Si la categoría existe, inserta el nuevo producto en el menú
    $sql_insert = "INSERT INTO menu (nombre, descripcion, precio, id_categoria) VALUES (:nombre, :descripcion, :precio, :id_categoria)";
    $params_insert = [
        ':nombre' => $nombre,
        ':descripcion' => $descrip,
        ':precio' => $precio,
        ':id_categoria' => $id_categoria
    ];

    try {
        $bd->consulta($sql_insert, $params_insert);
        header("location:../products.php");
    } catch (PDOException $e) {
        echo "Error al insertar el producto: " . $e->getMessage();
    }
} else {
    echo "Error: La categoría con id $id_categoria no existe.";
}
?>
