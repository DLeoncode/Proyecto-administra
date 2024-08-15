
<?php
function conecta()
{
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "login";



    try {
        $conec = mysqli_connect($server, $user, $pass, $bd);
        if (!$conec) {
            throw new Exception("No hay conexión a la base de datos: " . mysqli_connect_error());
        }
        return $conec;
    } catch (Exception $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
}
?>