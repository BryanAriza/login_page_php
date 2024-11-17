<?php
// controllers/LogoutController.php

// Cerrar sesión
session_start();
session_unset();
session_destroy();

// Redirigir al login
header('Location: ?url=login');
exit;
