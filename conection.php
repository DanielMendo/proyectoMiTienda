<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "formulario";

    $enalce = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
    

    if(isset($_POST['envio'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insertarDatos = "INSERT INTO datos_formulario VALUES('', '$nombre', '$email', '$pass')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
        
    };


?>