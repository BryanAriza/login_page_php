<?php
// controllers/LoginController.php

// controllers/LoginController.php
require_once __DIR__ . '/../models/User.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Obtener el usuario desde la base de datos
    $userModel = new User();
    $user = $userModel->getUserByUsername($usuario);

    // Verificar las credenciales
    if ($user && $password === $user['password']) {
        // Inicio de sesión exitoso
        $_SESSION['usuario'] = $user['username'];
        header('Location: ../views/home.php'); // Redirige al home
        exit;
    } else {
        // Credenciales incorrectas
        $error = "Usuario o contraseña incorrectos.";
        header("Location: ../views/login.php?error=" . urlencode($error)); // Redirige con el mensaje
        exit;
    }
}

// Si no es POST, redirige al formulario
header('Location: ../views/login.php');
exit;


