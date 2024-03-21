<?php

$servername = "localhost";
$username = "bryan"; 
$password = "0981238821b";
$dbname = "fitfusion";

// creando conexion
$mysqli = new mysqli($servername, $username, $password, $dbname);

// comprobando conexion 
if ($mysqli->connect_error) {
    die("Connection error: " . $mysqli->connect_error);
}
?>
