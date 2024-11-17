<!-- views/partials/header.php -->
<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">VIDEO JUEGOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="historia.php">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consolas.php">Consolas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="juegosIcon.php">Juegos Icónicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videoJue.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="imageJue.php">Imagenes</a>
                </li>
            </ul>

            <!-- Alinear el nombre de usuario y el botón de cerrar sesión al centro -->
            <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li class="nav-item">
                        <!-- Mostrar el nombre del usuario al lado de Cerrar sesión -->
                        <span class="navbar-text text-white me-2">
                            Bienvenido, <?php echo $_SESSION['usuario']; ?>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Cerrar Sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>
