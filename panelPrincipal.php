<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Index.php");
    exit();
}
$tiempoInactividad = 600;
if (!isset($_SESSION['usuario'])) {
    header("Location: php/login.php");
    exit();
}
if (isset($_SESSION['ultimo_acceso'])) {
    $tiempoTranscurrido = time() - $_SESSION['ultimo_acceso'];
    if ($tiempoTranscurrido > $tiempoInactividad) {
        session_unset();
        session_destroy();
        header("Location: php/login.php?inactividad=1");
        exit();
    }
}
$_SESSION['ultimo_acceso'] = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="CSS/panelPrincipal.css">
    <link rel="shortcut icon" href="./img/nike_favicom.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <h1>NIKE</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Hombres</a></li>
                <li><a href="#">Mujeres</a></li>
                <li><a href="#">Niños</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Mi cuenta</a></li>
            </ul>
        </nav>
        <div class="user">
        <span>Bienvenido, <?= htmlspecialchars($_SESSION["usuario"]["correo"]); ?></span>
            <a href="php/logout.php" class="logout-btn">Cerrar sesión</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <h2>Explora los últimos modelos de zapatillas Nike</h2>
            <p>Diseño, innovación y rendimiento para todos los estilos.</p>
            <a href="#" class="cta-button">Comprar ahora</a>
        </section>

        <section class="product-grid">
            <article class="product-card">
                <img src="./img/zapatillas_modelo_Uno.png" alt="Nike Air Max">
                <h3>Nike Air Max 1</h3>
                <p>$120.00</p>
                <button>Agregar al carrito</button>
            </article>

            <article class="product-card">
                <img src="./img/zapatillas_modelo_Dos.png" alt="Air Jordan 1">
                <h3>Air Jordan 1</h3>
                <p>$150.00</p>
                <button>Agregar al carrito</button>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date("Y") ?> Desarrollado por Christian Carrasco</p>
    </footer>
    <script src="./Script/sessionDestroy.js"></script>
</body>
</html>
