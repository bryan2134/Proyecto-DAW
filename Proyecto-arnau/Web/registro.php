<?php
include("conexion.php");

if(isset($_POST['registrarse'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contrasena']) >= 1 
    ){
        $name = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        // encriptar la contraeña
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

        // Preparamos y ejecutamos el insert statement usando prepare statements
        $consulta = "INSERT INTO User(Nombre, Apellido, Correo, Contraseña) VALUES (?, ?, ?, ?)";
        
        $stmt = $mysqli->prepare($consulta);
        $stmt->bind_param("ssss", $name, $apellido, $email, $hashed_password);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            echo '<h3 class="success">Tu registro se ha completado</h3>';
        } else {
            echo '<h3 class="error">Ocurrió un error</h3>';
        }
        
        $stmt->close();
    } else {
        echo '<h3 class="error">Llena todos los campos</h3>';
    }
}
?>
