document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('toggle');
  const menu = document.getElementById('menu');
  const drops = document.querySelectorAll('.drop');

  // Mismo corte que el CSS: arriba de 1240px el menú se ve completo
  const pantallaGrande = window.matchMedia('(min-width: 1241px)');

  // ---------- Menú hamburguesa ----------
  toggle.addEventListener('click', () => {
    const abierto = menu.classList.toggle('open');
    toggle.setAttribute('aria-expanded', abierto);
    toggle.setAttribute('aria-label', abierto ? 'Cerrar menú' : 'Abrir menú');
  });

  // ---------- Submenús ----------
  function cerrarSubmenus(excepto) {
    drops.forEach(btn => {
      if (btn !== excepto) {
        btn.setAttribute('aria-expanded', 'false');
        btn.nextElementSibling.classList.remove('open');
      }
    });
  }

  drops.forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      const sub = btn.nextElementSibling;
      const abierto = sub.classList.toggle('open');
      btn.setAttribute('aria-expanded', abierto);
      cerrarSubmenus(btn);
    });
  });

  // Click afuera o Escape cierran los submenús
  document.addEventListener('click', e => {
    if (!e.target.closest('.submenu')) cerrarSubmenus();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') cerrarSubmenus();
  });

  // Al pasar a pantalla grande se reinicia el menú móvil
  pantallaGrande.addEventListener('change', e => {
    if (e.matches) {
      menu.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Abrir menú');
    }
  });
});