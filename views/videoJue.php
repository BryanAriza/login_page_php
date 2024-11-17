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
    <title>Videos Relacionados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="content container text-center mt-5">
        <h1 style="font-weight: bold;" >Videos Relacionados</h1>
        <p>Mira estos videos para más información sobre la evolución de las consolas:</p>
        
        <div class="row">
            <div class="col-md-4 mb-3">
                <video width="320" height="240" controls>
                    <source src="../resources/video/video1.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
            <div class="col-md-4 mb-3">
                <video width="320" height="240" controls>
                    <source src="../resources/video/video2.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
            <div class="col-md-4 mb-3">
                <video width="320" height="240" controls>
                    <source src="../resources/video/video3.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>
</html>
