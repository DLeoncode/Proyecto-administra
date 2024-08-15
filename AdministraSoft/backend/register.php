<?php

require_once("principal.php");


if (isset($_POST['registro'])) 
    
        {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            
            $consultar = "INSERT INTO usuarios (Nombre, Apellido, Email, Contraseña, Fecha)
                VALUES('$nombre', '$apellido', '$email', '$password', NOW())";
            $respuesta = mysqli_query($conec, $consultar);
            if ($respuesta) {
                echo '<script type="text/javascript">';
                echo 'alert("¡Registro Exitoso!");';
                echo 'window.location = "../public/Registrate.html";';
                echo '</script>';
                exit; 
            }
        }
        mysqli_close($conec);   

?>  