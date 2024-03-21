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
      $headers = 'From' . $email  . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Direccion: " . $direc;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Ciudad: " . $ciudad;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono: " . $telef;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Edad: " . $edad;
      $msjCorreo .= "\r\n";
echo $para;
echo $headers;
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
