<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el modelo Consola y obtener las consolas
require_once '../models/Consola.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // // Procesar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = $_FILES['imagen'];
        $imagen_nombre = time() . "_" . basename($imagen['name']);
        $imagen_ruta = '../resources/uploads/' . $imagen_nombre;

        // Mover la imagen al directorio uploads
        move_uploaded_file($imagen['tmp_name'], $imagen_ruta);
    } else {
        $imagen_nombre = null; // Si no se ha subido una imagen
    }

    // Crear una instancia de la clase Consola y llamar al método de creación
    $consolaModel = new Consola();
    $consolaModel->crearConsola($nombre, $descripcion, $imagen_nombre);

    header("Location: ../views/consolas.php"); // Redirigir a la página principal
    exit();
}
include '../views/create.php';
?>