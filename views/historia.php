<?php ;

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'partials/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="content container text-center mt-5">
        <h1 style="font-weight: bold;">Historia de las Consolas de Videojuegos</h2>
        <p>Las consolas de videojuegos han recorrido un largo camino desde sus humildes comienzos con el Atari 2600, pasando por la revolucionaria NES, hasta llegar a las 
            potentes consolas actuales como la PlayStation 5 y Xbox Series X. Las consolas no solo cambiaron la manera en que jugamos, sino que han transformado la industria 
            del entretenimiento global. Con más de 160 millones de unidades vendidas, la PlayStation 2 sigue siendo la consola más vendida de todos los tiempos. Entre las 
            consolas más vendidas, destacan:</p>
        <ul class="list-unstyled text-center">
            <li><strong>PlayStation 2</strong> – 155 millones de unidades vendidas.</li>
            <li><strong>Nintendo DS</strong> – 154 millones de unidades vendidas.</li>
            <li><strong>Game Boy/Game Boy Color</strong> – 118 millones de unidades vendidas.</li>
            <li><strong>PlayStation 4</strong> – 116 millones de unidades vendidas.</li>
            <li><strong>Nintendo Switch</strong> – 103 millones de unidades vendidas.</li>
        </ul>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>