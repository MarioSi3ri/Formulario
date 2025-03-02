/* FUNCIÓN PARA CAMBIAR LA IMAGEN DE MANERA TEMPORAL */
function iconoImagen() {

const cambiarImg = document.getElementById('cambiarImg');
const predeterminadaImg = document.getElementById('predeterminadaImg');

predeterminadaImg.addEventListener('click', abrirImagen);
cambiarImg.addEventListener('change', actualizarImagen);

function abrirImagen(){
    cambiarImg.click(); // Aplica el clic en el input oculto.
}

function actualizarImagen(event){
    const archivo = event.target.files[0];

    if(archivo){
        const leer = new FileReader();
        leer.onload = function (e) {
            predeterminadaImg.src = e.target.result; // Cambia la imagen por la seleccionada
        };
        leer.readAsDataURL(archivo);
        }
    }
}

// INICIA CUANDO EL D.O.M ESTE CARGADO.
document.addEventListener("DOMContentLoaded", iconoImagen);

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

/*/ CAMBIA EL DISEÑO/TEMA DE LA PÁGINA (V1).
document.addEventListener("DOMContentLoaded", function(){
    const toggleButton = document.getElementById("toggleTheme");
    const body = document.body;

    function toggleTheme(){
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")){
            localStorage.setItem("theme", "dark");
            toggleButton.innerHTML = '<span class="material-symbols-outlined">brightness_7</span>';
        } else {
            localStorage.setItem("theme", "light");
            toggleButton.innerHTML = '<span class="material-symbols-outlined">nights_stay</span>';
        }
    }

    function applySavedTheme(){
        if (localStorage.getItem("theme") === "dark"){
            body.classList.add("dark-mode");
            toggleButton.innerHTML = '<span class="material-symbols-outlined">brightness_7</span>';
        } else {
            body.classList.remove("dark-mode");
            toggleButton.innerHTML = '<span class="material-symbols-outlined">nights_stay</span>';
        }
    }
    applySavedTheme();
    toggleButton.addEventListener("click", toggleTheme);
});*/