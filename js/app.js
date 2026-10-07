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
document.addEventListener("DOMContentLoaded", function () {
    const banners = document.querySelectorAll(".banner-carousel");

    if (!banners.length) {
        return;
    }

    banners.forEach(function (banner) {
        const slides = banner.querySelectorAll(".banner-slide");
        const dots = banner.querySelectorAll(".banner-dot");

        if (!slides.length) {
            return;
        }

        let currentSlide = 0;

        /* =========================================
           ALTURA DEL BANNER
        ========================================= */
        function adjustBannerHeight() {
            const activeSlide = slides[currentSlide];
            if (!activeSlide) {
                return;
            }

            if (window.innerWidth < 768) {
                const content = activeSlide.querySelector(":scope > div");
                if (content) {
                    banner.style.height =
                        (content.offsetHeight + 48) + "px";
                }
            } else {
                banner.style.height = "450px";
            }
        }

        /* =========================================
           MOSTRAR SLIDE
        ========================================= */
        function showSlide(index) {
            currentSlide =
                (index + slides.length) % slides.length;

            slides.forEach(function (slide, slideIndex) {
                if (slideIndex === currentSlide) {
                    slide.style.opacity = "1";
                    slide.style.pointerEvents = "auto";
                    slide.style.zIndex = "10";
                } else {
                    slide.style.opacity = "0";
                    slide.style.pointerEvents = "none";
                    slide.style.zIndex = "5";
                }
            });

            /* =====================================
               ACTUALIZAR PUNTOS
            ===================================== */
            dots.forEach(function (dot, dotIndex) {
                dot.style.opacity =
                    dotIndex === currentSlide
                        ? "1"
                        : "0.4";
            });
            adjustBannerHeight();
        }

        /* =========================================
           CLIC EN LOS PUNTOS
        ========================================= */
        dots.forEach(function (dot, index) {
            dot.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                showSlide(index);
            });
        });

        /* =========================================
           INICIAR
        ========================================= */
        showSlide(0);


        /* =========================================
           CARGA
        ========================================= */
        window.addEventListener("load", function () {
            adjustBannerHeight();
        });

        /* =========================================
           REDIMENSIONAR
        ========================================= */
        window.addEventListener("resize", function () {
            adjustBannerHeight();
        });

    });

});

/*CARRUSEL DE LA SECCIÓN DE NUESTROS SOCIOS LOCALES*/
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('partners-track');
    const slides = document.querySelectorAll('.partners-slide');
    const dots = document.querySelectorAll('.partners-dot');
    const prev = document.getElementById('partners-prev');
    const next = document.getElementById('partners-next');

    if (!track || !slides.length) return;

    let current = 0;

    function updateSlider() {
        track.style.transform =
            'translateX(-' + (current * 100) + '%)';
        dots.forEach(function (dot, index) {
            dot.style.opacity =
                index === current ? '1' : '0.4';
        });
    }

    if (prev) {
        prev.addEventListener('click', function () {
            current =
                (current - 1 + slides.length) %
                slides.length;

            updateSlider();
        });
    }

    if (next) {
        next.addEventListener('click', function () {

            current =
                (current + 1) %
                slides.length;

            updateSlider();
        });
    }

    dots.forEach(function (dot, index) {

        dot.addEventListener('click', function () {

            current = index;

            updateSlider();
        });
    });
    updateSlider();
});