/* FUNCIÓN DE VERIFICACIÓN Y SANITIZACIÓN DE LOS DATOS DEL FORMULARIO */

function comprobar (){
    const verifica = "✔";
    const verificaX = `<span class="x">✘</span>`;

    /*if(document.getElementById('nombre').value!=""){ // Se obtiene el valor del elemento HTML con el ID 'nombre'.
        document.getElementsByClassName('verif')[0].innerHTML=verifica // [0] Selecciona el primer elemento de la colección de la clase 'verif'.
    } else {
        document.getElementsByClassName('verif')[0].innerHTML=verificaX // Establece el contenido HTML de ese elemento al valor de la variable 'verificaX'.
    }*/

    document.getElementById("nombre").addEventListener("input", function(){
        let nombre = this.value.trim();
        let verifyElement = document.getElementsByClassName("verif")[0];
        let boton = document.getElementById("boton");
        let regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

        if(nombre.length >=3 && regex.test(nombre)){
            verifyElement.innerHTML = verifica;
            boton.removeAttribute("disabled");
        } else if (nombre.length > 0){
            verifyElement.innerHTML = verificaX;
            boton.disabled = true;
        } else {
            verifyElement.innerHTML = "Este campo es obligatorio.";
            boton.setAttribute("disabled", "true");
        }
    })

    document.getElementById("apellidos").addEventListener("input", function(){
        let apellidos = this.value.trim();
        let verifyElement = document.getElementsByClassName("verif")[1];
        let boton = document.getElementById("boton");
        let regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

        if (apellidos.length >=3 && regex.test(apellidos)){
            verifyElement.innerHTML = verifica;
            boton.removeAttribute("disabled");
        } else if (apellidos.length > 0){
            verifyElement.innerHTML = verificaX;
            boton.disabled = true;
        } else {
            verifyElement.innerHTML = "Este campo es obligatorio.";
            boton.setAttribute("disabled", "true");
        }

    })

    document.getElementById("edad").addEventListener("input", function(){
        let edad = this.value;
        let verifyElement = document.getElementsByClassName("verif")[2];
        let boton = document.getElementById("boton");

        if(edad >=16 && edad <=99 ){
            verifyElement.innerHTML = verifica;
            boton.removeAttribute("disabled");
        } else if (edad.length > 0){
            verifyElement.innerHTML = verificaX + " Escribe tu edad a partir de los 16 años.";
            boton.disabled = true;
        } else {
            verifyElement.innerHTML = "Este campo es obligatorio.";
            boton.setAttribute("disabled", "true");
        }
    })

    document.getElementById("correo").addEventListener("input", function(){
        let email = this.value;
        let verifyElement = document.getElementsByClassName("verif")[3];
        let boton = document.getElementById("boton");
        let emailCaracter = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(email.match(emailCaracter)){
            verifyElement.innerHTML = verifica;
            boton.removeAttribute("disabled");
        } else if (email.length > 0){
            verifyElement.innerHTML = verificaX + " Formato de correo: nombre@correo.com";
            boton.disabled = true;
        } else {
            verifyElement.innerHTML = "Este campo es obligatorio.";
            boton.setAttribute("disabled", "true");
        }
    })

    document.getElementById("contrasenia").addEventListener("input", function(){
        let contrasena = this.value; // Valor del input.
        let verifyElement = document.getElementsByClassName("verif")[4];
        let boton = document.getElementById("boton");
        
        if(contrasena.length >= 8 && contrasena.length <= 62){
            verifyElement.innerHTML = verifica;
            boton.removeAttribute("disabled");
        } else if (contrasena.length > 0){
            verifyElement.innerHTML = verificaX + " Escribe entre 8 a 62 caracteres.";
            boton.disabled = true;
        } else {
            verifyElement.innerHTML = "Este campo es obligatorio.";
            boton.setAttribute("disabled", "true");
        }
    })        
}

// VALIDACIÓN AL CARGAR LA PÁGINA PARA ASEGURAR QUE LOS BOTONES TENGAN EL ESTADO CORRECTO.
document.addEventListener("DOMContentLoaded", comprobar);
document.addEventListener("DOMContentLoaded", verContrasena);

// MOSTRAR U OCULTAR LA CONTASEÑA.
let contrasenias = true;
function verContrasena(){
    
    let iconos = document.querySelector(".icono");
    let contrasenaVisible = document.getElementById("contrasenia");

    if(contrasenias){
        contrasenaVisible.type = "password";
        iconos.innerHTML = '<span class="material-symbols-outlined">visibility</span>';
        contrasenias = false;
    } else {
        contrasenaVisible.type = "text";
        iconos.innerHTML = '<span class="material-symbols-outlined">visibility_off</span>';
        contrasenias = true;
    }
}

// CAMBIA EL DISEÑO/TEMA DE LA PÁGINA (V2).
document.addEventListener("DOMContentLoaded", function(){
    const toggleButton = document.getElementById("toggleTheme");
    const body= document.body;

    function toggleTheme(){
        const savedTheme = localStorage.getItem("theme");

        if (savedTheme){
            body.classList.toggle("dark-mode", savedTheme === "dark");
            toggleButton.innerHTML = savedTheme === "dark" ? '<span class="material-symbols-outlined">brightness_7</span>' : '<span class="material-symbols-outlined">nights_stay</span>';
        } else {
            const sistemDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
            body.classList.toggle("dark-mode", sistemDark);
            toggleButton.innerHTML = sistemDark ? '<span class="material-symbols-outlined">brightness_7</span>' : '<span class="material-symbols-outlined">nights_stay</span>';
        }
    }

    function applySavedTheme(){
        const isDarkMode = body.classList.toggle("dark-mode");
        localStorage.setItem("theme", isDarkMode ? "dark" : "light");
        toggleButton.innerHTML = isDarkMode ? '<span class="material-symbols-outlined">brightness_7</span>' : '<span class="material-symbols-outlined">nights_stay</span>';
    }
    toggleTheme();
    toggleButton.addEventListener("click", applySavedTheme);
    window.matchMedia("(prefers-color-scheme : dark)").addEventListener("change", toggleTheme);
});