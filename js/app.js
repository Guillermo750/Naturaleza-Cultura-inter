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
let currentSlide = 0;
let slideInterval;

function adjustBannerHeight() {
    const banner = document.getElementById("amazon-banner");
    const slides = document.querySelectorAll(".banner-slide");

    if (!banner || slides.length === 0) return;

    // En escritorio mantenemos la altura original
    if (window.innerWidth >= 768) {
        banner.style.height = "";
        return;
    }

    const activeSlide = slides[currentSlide];

    if (!activeSlide) return;

    // Medimos el contenido real del slide activo
    const content = activeSlide.querySelector("div");

    if (!content) return;

    const slidePadding = 32; // p-4 del banner
    const contentHeight = content.offsetHeight + slidePadding;

    banner.style.height = `${contentHeight}px`;
}

function showSlide(index) {
    const slides = document.querySelectorAll(".banner-slide");
    const dots = document.querySelectorAll(".banner-dot");

    if (slides.length === 0 || dots.length === 0) return;

    // Ocultar slide anterior
    slides[currentSlide].style.opacity = "0";
    slides[currentSlide].style.pointerEvents = "none";
    slides[currentSlide].style.zIndex = "5";
    dots[currentSlide].style.opacity = "0.4";

    // Cambiar índice
    currentSlide = index;

    // Mostrar nuevo slide
    slides[currentSlide].style.opacity = "1";
    slides[currentSlide].style.pointerEvents = "auto";
    slides[currentSlide].style.zIndex = "10";
    dots[currentSlide].style.opacity = "1";

    // Ajustar altura al nuevo contenido
    requestAnimationFrame(() => {
        adjustBannerHeight();
    });
}

function nextSlide() {
    const slides = document.querySelectorAll(".banner-slide");

    if (slides.length === 0) return;

    let nextIndex = (currentSlide + 1) % slides.length;

    showSlide(nextIndex);
}

// Iniciar temporizador
function startInterval() {
    slideInterval = setInterval(nextSlide, 6000);
}

// Escuchar clics en los indicadores
document.addEventListener("click", (e) => {
    if (e.target && e.target.classList.contains("banner-dot")) {

        const targetIndex = parseInt(
            e.target.getAttribute("data-slide")
        );

        showSlide(targetIndex);

        clearInterval(slideInterval);
        startInterval();
    }
});

// Ajustar altura al cargar
document.addEventListener("DOMContentLoaded", () => {
    adjustBannerHeight();
});

// Ajustar altura al cambiar el tamaño de pantalla
window.addEventListener("resize", () => {
    adjustBannerHeight();
});

// Arrancar carrusel automático
clearInterval(slideInterval);
startInterval();