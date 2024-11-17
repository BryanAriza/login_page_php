<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el modelo Consola y obtener las consolas
require_once '../models/Consola.php';  // Asegúrate de que este archivo esté bien referenciado

$consolaModel = new Consola();  // Crear una instancia del modelo Consola
$consolas = $consolaModel->obtenerConsolas();  // Obtener todas las consolas

// Si no se obtienen consolas, asigna un arreglo vacío
if ($consolas === null) {
    $consolas = [];
}

include 'partials/header.php';  // Incluye el header que ya tiene los estilos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Consolas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet"> <!-- Incluye tus estilos -->
</head>
<body>
    <div class="content container text-center mt-5">
        <h1>Listado de Consolas</h1>
        

        <a href="createConsole.php" class="btn btn-success mb-3">Agregar Consola</a>
        <div class="row">
            <?php if (isset($consolas) && is_array($consolas) && count($consolas) > 0): ?>
                <?php foreach ($consolas as $consola): ?>
                    <div class="col-md-4">
                        <div class="card">
                        <img src="../resources/uploads/<?= $consola['imagen'] ?>" class="card-img-top" alt="<?= $consola['nombre'] ?>"  width="250">
                            <div class="card-body">
                                <h5 class="card-title"><?= $consola['nombre'] ?></h5>
                                <p class="card-text"><?= $consola['descripcion'] ?></p>
                                <a href="editConsole.php?id=<?= $consola['id'] ?>" class="btn btn-primary">Editar</a>
                                <a href="deleteConsole.php?id=<?= $consola['id'] ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta consola?')">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay consolas disponibles.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?> <!-- Incluye el footer que ya tiene los estilos -->
</body>
</html>
