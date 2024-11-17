<?php
// index.php

// Inicia la sesión
session_start();

// Configuración global
require_once 'config/config.php';

// Carga del autoload para controladores
require_once 'core/Autoload.php';

// Función para manejar rutas 
function route($url) {
    $routes = [
        "" => "controllers/LoginController.php", 
        "login" => "controllers/LoginController.php", 
        "logout" => "controllers/LogoutController.php", 
        "historia" => "controllers/HistoriaController.php", 
        "consolas" => "controllers/ConsolaController.php", 
        "juegosIcon" => "controllers/JuegosIconController.php", 
        "videos" => "controllers/VideoJueController.php", 
        "image" => "controllers/ImageJueController.php", 
    ];

    return $routes[$url] ?? "views/errors/404.php"; // Página 404 si la ruta no existe
}

// Obtener la ruta solicitada
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "";

// Incluir el controlador correspondiente
require_once route($url);
?>
