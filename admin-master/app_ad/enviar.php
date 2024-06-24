<?php
include("../../app/config.php");  // varifica si esta iniciada la sesión

if (isset($_POST['categoria_id']) && !empty($_POST['categoria_id'])) {
    $producto_id=$_SESSION['id'];
    $categoria_id = $_POST['categoria_id'];
    $_SESSION['categoria_id'] = $categoria_id;  // Almacena el ID de la categoría en la sesión
    echo "Categoría seleccionada y guardada en la sesión.";
} else {
    echo "Por favor selecciona una categoría.";
}


?>
