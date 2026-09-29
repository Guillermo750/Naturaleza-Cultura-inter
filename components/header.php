<!-- MENÚ -->
<nav class="sticky top-0 left-0 right-0 z-50 bg-white flex flex-wrap md:flex-nowrap justify-between md:justify-between items-center px-4 
    md:px-6 py-4">
    <!-- BLOQUE 1: LOGOTIPO -->
    <div class="flex items-center shrink-0 md:order-1">
        <a href="/pages/principal.php"><img src="/logo/logoespanol.png" alt="Naturaleza y Cultura Internacional" class="w-28 sm:w-36"></a>
    </div>
    <!-- BOTÓN DE HAMBURGUESA MÓVIL (Circular, verde, centrado) -->
    <button id="hamburger-btn" class="flex md:hidden items-center justify-center w-12 h-12 rounded-full bg-[rgb(31,72,34)] 
        text-white text-xl focus:outline-none transition-transform active:scale-95 ml-2 sm:ml-4" aria-label="Abrir menú">
        ☰
    </button>
    <!-- BLOQUE 2: MENÚ DE ENLACES PRINCIPALES -->
    <div id="mobile-menu" class="hidden md:flex flex-col md:flex-row items-center w-full md:w-auto order-3 md:order-2 mt-4 md:mt-0 
        space-y-4 md:space-y-0 md:space-x-4">
        <!-- SUBMENÚ 1: QUÉ HACEMOS -->
        <div class="relative group w-full md:w-auto text-center md:text-left">
            <button class="menu-accordion-btn w-full md:w-auto relative inline-block py-3 px-2 focus:outline-none uppercase
            text-[rgb(72,81,79)]"> QUÉ HACEMOS
                <img src="/imagenes/imagenes_principal/linea_rosa_06.png" class="hidden md:block absolute left-0 top-full w-20 
                h-auto opacity-0 group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
            </button>
            <div class="submenu-list md:absolute left-0 top-full mt-1 md:mt-3 z-50 w-full md:w-75 bg-white hidden md:block 
                md:opacity-0 md:invisible md:translate-y-1 md:transition-all md:duration-200 md:group-hover:opacity-100 md:group-hover:visible 
                md:group-hover:translate-y-0">
                <!-- Color de fondo bg-[rgb(195,214,219)] Y texto en blanco cuando estés dentro del enlace indicando donde estás -->
                <a href="/pages/hacemos/bosques.php" class="block px-2.5 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)]
                <?= basename($_SERVER['PHP_SELF']) === 'bosques.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BOSQUES</a>
                <a href="/pages/hacemos/biodiversidad.php" class="block px-2.5 py-3 text-[13px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'biodiversidad.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BIODIVERSIDAD</a>
                <a href="/pages/hacemos/clima.php" class="block px-2.5 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'clima.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">CLIMA</a>
                <a href="/pages/hacemos/comunidades.php" class="block px-2.5 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'comunidades.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">COMUNIDADES LOCALES</a>
                <a href="/pages/hacemos/fuentes_agua.php" class="block px-2.5 py-3 text-[14px] leading-[1.4] tracking-[1.5px] 
                text-[rgb(72,81,79)] hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'fuentes_agua.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">FUENTES DE AGUA Y SEGURIDAD HÍDRICA</a>
            </div>
        </div>

        <!-- SUBMENÚ 2: NUESTRO IMPACTO -->
        <div class="relative group w-full md:w-auto text-center md:text-left">
            <button class="menu-accordion-btn w-full md:w-auto relative inline-block py-3 px-2 focus:outline-none uppercase 
                text-[rgb(72,81,79)]">NUESTRO IMPACTO
                <img src="/imagenes/imagenes_principal/linea_rosa_06.png" class="hidden md:block absolute left-0 top-full w-20 h-auto opacity-0 
                group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
            </button>
            <div class="submenu-list md:absolute left-0 top-full mt-1 md:mt-3 z-50 w-full md:w-75 bg-white hidden md:block md:opacity-0 
                md:invisible md:translate-y-1 md:transition-all md:duration-200 md:group-hover:opacity-100 md:group-hover:visible 
                md:group-hover:translate-y-0">
                <a href="/pages/impacto/conservacion.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'conservacion.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Iniciativas de Conservación</a>
                <a href="/pages/impacto/historias.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'historias.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Noticias e Historias</a>
                <a href="/pages/impacto/años.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'años.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">30 Años</a>
            </div>
        </div>

        <!-- SUBMENÚ 3: QUIÉNES SOMOS -->
        <div class="relative group w-full md:w-auto text-center md:text-left">
            <button class="menu-accordion-btn w-full md:w-auto relative inline-block py-3 px-2 focus:outline-none uppercase text-[rgb(72,81,79)]">
                QUIÉNES SOMOS
                <img src="/imagenes/imagenes_principal/linea_rosa_06.png" class="hidden md:block absolute left-0 top-full w-20 h-auto opacity-0 
                group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
            </button>
            <div class="submenu-list md:absolute left-0 top-full mt-1 md:mt-3 z-50 w-full md:w-75 bg-white hidden md:block md:opacity-0 
                md:invisible md:translate-y-1 md:transition-all md:duration-200 md:group-hover:opacity-100 md:group-hover:visible 
                md:group-hover:translate-y-0">
                <a href="/pages/somos/vision.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'vision.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestro enfoque y visión </a>
                <a href="/pages/somos/equipo.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200 uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'equipo.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestro equipo</a>
                <a href="/pages/somos/directiva.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'directiva.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestra Junta Directiva</a>
                <a href="/pages/somos/nosotros.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'nostros.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Trabaja con nosotros</a>
            </div>
        </div>
        
        <!-- SUBMENÚ 4: DÓNDE TRABAJAMOS -->
        <div class="relative group w-full md:w-auto text-center md:text-left">
            <button class="menu-accordion-btn w-full md:w-auto relative inline-block py-3 px-2 focus:outline-none uppercase text-[rgb(72,81,79)]">
                DÓNDE TRABAJAMOS
                <img src="/imagenes/imagenes_principal/linea_rosa_06.png" class="hidden md:block absolute left-0 top-full w-20 h-auto opacity-0 
                group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
            </button>
            <div class="submenu-list md:absolute left-0 top-full mt-1 md:mt-3 z-50 w-full md:w-75 bg-white hidden md:block md:opacity-0 
                md:invisible md:translate-y-1 md:transition-all md:duration-200 md:group-hover:opacity-100 md:group-hover:visible 
                md:group-hover:translate-y-0">
                <a href="/pages/trabajamos/ecuador.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'ecuador.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">ECUADOR</a>
                <a href="/pages/trabajamos/peru.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200 uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'peru.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">PERÚ</a>
                <a href="/pages/trabajamos/mexico.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'mexico.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">MÉXICO</a>
                <a href="/pages/trabajamos/colombia.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'colombia.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">COLOMBIA</a>
                <a href="/pages/trabajamos/bolivia.php" class="block px-6 py-3 text-[14px] leading-[1.4] tracking-[1.5px] uppercase
                text-[rgb(72,81,79)] hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'bolivia.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BOLIVIA</a>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-4 shrink-0  ml-2 sm:ml-4 md:order-3">
        <!-- Botón Dona Aquí: Ajustado de forma fluida para móvil y portátil -->
        <a href="#" class="bg-[rgb(245,131,32)] text-black px-4 sm:px-10 py-2.5 sm:py-3 rounded-full hover:bg-[rgb(243,119,130)] 
            font-bold transition-all text-base sm:text-base"><span>Dona Aquí</span></a>
        <!-- Bloque Contáctanos e Idioma a la DERECHA del botón -->
        <div class="hidden md:flex items-center space-x-4 text-sm text-[rgb(72,81,79)] -mt-6">
            <a href="#" class="hover:underline">Contáctanos</a>
            <span>|</span>

            <div class="relative group cursor-pointer">
                <div class="flex items-center space-x-1 gap-2">
                    <img class="w-4 h-4 object-contain" src="/imagenes/imagenes_principal/imagen02.png" alt="Bandera de España" />
                    <span>Español</span>
                </div>
                <!-- Poner al borde de la lista depegable un color [rgb(51, 87, 63)] -->
                <div class="absolute right-0 -mr-2 top-full hidden group-hover:block w-24 bg-white text-black px-1.5 py-1 z-50 
                    border-2 border-[rgb(51,87,63)] bg-clip-padding rounded-sm p-2">
                    <a href="#" class="flex items-center space-x-2 py-1 px-1 gap-1.5 hover:text-[#d86a0a] text-11px  font-normal">
                        <img class="w-3.5 h-3.5 object-contain" src="/imagenes/imagenes_principal/imagen01.png" alt="Bandera de Inglaterra" />
                        <span>English</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 py-1 px-1 gap-1.5 hover:text-[#d86a0a] text-11 font-normal">
                        <img class="w-3.5 h-3.5 object-contain" src="/imagenes/imagenes_principal/imagen02.png" alt="Bandera de España" />
                        <span>Español</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>