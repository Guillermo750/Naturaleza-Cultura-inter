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



/* FUNCIÓN DEL CAROUSEL CON LAS FLECHAS */
/* document.addEventListener("DOMContentLoaded", function () {
    const carouselBody = document.getElementById("carousel");
    if (!carouselBody) return;

    const container = document.getElementById("image");
    const slides = carouselBody.querySelectorAll(".carousel-slide");
    const prevBtn = container.querySelector(".carousel-prev");
    const nextBtn = container.querySelector(".carousel-next");

    let currentIndex = 0;
    const totalSlides = slides.length; // 5 tarjetas

    function updateCarousel() {
        const isDesktop = window.innerWidth >= 768;
        const visibleSlides = isDesktop ? 3 : 1;
        const maxIndex = totalSlides - visibleSlides; // Índice máximo (2 en PC)

        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 0) currentIndex = 0;

        // Desplaza las tarjetas de forma porcentual exacta
        const offset = -currentIndex * (100 / visibleSlides);
        carouselBody.style.transform = `translateX(${offset}%)`;

        // Control visual de los botones
        if (prevBtn) prevBtn.style.opacity = currentIndex === 0 ? "0.3" : "1";
        if (nextBtn) nextBtn.style.opacity = currentIndex >= maxIndex ? "0.3" : "1";
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            const isDesktop = window.innerWidth >= 768;
            const visibleSlides = isDesktop ? 3 : 1;
            const maxIndex = totalSlides - visibleSlides;

            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
    }

    window.addEventListener("resize", updateCarousel);
    updateCarousel();
}); */