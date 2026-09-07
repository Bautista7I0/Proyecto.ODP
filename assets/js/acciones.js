const boton = document.getElementById("despliegue");
const menu = document.getElementById("opciones");

boton.addEventListener("click", function(){
    menu.classList.toggle("show");
});