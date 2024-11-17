<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el modelo Consola y obtener las consolas
require_once '../models/Consola.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // Verificar si se ha subido una nueva imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        echo('Entra aquí en imagen nueva');
        $imagen = $_FILES['imagen'];
        $imagen_nombre = time() . "_" . basename($imagen['name']);
        $imagen_ruta = '../resources/uploads/' . $imagen_nombre;

        // Mover la nueva imagen al directorio uploads
        move_uploaded_file($imagen['tmp_name'], $imagen_ruta);
    } else {
        // Verificar si imagen_actual está presente y no está vacía
        if (isset($_POST['imagen_actual']) && !empty($_POST['imagen_actual'])) {
            echo('Entra aquí en imagen existente');
            $imagen_nombre = $_POST['imagen_actual']; // Mantener la imagen actual
        } else {
            // Si no hay imagen actual, puedes asignar un valor por defecto o manejar el error
            $imagen_nombre = 'default_image.jpeg'; // Asigna un valor predeterminado o maneja el error
        }
    }

    // Crear una instancia de la clase Consola y llamar al método de actualización
    $consolaModel = new Consola();
    $consolaModel->actualizarConsola($id, $nombre, $descripcion, $imagen_nombre);

    header("Location: ../views/consolas.php"); // Redirigir a la página principal
    exit();
}



?>
