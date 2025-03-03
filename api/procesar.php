<?php

session_start(); // Sesion iniciada para guardar los datos del formulario.

// Validar token 'CSRF'.
/*if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Error de seguridad: Token CSRF no válido.");
}

// Destruye el token después de usarlo para mayor seguridad.
unset($_SESSION['csrf_token']);*/

// Captura de los datos del formulario con PHP.
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$apellidos = isset($_POST['apellidos']) ? trim($_POST['apellidos']) : '';
$edad = isset($_POST['edad']) ? trim($_POST['edad']) : '';
$correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
$contrasenia = isset ($_POST['contrasenia']) ? trim($_POST['contrasenia']) : '';

// Guarda los datos de la sesión para utilizarlos después.
$_SESSION['registro'] = [
    'nombre' => htmlspecialchars($nombre),
    'apellidos' => htmlspecialchars($apellidos),
    'edad' => htmlspecialchars($edad),
    'correo' => htmlspecialchars($correo),
    'contrasenia' => htmlspecialchars($contrasenia)
];

// Regenera el token para evitar la reutilización.
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// Redirigue la página a 'register.php' que verifica el envío del formulario.
header("Location: /api/register.php");

exit;

?>