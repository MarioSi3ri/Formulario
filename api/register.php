<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Registrado</title>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <link rel="stylesheet" href="/register.css">
        <script src="/form.js"></script>
    </head>
    <body>
    <a href="https://github.com/MarioSi3ri" target="_blank" rel="noopener noreferrer">
        <img src="/image/GitHub_Logo.png" alt="Imagen representativa de GitHub" title="Presiona para acceder a mi repo en GitHub" class="github">
    </a>
    <button id="toggleTheme" title="Cambia el tema de la p&aacute;gina"><span class="material-symbols-outlined">nights_stay</span></button>
        <div>
            <table class="contenedor">
                <tbody>
                    <tr>
                        <td><img src="/image/registroExitoso.png" alt="Imag&eacute;n de registro &eacute;xitoso" title="Registro completado"></td>
                        <td><h2>Datos enviados</h2></td>
                    </tr>
                    <tr>
                    <form name="Registro" method="post" action="/api/index.php">
                        <td><button class="botonRegister" type="submit" title="Presione para crear un nuevo formulario">Crear otro formulario</button></td>
                    </form>
                    <form name="Ver" method="post" action="/api/card.php">
                        <td><button class="botonRegister" type="submit" title="Presione para continuar">Ver registro</button></td>
                    </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>