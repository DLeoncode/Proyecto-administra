<?php

require_once("../backend/principal.php");


if (isset($_POST['agregar'])) 
    
        {
            $codigo = trim($_POST['codigo']);
            $nombre = trim($_POST['nombre']);
            $descripcion = trim($_POST['descripcion']);
            $categoria = trim($_POST['categoria']);
            $fecha = date("d/m/y");
           
            
            $consultar = "INSERT INTO productos (Codigo, Nombre, Descripción, Categoria, Fecha)
                VALUES('$codigo', '$nombre', '$descripcion', '$categoria' NOW())";
            $respuesta = mysqli_query($conec, $consulta);
            if ($respuesta) {
                echo '<script type="text/javascript">';
                echo 'alert("¡Producto Registrado!");';
                echo 'window.location = "../public/html/Gestion/Productos.html";';
                echo '</script>';
                exit; 
            }
        }
        mysqli_close($conec);   

?>  