<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Educación Neuquén</title>
  <link rel="stylesheet" href="assets/css/estilo.css">
  <script src="assets/js/acciones.js" defer></script>
  <link rel="icon" href="assets/img/logo2.ico" type="imagen/ico"/>
</head>
<body>

   <header>

      <!-- ============ BARRA SUPERIOR (gris oscuro) ============ -->
      <div class="topbar">
         <div class="topbar-info">
         <a href="https://coberturas.neuquen.edu.ar/asambleas/">Llamado a Vacantes</a>
         <span class="topbar-tel">
            <span class="sep">|</span>
            +54 (0299) 4494200 / 4494365
            <span class="sep">|</span>
            <a href="https://docs.google.com/spreadsheets/d/1auAEguYqf4AJYPKaK5exq6Ow9gD60SIzKwAw2WzKQog/edit#gid=1891973516">Teléfonos CPE</a>
         </span>
         </div>

         <div class="redes">
         <a href="https://www.facebook.com/mineducacionqn/" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="12"/><path fill="#333" d="M13.4 21v-7.6h2.5l.4-3h-2.9V8.5c0-.9.3-1.4 1.5-1.4h1.5V4.4c-.3 0-1.2-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8v2.3H8v3h2.5V21z"/></svg>
         </a>
         <a href="https://www.instagram.com/mineducacionqn/" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9zm0 2a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm5.2-3.2a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2z"/></svg>
         </a>
         <a href="https://x.com/mineducacionqn" target="_blank" rel="noopener" aria-label="X (Twitter)">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.8 3h3.1l-6.8 7.7L22 21h-6.2l-4.9-6.3L5.3 21H2.2l7.2-8.3L1.8 3h6.4l4.4 5.8L17.8 3zm-1.1 16.2h1.7L7.3 4.7H5.5l11.2 14.5z"/></svg>
         </a>
         <a href="https://www.youtube.com/@cpeeducacionneuquen8818" target="_blank" rel="noopener" aria-label="YouTube">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M23 7.2a3 3 0 0 0-2.1-2.1C19 4.6 12 4.6 12 4.6s-7 0-8.9.5A3 3 0 0 0 1 7.2C.5 9.1.5 12 .5 12s0 2.9.5 4.8a3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-4.8.5-4.8s0-2.9-.5-4.8zM9.7 15.1V8.9l5.8 3.1-5.8 3.1z"/></svg>
         </a>
         </div>
      </div>

      <!-- ============ BARRA PRINCIPAL (azul) ============ -->
      <nav class="navbar" aria-label="Principal">

         <!-- Logos: imagen 1 (Provincia del Neuquén) e imagen 2 (Gobierno) -->
         <div class="logos">
         <a class="logo logo-provincia" href="https://www.neuquen.edu.ar/" title="Educación Neuquén">
            <img src="assets/img/logo1.png" alt="Provincia del Neuquén">
         </a>
         <a class="logo logo-gobierno" href="https://www.neuquen.gob.ar/" title="Gobierno de la Provincia del Neuquén" target="_blank" rel="noopener">
            <img src="assets/img/logo2.png" alt="Gobierno de la Provincia del Neuquén">
         </a>
         </div>

         <button class="toggle" id="toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
         <span></span><span></span><span></span>
         </button>

         <div class="menu" id="menu">
         <ul>
            <li>
               <button class="drop" type="button" aria-expanded="false" aria-haspopup="true">Autoridades <i class="caret"></i></button>
               <div class="submenu">
               <a href="https://www.neuquen.edu.ar/autoridades/ministerio-de-educacion/">Ministerio de Educación</a>
               <a href="https://www.neuquen.edu.ar/autoridades/consejo-provincial-de-educacion/">Consejo Provincial de Educación</a>
               <a href="https://www.neuquen.edu.ar/autoridades-dependientes-de-presidencia/">Dependencias directas de presidencia</a>
               <a href="https://www.neuquen.edu.ar/autoridades/coordinacion-pedagogica-de-niveles-y-modalidades/">Niveles y Modalidades</a>
               <a href="https://www.neuquen.edu.ar/autoridades/subsecretaria-de-gestion-administrativa/">Coordinación de Gestión Administrativa</a>
               <a href="https://www.neuquen.edu.ar/autoridades/coordinacion-legal-y-tecnica/">Coordinación Legal y Técnica</a>
               <a href="https://www.neuquen.edu.ar/autoridades/coordinacion-de-gestion-de-recursos-humanos/">Dirección Provincial de Recursos Humanos</a>
               <a href="https://www.neuquen.edu.ar/autoridades/distritos-educativos/">Coordinación de Distritos Educativos</a>
               <a href="https://www.neuquen.edu.ar/coordinacion-de-educacion-social-y-cultural/">Coordinación de Educación Social y Cultural</a>
               </div>
            </li>

            <li>
               <button class="drop" type="button" aria-expanded="false" aria-haspopup="true">Biblioteca <i class="caret"></i></button>
               <div class="submenu">
               <a href="https://www.neuquen.edu.ar/calendario-escolar-situado/">CES – Calendario Escolar Situado</a>
               <a href="http://bibliotecedie.neuquen.gov.ar/">CeDIE Centro de Documentación</a>
               <a href="https://bibliotecacedie.neuquen.edu.ar/">Catálogo en Línea CeDIE</a>
               <a href="https://www.neuquen.edu.ar/resoluciones-del-consejo-federal-de-educacion-2016/">Resoluciones del Consejo Federal de Educación a partir del 2016</a>
               </div>
            </li>

            <li><a href="https://www.neuquen.edu.ar/noticias/">Noticias</a></li>
            <li><a href="https://educaciondigital.neuquen.gov.ar/">Educación Digital</a></li>
         </ul>

         <form class="search" role="search" action="https://www.neuquen.edu.ar/" method="get">
            <input type="search" name="s" placeholder="Buscar …" aria-label="Buscar">
         </form>
         </div>
      </nav>

   </header>

<main>

</main>

</body>
</html>