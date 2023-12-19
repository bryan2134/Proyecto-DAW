<?php
   //Reseteamos variables a 0.
   $nombre = $direct = $ciudad = $telef = $email = $edad = $para = $mensaje = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $direc = $_POST['direc'];
      $ciudad = $_POST['ciudad'];   
      $telef = $_POST['telef'];
      $email = $_POST['email'];
      $edad = $_POST['edad'];
      $para = 'fitfusionkda@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Nombre: " . $direc;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Nombre: " . $ciudad;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Nombre: " . $telef;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Nombre: " . $edad;
      $msjCorreo .= "\r\n";
      echo $para;
      echo $;
echo $msjCorreo;

    if (mail($para, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>
