<?php
session_start(); // Sesion iniciada para guardar los datos del formulario.

// Genera un token CSRF si esté no existe.
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Recupera los datos del formulario guardados en la sesión. Si no hay datos, los campos estarán vacíos.
$nombre = $_SESSION['registro']['nombre'] ?? '';
$apellidos = $_SESSION['registro']['apellidos'] ?? '';
$edad = $_SESSION['registro']['edad'] ?? '';
$correo = $_SESSION['registro']['correo'] ?? '';
$contrasenia = $_SESSION['registro']['contrasenia'] ?? '';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Formulario</title>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <link rel="stylesheet" href="index.css">
        <script src="form.js"></script>
    </head>
        <body>
        <a href="https://github.com/MarioSi3ri" target="_blank">
            <img src="image/GitHub_Logo.png" alt="Imagen representativa de GitHub" title="Presiona para acceder a mi repo en GitHub" class="github">
        </a>
        <button id="toggleTheme" title="Cambia el tema de la p&aacute;gina"><span class="material-symbols-outlined">nights_stay</span></button>
            <form id="Formula" name="Formulario" method="post" action="procesar.php" class="registro">
           <div>
            <h2>📝Registrar alumno (UVEG)</h2>
            </div>
           <div>
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <label for="nombre">Nombre: </label><span class="verif"></span>
                <input class="input" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" title="Por favor, escribe tu nombre completo" required autofocus>
                <label for="apellidos">Apellidos: </label><span class="verif"></span>
                <input class="input" type="text" name="apellidos" id="apellidos" placeholder="Ingresa tus apellidos" title="Por favor, escribe tu apellido completo" required>
                <label for="edad">Edad: </label><span class="verif"></span>
                <input class="input" type="number" name="edad" id="edad" min="16" max="99" placeholder="Ingresa tu edad" title="Por favor, escribe o selecciona tu edad a partir de 16" required>
                <label for="correo">Correo: </label><span class="verif"></span>
                <input class="input" type="email" name="correo" id="correo" placeholder="Ingresa tu correo" title="Por favor, escribe tu correo electr&oacute;nico" required>
                <label for="contrasenia">Contrase&ntilde;a: </label><span class="verif"></span>
                <input class="input" type="password" name="contrasenia" id="contrasenia" minlength="8" maxlength="62" placeholder="Ingresa tu contrase&ntilde;a" title="Por favor, escribe tu contrase&ntilde;a entre 8 a 62 caracteres" required>
                <span id="verContrasenia" class="icono" onclick="verContrasena()"><span class="material-symbols-outlined">visibility</span></span>
                <button id="boton" class="boton" type="submit" title="Presione para registrar" value="comprobar" onclick="comprobar()">Registrar</button>
            </div>
            </form>
        </body>
</html>