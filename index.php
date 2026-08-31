<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <script src="frontend/acciones.js">
        const boton = document.getElementById("despliegue");
        const menu = document.getElementById("opciones");

        boton.addEventListener("click", function(){
            menu.classList.toggle("show");
        });
    </script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <a id="logo" href="https://www.neuquen.edu.ar" title="Educación Neuquén">hola</a>

    <div id="dropdown">
        <button id="despliegue">abrir</button>
        <div id="opciones" class="dropdown-contenido">
            <a href="#">1</a>
        </div>
    </div>
</body>
</html>