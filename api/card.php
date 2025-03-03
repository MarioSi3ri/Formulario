<?php
ini_set('session.cookie_lifetime', 3600); // 1 hora
ini_set('session.gc_maxlifetime', 3600); // 1 hora
session_start();

// Verifica que exista un registro en la sesión con PHP.
if (!isset($_SESSION['registro'])){
    echo "No existe registro actualmente...";
    exit;
}

// 'array' del documento 'registro' que contiene los datos del formulario.
$registro = $_SESSION['registro'];

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Alumno</title>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
        <link rel="stylesheet" href="/card.css">
        <script src="/card.js"></script>
    </head>
        <body>
        <a href="https://github.com/MarioSi3ri" target="_blank" rel="noopener noreferrer">
            <img src="/image/GitHub_Logo.png" alt="Imagen representativa de GitHub" title="Presiona para acceder a mi repo en GitHub" class="github">
        </a>
        <button id="toggleTheme" title="Cambia el tema de la p&aacute;gina"><span class="material-symbols-outlined">nights_stay</span></button>
            <div>
                <table class="tarjeta">
                    <thead>
                        <tr>
                        <th><h2>Datos del Alumno</h2></th>
                        <th><a href="https://uveg.edu.mx/index.php/es/info-isc" target="_blank" rel="noopener noreferrer">
                        <img src="/image/uveg.png" alt="Imagen representativa de la UVEG" title="Presione para más informacion de ISC en UVEG" class="uveg">
                        </a></th>
                        <td class="textImg">Cambiar imagen</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/image/iconoAlumno.png" id="predeterminadaImg" alt="Icono de imagen del alumno" title="Presione para cambiar la imagen">
                            <input type="file" id="cambiarImg" accept="image/*" style="display: none;"></td>
                            <td>
                            <h3>Universidad Virtual del Estado de Guanajuato (UVEG)</h3>
                            <form name="Formulario" method="post" action="/api/datos.php">
                        <ul class="ul">
                           <li class="lista"><strong>Nombre: </strong><?php echo htmlspecialchars ($registro['nombre']); ?></li>
                           <li class="lista"><strong>Apellidos: </strong><?php echo htmlspecialchars ($registro['apellidos']); ?></p></li>
                           <li class="lista"><strong>Edad: </strong><?php echo htmlspecialchars ($registro['edad']); ?> a&ntilde;os</p></li>
                           <li class="lista"><strong>Correo: </strong><?php echo htmlspecialchars ($registro['correo']); ?></p></li>
                           <li class="lista"><strong>Ingenier&iacute;a en Sistemas Computacionales</strong></li>
                           <li class="lista"><button class="botonDatos" type="submit" title="Presione para modificar sus datos">Editar datos y contrase&ntilde;a</button></li>
                        </ul>
                        </form>
                            </td>
                        </tr>
                        <tr>
                        <form name="Registro" method="post" action="/api/index.php">
                            <td><button class="botonCard" type="submit" title="Presione para crear un nuevo formulario">Crear nuevo registro</button></td>
                            <td><p>"Aceptaci&oacute;n del <a href="https://uveg.edu.mx/modules/mod_preregistro/resources/images/aviso_integrado.pdf" target="_blank" rel="noopener noreferrer" title="Presione para leer el aviso de privacidad">Aviso de Privacidad</a>"</p></td>
                        </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
    </html>