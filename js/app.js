//Cambios para el efecto en el menú
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      // Al bajar, fondo blanco y sombra
      navbar.classList.add('bg-white', 'shadow-lg');
      navbar.classList.remove('bg-transparent');
    } else {
      // Al subir, fondo transparente
      navbar.classList.remove('bg-white', 'shadow-lg');
      navbar.classList.add('bg-transparent');
    }
});

