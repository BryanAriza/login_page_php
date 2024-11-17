<?php 

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
    <title>Galería de Imágenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="content container text-center mt-5">
        <h1 style="font-weight: bold;" >Galería de Imágenes</h1>
        <p>Explora algunas de las consolas y juegos más importantes de la historia de los videojuegos:</p>
        <br>
        <div class="row g-3">
            <div class="col-md-3">
                <img src="../resources/img/Demon's Souls.jpg" alt="Xbox Series" class="img-fluid rounded" >
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Final_Fantasy_VI.jpg" alt="Nintendo DS" class="img-fluid rounded" width="200">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Grand_Theft_Auto_San_Andreas.JPG.webp" alt="Nintendo Switch" class="img-fluid rounded" width="230">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Kindom Hearts.png" alt="Nintendo Wii" class="img-fluid rounded" width="230">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Returnal.jpg" alt="Gameboy Color" class="img-fluid rounded" width="230">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Spiderman.jpg" alt="PlayStation 4" class="img-fluid rounded" width="230">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Street Fighter.jpg" alt="PlayStation 5" class="img-fluid rounded" width="230">
            </div>
            <div class="col-md-3">
                <img src="../resources/img/Super Mario World.jpg" alt="PlayStation 2" class="img-fluid rounded" width="230">
            </div>
            
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>
