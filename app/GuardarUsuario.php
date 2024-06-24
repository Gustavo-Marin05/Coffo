<?php
include("BaseDatos.php");
session_start();

$bd = new BaseDatos();

if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["contra"])) {
        echo '<div class="alert alert-danger">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];

        $contra=password_hash( $_POST["contra"],PASSWORD_DEFAULT);
        
        $cargo = 2;

        // Verificar si el usuario ya existe 
        //lo colocamos de esta manera la consulta para evitar inyeccion de datos en sql y despues lo renombramos en params
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $params = [':usuario' => $usuario];
        $query = $bd->consulta($sql, $params);

        if ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="alert alert-danger">Este usuario ya está en uso, por favor elija otro</div>';
        } else {
            // aqui ya se nserta el nuevo usuario
            $sql = "INSERT INTO usuarios (nombre, apellido, usuario, contra, id_cargo) VALUES (:nombre, :apellido, :usuario, :contra, :id_cargo)";
            $params = [
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':usuario' => $usuario,
                ':contra' => $contra,
                ':id_cargo' => $cargo
            ];
            $bd->consulta($sql, $params);

            //aqui le mandamos el usuario para hacerle saber que ya hay un inicio de secion
            $_SESSION['usuario'] = $usuario;
            //$_SESSION['id_cargo'] = $cargo; //creo que no es tan nesesario enviar el id_cargo

            // Redirigir al usuario a la página de inicio
            header("Location: ../index.php");
            exit();
           
            
            
        }
    }
}
?>
