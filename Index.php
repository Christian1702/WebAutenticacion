<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Nike Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./img/nike_favicom.png" type="image/x-icon">
</head>

<body>
    <div class="background-overlay"></div>

    <main class="container">
        <div class="branding">
            <img src="./img/Nike.png" alt="Nike Logo" class="logo">
            <h1>Bienvenido a Nike Store</h1>
            <p>Ingresa o crea tu cuenta para encontrar tus zapatillas favoritas.</p>
        </div>

        <div class="form-wrapper">
            <div class="toggle-buttons">
                <button id="btn-login" class="active">Iniciar Sesión</button>
                <button id="btn-register">Registrarse</button>
            </div>

            <div class="slider-container">
                <div class="forms-slider">
                    <!-- Login Form -->
                    <!-- Login Form -->
                    <section class="form-section" id="login-form">
                        <h2>Iniciar Sesión</h2>
                        <form action="./php/login.php" method="post">
                            <input type="email" name="correo" placeholder="Correo Electrónico" required>
                            <input type="password" name="password" placeholder="Contraseña" required>
                            <button type="submit" name="login">Ingresar</button>
                            <div class="forgot-password">
                                <a href="./php/recuperar.php">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </section>

                    <!-- Register Form -->
                    <section class="form-section" id="register-form">
                        <h2>Crear Cuenta</h2>
                        <form action="./php/registro.php" method="post">
                            <input type="text" name="nombreCompleto" placeholder="Nombre y Apellido" required>
                            <input type="email" name="correo" placeholder="Correo Electrónico" required>
                            <input type="date" name="Nacimiento" required>
                            <input type="password" name="password" placeholder="Contraseña" required>
                            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
                            <button type="submit" name="Registro">Registrarse</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./Script/alerta.js"></script>
    <script src="./Script/animacion.js"></script>
</body>

</html>