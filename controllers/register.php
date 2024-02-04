<?php
    include '../includes/conection.php';

    if(isset($_POST['envio'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $insertarDatos = "INSERT INTO datos_formulario VALUES('', '$nombre', '$email', '$pass')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if ($ejecutarInsertar) {
            echo "Datos insertados correctamente. Ya puedes iniciar sesión";
        } else {
            echo "Error al insertar datos: " . mysqli_error($enlace);
        }
        
    };

    mysqli_close($enlace);

?>  