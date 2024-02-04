<?php
    include '../includes/conection.php';

    if(isset($_POST['envio'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $revisarDatos = "SELECT * FROM  datos_formulario WHERE email='$email' AND pass='$pass' ";

        $ejecutarRevisar = mysqli_query($enlace, $revisarDatos);

        if(mysqli_num_rows($ejecutarRevisar) == 1) {
            header("Location: ../views/pagina_tareas.html");
            exit();
        } else {
            echo "Credenciales incorrectas";
        }
    }
?>

    