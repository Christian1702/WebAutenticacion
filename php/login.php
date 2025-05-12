<?php
session_start();
include("conexion.php");

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE correo = :correo");
$consulta->bindParam(':correo', $correo);
$consulta->execute();

if ($consulta->rowCount() > 0) {
    $usuarioBD = $consulta->fetch(PDO::FETCH_ASSOC);
    
    if (password_verify($password, $usuarioBD['password'])) {
        // Crear sesión con tiempo de último acceso
        $_SESSION['usuario'] = [
            "correo" => $usuarioBD['correo']
        ];
        $_SESSION['ultimo_acceso'] = time(); // ← TIEMPO DE INICIO DE LA SESIÓN

        header("Location: ../panelPrincipal.php");
        exit();
    } else {
        // Contraseña incorrecta
        header("Location: ../index.php?error=contraseña");
        exit();
    }
} else {
    // Correo no encontrado
    header("Location: ../index.php?error=correo");
    exit();
}
?>

