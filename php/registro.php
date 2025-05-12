<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombreCompleto']);
    $correo = trim($_POST['correo']);
    $nacimiento = $_POST['Nacimiento'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validación básica
    if (empty($nombre) || empty($correo) || empty($nacimiento) || empty($password) || empty($confirmPassword)) {
        header("Location: ../index.php?error=empty_fields");
        exit();
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=invalid_email");
        exit();
    }

    if ($password !== $confirmPassword) {
        header("Location: ../index.php?error=pass_mismatch");
        exit();
    }

    // Encriptar la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO usuarios (nombreCompleto, correo, nacimiento, password) 
                VALUES (:nombre, :correo, :nacimiento, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':nacimiento', $nacimiento);
        $stmt->bindParam(':password', $passwordHash);

        if ($stmt->execute()) {
            header("Location: ../index.php?success=registered");
            exit();
        } else {
            header("Location: ../index.php?error=registration_failed");
            exit();
        }
    } catch (PDOException $e) {
        header("Location: ../index.php?error=db_error");
        exit();
    }
}
?>
