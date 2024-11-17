<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

require_once '../models/Consola.php';  // Asegúrate de que la ruta sea correcta

$id = $_GET['id'];
$consolaModel = new Consola();
$consola = $consolaModel->obtenerConsolaPorId($id);

include 'partials/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Consola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="content text-center container mt-5">

        <h1>Editar Consola</h1>
        <form action="../controllers/EditConsolController.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="id" value="<?= $consola['id'] ?>">
            <input type="text" name="imagen_actual" value="<?= $consola['imagen'] ?>"> <!-- Aquí agregamos la imagen actual -->
            <input type="hidden" name="id" value="<?= $consola['id'] ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Consola</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $consola['nombre'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required><?= $consola['descripcion'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" id="imagen" name="imagen" class="form-control">
                <!-- Si ya hay una imagen, mostrarla -->
                <?php if ($consola['imagen']): ?>
                    <p>Imagen actual: <?= $consola['imagen'] ?></p>
                <?php endif; ?>
                <?php if ($consola['imagen']): ?>
                    <img src="../resources/uploads/<?= $consola['imagen'] ?>" class="card-img-top img-thumbnail-small" alt="<?= $consola['nombre'] ?>">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Consola</button>
        </form>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>