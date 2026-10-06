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

//PÁGINA DE ECUADOR
/* LÓGICA DEL CARRUSEL EN JAVASCRIPT */
/* PRIMER BANNER DE ECUADOR*/
document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("amazon-banner");
    const slides = banner
        ? banner.querySelectorAll(".banner-slide")
        : [];
    const dots = document.querySelectorAll(".banner-dot");
    const prevButton = document.getElementById("banner-prev");
    const nextButton = document.getElementById("banner-next");

    if (!banner || slides.length === 0) {
        return;
    }
    let currentSlide = 0;

    /* ALTURA DEL BANNER */
    function adjustBannerHeight() {
        const activeSlide = slides[currentSlide];
        if (!activeSlide) {
            return;
        }
        const content = activeSlide.querySelector(":scope > div");
        if (window.innerWidth < 768 && content) {
            banner.style.height =
                `${content.offsetHeight + 48}px`;
        } else {
            banner.style.height = "450px";
        }
    }

    /* MOSTRAR SLIDE */
    function showSlide(index) {
        currentSlide =
            (index + slides.length) % slides.length;
        slides.forEach((slide, slideIndex) => {
            const isActive =
                slideIndex === currentSlide;
            slide.style.opacity =
                isActive ? "1" : "0";
            slide.style.pointerEvents =
                isActive ? "auto" : "none";
            slide.style.zIndex =
                isActive ? "10" : "5";
        });

        /* PUNTOS */
        dots.forEach((dot, dotIndex) => {
            dot.style.opacity =
                dotIndex === currentSlide
                    ? "1"
                    : "0.4";
        });
        adjustBannerHeight();
    }

    /* PUNTOS */
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
        });
    });

    /* SLIDE INICIAL */
    showSlide(0);


    /* CARGA INICIAL */
    window.addEventListener("load", () => {
        adjustBannerHeight();
    });


    /* CAMBIO DE TAMAÑO */
    window.addEventListener("resize", () => {

        adjustBannerHeight();

    });
});

/* SEGUNDO BANNER DE ECUADOR*/
document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("blf-banner");
    const slides = banner
        ? banner.querySelectorAll(".blf-banner-slide")
        : [];

    const dots = banner
        ? banner.querySelectorAll(".blf-banner-dot")
        : [];

    if (!banner || slides.length === 0) return;

    let currentSlide = 0;

    function adjustBannerHeight() {
        const activeSlide = slides[currentSlide];

        if (!activeSlide) return;

        const content = activeSlide.querySelector(":scope > div");

        if (window.innerWidth < 768 && content) {
            banner.style.height = `${content.offsetHeight + 48}px`;
        } else {
            banner.style.height = "450px";
        }
    }

    function showSlide(index) {
        currentSlide = (index + slides.length) % slides.length;

        slides.forEach((slide, slideIndex) => {
            const isActive = slideIndex === currentSlide;

            slide.style.opacity = isActive ? "1" : "0";
            slide.style.pointerEvents = isActive ? "auto" : "none";
            slide.style.zIndex = isActive ? "10" : "5";
        });

        dots.forEach((dot, dotIndex) => {
            dot.style.opacity = dotIndex === currentSlide ? "1" : "0.4";
        });

        adjustBannerHeight();
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
        });
    });

    showSlide(0);

    window.addEventListener("load", () => {
        adjustBannerHeight();
    });

    window.addEventListener("resize", () => {
        adjustBannerHeight();
    });
});

/* TERCER BANNER DE ECUADOR*/
document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("blf-banner3");
    const slides = banner
        ? banner.querySelectorAll(".blf-banner-slide3")
        : [];

    const dots = banner
        ? banner.querySelectorAll(".blf-banner-dot3")
        : [];

    if (!banner || slides.length === 0) return;

    let currentSlide = 0;

    function adjustBannerHeight() {
        const activeSlide = slides[currentSlide];

        if (!activeSlide) return;

        const content = activeSlide.querySelector(":scope > div");

        if (window.innerWidth < 768 && content) {
            banner.style.height = `${content.offsetHeight + 48}px`;
        } else {
            banner.style.height = "450px";
        }
    }

    function showSlide(index) {
        currentSlide = (index + slides.length) % slides.length;

        slides.forEach((slide, slideIndex) => {
            const isActive = slideIndex === currentSlide;

            slide.style.opacity = isActive ? "1" : "0";
            slide.style.pointerEvents = isActive ? "auto" : "none";
            slide.style.zIndex = isActive ? "10" : "5";
        });

        dots.forEach((dot, dotIndex) => {
            dot.style.opacity = dotIndex === currentSlide ? "1" : "0.4";
        });

        adjustBannerHeight();
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
        });
    });

    showSlide(0);

    window.addEventListener("load", () => {
        adjustBannerHeight();
    });

    window.addEventListener("resize", () => {
        adjustBannerHeight();
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

//PÁGINA DE PERÚ
/* PRIMER BANNER DE PERÚ*/
document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("blf-banner4");
    const slides = banner
        ? banner.querySelectorAll(".blf-banner-slide4")
        : [];
    const dots = document.querySelectorAll(".blf-banner-dot4");
    const prevButton = document.getElementById("banner-prev");
    const nextButton = document.getElementById("banner-next");

    if (!banner || slides.length === 0) {
        return;
    }
    let currentSlide = 0;

    /* ALTURA DEL BANNER */
    function adjustBannerHeight() {
        const activeSlide = slides[currentSlide];
        if (!activeSlide) {
            return;
        }
        const content = activeSlide.querySelector(":scope > div");
        if (window.innerWidth < 768 && content) {
            banner.style.height =
                `${content.offsetHeight + 48}px`;
        } else {
            banner.style.height = "450px";
        }
    }

    /* MOSTRAR SLIDE */
    function showSlide(index) {
        currentSlide =
            (index + slides.length) % slides.length;
        slides.forEach((slide, slideIndex) => {
            const isActive =
                slideIndex === currentSlide;
            slide.style.opacity =
                isActive ? "1" : "0";
            slide.style.pointerEvents =
                isActive ? "auto" : "none";
            slide.style.zIndex =
                isActive ? "10" : "5";
        });

        /* PUNTOS */
        dots.forEach((dot, dotIndex) => {
            dot.style.opacity =
                dotIndex === currentSlide
                    ? "1"
                    : "0.4";
        });
        adjustBannerHeight();
    }

    /* PUNTOS */
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
        });
    });

    /* SLIDE INICIAL */
    showSlide(0);


    /* CARGA INICIAL */
    window.addEventListener("load", () => {
        adjustBannerHeight();
    });


    /* CAMBIO DE TAMAÑO */
    window.addEventListener("resize", () => {

        adjustBannerHeight();

    });
});

/* SEGUNDO BANNER DE PERÚ*/