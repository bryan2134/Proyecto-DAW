<?php
session_start();
include("conexion.php");

if(isset($_POST['correo'], $_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta para obtener el usuario con el correo especificado
    $consulta = "SELECT * FROM User WHERE Correo = '$correo'";
    $resultado = mysqli_query($mysqli, $consulta);

    //condicion que devuelve el numero de filas que hay
    if(mysqli_num_rows($resultado) === 1) {
        // Usuario encontrado, verificar la contraseña
        $usuario = mysqli_fetch_assoc($resultado);
        if(password_verify($contrasena, $usuario['Contraseña'])) {
            // Contraseña válida, iniciar sesión y redirigir al usuario a la página de inicio
            $_SESSION['usuario'] = $usuario['Correo'];
            header('Location: index.html');
            exit();
        } else {
            // Contraseña incorrecta
            echo "La contraseña es incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }
}
?>
