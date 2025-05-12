<?php
    $server = 'localhost:3307';
    $usuario = 'root';
    $contraseña = '';
    $baseDeDatos = 'webautenticacion';

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$baseDeDatos", $usuario, $contraseña);
    } catch(PDOExeption $e) {
        die ('conexión de error:' . $e->getMessage());
    }
?>