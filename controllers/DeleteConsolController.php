<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el modelo Consola y obtener las consolas
require_once '../models/Consola.php';

$id = $_GET['id'];
$consolaModel = new Consola();
$consola = $consolaModel->obtenerConsolaPorId($id);  // Obtener los datos de la consola
$imagen_ruta = '../resources/uploads/' . $consola['imagen'];

// Eliminar la imagen si existe
if (file_exists($imagen_ruta)) {
    unlink($imagen_ruta);  // Eliminar la imagen del servidor
}

// Crear una instancia de la clase Consola y llamar al método de eliminación
$consolaModel->eliminarConsola($id);  // Eliminar la consola de la base de datos
header("Location: ../views/consolas.php");  // Redirigir a la página principal
exit();
?>