/* MENÚ */
document.addEventListener("DOMContentLoaded", () => {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    // Abre y cierra el menú de hamburguesa completo
    hamburgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("flex");
    });

    // Manejo táctil de submenús tipo acordeón (solo en móviles)
    const accordionBtns = document.querySelectorAll(".menu-accordion-btn");
    accordionBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            if (window.innerWidth < 768) {
                e.preventDefault();
                const currentSubmenu = btn.nextElementSibling;
                currentSubmenu.classList.toggle("hidden");
            }
        });
    });
});

/* Script para controlar el Play y el Pause del vídeo de la página clima.php*/
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('mi-video');
    const capaTexto = document.getElementById('capa-texto');

    if (video && capaTexto) {
        // Al darle PLAY el texto se desvanece
        video.addEventListener('play', () => {
            capaTexto.classList.remove('opacity-100');
            capaTexto.classList.add('opacity-0');
        });

        // Al darle PAUSA el texto regresa automáticamente
        video.addEventListener('pause', () => {
            capaTexto.classList.remove('opacity-0');
            capaTexto.classList.add('opacity-100');
        });
    }
});

/* FUNCIÓN DE LOS ACORDEONES */
// Seleccionamos todos los botones que activan los acordeones
document.addEventListener('DOMContentLoaded', () => {

    // Escuchamos los clics en absolutamente toda la página
    document.addEventListener('click', function(e) {
        
        // .closest() asegura encontrar el botón .acordeon-trigger aunque hagas clic en el H2 o en el icono <i>
        const trigger = e.target.closest('.acordeon-trigger');
        
        // Si el clic no fue dentro de un botón de acordeón, ignoramos el código
        if (!trigger) return;
        
        // Evitamos cualquier comportamiento por defecto
        e.preventDefault();
        
        const currentItem = trigger.parentElement;
        const currentContent = currentItem.querySelector('.acordeon-content');
        const currentIcon = currentItem.querySelector('.acordeon-icon');
        
        // Verificamos si el acordeón actual ya se encuentra abierto
        const isOpen = currentContent.style.maxHeight && currentContent.style.maxHeight !== '0px';
        
        // 1. CERRAR TODOS LOS ACORDEONES DE LA PÁGINA
        document.querySelectorAll('.acordeon-content').forEach(content => {
            content.style.maxHeight = '0px';
        });
        document.querySelectorAll('.acordeon-icon').forEach(icon => {
            icon.style.transform = 'rotate(0deg)';
        });
        
        // 2. SI EL SELECCIONADO ESTABA CERRADO, LO ABRIMOS
        if (!isOpen) {
            // scrollHeight calcula al milímetro el tamaño de los h3 y párrafos <p>
            currentContent.style.maxHeight = currentContent.scrollHeight + "px";
            currentIcon.style.transform = 'rotate(180deg)';
        }
    });
});

/* LÓGICA DEL CARRUSEL EN JAVASCRIPT */
window.addEventListener("load", () => {
    const slides = document.querySelectorAll(".banner-slide");
    const dots = document.querySelectorAll(".banner-dot");
    
    let currentSlide = 0;
    let slideInterval;

    if (slides.length === 0 || dots.length === 0) return;

    function showSlide(index) {
        // Ocultar slide y apagar punto anterior nativamente
        slides[currentSlide].style.opacity = "0";
        slides[currentSlide].style.visibility = "hidden";
        slides[currentSlide].style.zIndex = "5";
        dots[currentSlide].style.opacity = "0.4";

        // Cambiar al nuevo índice
        currentSlide = index;

        // Mostrar nuevo slide y encender punto activo nativamente
        slides[currentSlide].style.opacity = "1";
        slides[currentSlide].style.visibility = "visible";
        slides[currentSlide].style.zIndex = "10";
        dots[currentSlide].style.opacity = "1";
    }

    function nextSlide() {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function startInterval() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    dots.forEach(dot => {
        dot.addEventListener("click", (e) => {
            const targetIndex = parseInt(e.target.getAttribute("data-slide"));
            showSlide(targetIndex);
            resetInterval();
        });
    });

    startInterval();
});