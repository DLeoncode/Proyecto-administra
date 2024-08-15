<?php

session_start();

require_once("principal.php");

if (isset($_POST['inicio'])){
    
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $validacion = mysqli_query($conec, "SELECT * FROM usuarios WhERE Email = '$email' and Contraseña = '$password'");
        if (mysqli_num_rows($validacion)> 0) {
            
             $soft = ("../public/html/Bienvenido.html");    
            header('location:' . $soft);
            exit;}

        else{
            echo '<script type="text/javascript">';
            echo 'alert("Usuario no registrado");';
            echo 'window.location = "../public/Inicio Sesion.html";';
            echo '</script>';
            exit;       
        } 
        mysqli_close($conec); 
};
?>