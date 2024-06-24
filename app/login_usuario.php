<?php
include("BaseDatos.php");
session_start();

$bd = new BaseDatos();

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["contra"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $usuario = $_POST["usuario"];
        $contra = $_POST["contra"];

        // Esta forma sirve para evitar inyecciones de datos
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $params = [':usuario' => $usuario];
        $query = $bd->consulta($sql, $params);

        if ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            // Verificar la contraseña utilizando password verify por que esta encriptada
            
            if (password_verify($contra, $row['contra'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['id_cargo'] = $row['id_cargo'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['id_categoria'] = $row['id_categoria'];

                if ($_SESSION['id_cargo'] == 1 && $_SESSION['usuario'] == $usuario && isset($_SESSION['id'])) {
                    header("Location: ../admin-master/index_ad.php");
                    exit();
                } else if ($_SESSION['id_cargo'] == 3 && $_SESSION['usuario'] == $usuario) {
                    header("Location: ../blog.php");
                } else {
                    header("Location: ../index.php");
                }
                exit();
            } else {
                echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }
    }
}
?>
