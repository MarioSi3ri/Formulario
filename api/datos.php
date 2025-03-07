<?php

session_start();

// Generar un token CSRF si no existe.
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Verfica los datos del formulario guardados en la sesión. Si no hay datos, los campos estarán vacíos. 
$nombre = isset($_SESSION['registro']['nombre'])?$_SESSION['registro']['nombre'] : '';
$apellidos = isset($_SESSION['registro']['apellidos'])?$_SESSION['registro']['apellidos'] : '';
$edad = isset($_SESSION['registro']['edad'])?$_SESSION['registro']['edad'] : '';
$correo = isset($_SESSION['registro']['correo'])?$_SESSION['registro']['correo'] : '';
$contrasenia = isset($_SESSION['registro']['contrasenia'])?$_SESSION['registro']['contrasenia'] : '';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Actualizar</title>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
        <link rel="stylesheet" href="/index.css">
        <script src="/form.js"></script>
    </head>
        <body>
        <a href="https://github.com/MarioSi3ri" target="_blank" rel="noopener noreferrer">
            <img src="/image/GitHub_Logo.png" alt="Imagen representativa de GitHub" title="Presiona para acceder a mi repo en GitHub" class="github">
        </a>
        <button id="toggleTheme" title="Cambia el tema de la p&aacute;gina"><span class="material-symbols-outlined">nights_stay</span></button>
            <form id="Formula" name="Formulario" method="post" action="/api/procesar.php" class="registro">
           <div>
            <h2>✏️Actualiza tus datos</h2>
            </div>
           <div>
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <label for="nombre">Nombre: </label><span class="verif"></span>
                <input class="input" name="nombre" id="nombre" placeholder="Ingresa tu nombre" title="Por favor, escribe tu nombre" value="<?php echo htmlspecialchars($nombre); ?>" required autofocus>
                <label for="apellidos">Apellidos: </label><span class="verif"></span>
                <input class="input" type="text" name="apellidos" id="apellidos" placeholder="Ingresa tus apellidos" title="Por favor, escribe tu apellido completo" value="<?php echo htmlspecialchars($apellidos); ?>" required>
                <label for="edad">Edad: </label><span class="verif"></span>
                <input class="input" type="number" name="edad" id="edad" min="16" max="99" placeholder="Ingresa tu edad" title="Por favor, escribe o selecciona tu edad a partir de 16" value="<?php echo htmlspecialchars($edad); ?>" required>
                <label for="correo">Correo: </label><span class="verif"></span>
                <input class="input" type="email" name="correo" id="correo" placeholder="Ingresa tu correo" title="Por favor, escribe tu correo electr&oacute;nico" value="<?php echo htmlspecialchars($correo); ?>" required>
                <label for="contrasenia">Contrase&ntilde;a: </label><span class="verif"></span>
                <input class="input" type="password" name="contrasenia" id="contrasenia" minlength="8"  maxlength="62" placeholder="Ingresa tu contrase&ntilde;a" title="Por favor, escribe tu contrase&ntilde;a entre 8 a 62 caracteres" value="<?php echo htmlspecialchars($contrasenia); ?>" required>
                <span id="verContrasenia" class="icono" onclick="verContrasena()">👁️‍🗨️</span>
                <button id="boton" class="boton" type="submit" title="Presione para actualizar los datos" value="comprobar" onclick="comprobar()">Actualizar</button>
            </div>
            </form>
        </body>
</html>

<!-- Se debe asignar a los 'input' del código HTML la propiedad 'value' con codigo PHP
 para mostrar en el formulario los datos modificables guardados en la sesión. -->