const navbarScrollContainer = document.getElementById('navbar-scroll-container');
const navbar = document.getElementById('navbar');
const logoBlock = document.getElementById('logo-block');
const originalRightBlock = document.getElementById('original-right-block');
const scrolledFullBlock = document.getElementById('scrolled-full-block');

window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
        // --- ESTADO: AL BAJAR DE LA PÁGINA ---
        navbarScrollContainer.classList.remove('bg-transparent', 'py-6');
        navbarScrollContainer.classList.add('bg-white', 'py-3', 'shadow-md');
            
        // Alineación al centro para todo el menú horizontal
        navbar.classList.remove('items-start');
        navbar.classList.add('items-center');
            
        // Reduce el tamaño del logotipo
        logoBlock.querySelector('img').classList.remove('w-40');
        logoBlock.querySelector('img').classList.add('w-24');
            
        // Intercambia los bloques del menú
        originalRightBlock.classList.add('hidden');
        scrolledFullBlock.classList.remove('hidden');
        scrolledFullBlock.classList.add('flex');
    } else {
        // --- ESTADO: ARRIBA EN EL INICIO ---
        navbarScrollContainer.classList.remove('bg-white', 'py-3', 'shadow-md');
        navbarScrollContainer.classList.add('bg-transparent', 'py-6');
            
        // Devuelve la alineación superior original
        navbar.classList.remove('items-center');
        navbar.classList.add('items-start');
            
        // Restaura el tamaño del logo grande
        logoBlock.querySelector('img').classList.remove('w-24');
        logoBlock.querySelector('img').classList.add('w-40');
            
        // Devuelve el menú original de dos niveles
        scrolledFullBlock.classList.add('hidden');
        scrolledFullBlock.classList.remove('flex');
        originalRightBlock.classList.remove('hidden');
    }
});