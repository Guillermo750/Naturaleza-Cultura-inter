<!-- MENÚ -->
<nav class="sticky top-0 left-0 right-0 z-50 bg-white flex justify-around pb-4 pt-3">
    <div class="flex">
        <a href="/pages/principal.php"><img src="/logo/logoespanol.png" alt="Naturaleza y Cultura Internacional" class="w-36"></a>
    </div>
    <div class="flex items-center  space-x-4 w-2/1 font-semibold text-[rgb(72,81,79)] text-[14px] -mt-6">
        <div class="relative group">
            <span>
                <a href="#" class="relative inline-block py-3 px-2">QUÉ HACEMOS
                    <img src="/imagenes/imagenes_principal/linea_rosa_06.png" class="absolute left-0 top-full w-20 h-auto opacity-0 
                    group-hover:opacity-100 transition-opacity duration-200"alt="Línea rosa">
                </a>
            </span>
            <div class="absolute left-0 top-full mt-3 z-50 w-300px bg-white opacity-0 invisible translate-y-1 transition-all 
                duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                <!-- Color de fondo bg-[rgb(195,214,219)] Y texto en blanco cuando estés dentro del enlace indicando donde estás -->
                <a href="/pages/hacemos/bosques.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)]
                <?= basename($_SERVER['PHP_SELF']) === 'bosques.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BOSQUES</a>
                <a href="/pages/hacemos/biodiversidad.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'biodiversidad.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BIODIVERSIDAD</a>
                <a href="/pages/hacemos/clima.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'clima.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">CLIMA</a>
                <a href="/pages/hacemos/comunidades.php" class="block px-6 py-3 text-[14px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'comunidades.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">COMUNIDADES LOCALES</a>
                <a href="/pages/hacemos/fuentes_agua.php" class="block px-6 py-3 text-[14px] leading-[1.4] tracking-[1.5px] 
                text-[rgb(72,81,79)] hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'fuentes_agua.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">FUENTES DE 
                AGUA Y SEGURIDAD HÍDRICA</a>
            </div>
        </div>
        <div class="relative group">
            <span>
                <a href="#" class="relative inline-block py-3 px-2">NUESTRO IMPACTO
                    <img src="/imagenes/imagenes_principal/linea_rosa_06.png"class="absolute left-0 top-full w-20 h-auto opacity-0 
                    group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
                </a>
            </span>
            <div class="absolute left-0 top-full mt-3 z-50 w-300px bg-white opacity-0 invisible translate-y-1 transition-all 
                duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                <!-- Color de fondo bg-[rgb(195,214,219)] Y texto en blanco cuando estés dentro del enlace indicando donde estás -->
                <a href="/pages/impacto/conservacion.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'conservacion.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Iniciativas de Conservación</a>
                <a href="/pages/impacto/historias.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'historias.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Noticias e Historias</a>
                <a href="/pages/impacto/años.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'años.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">30 Años</a>
            </div>
        </div>
        <div class="relative group">
            <span>
                <a href="#" class="relative inline-block py-3 px-2">QUIÉNES SOMOS
                    <img src="/imagenes/imagenes_principal/linea_rosa_06.png"class="absolute left-0 top-full w-20 h-auto opacity-0 
                    group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
                </a>
            </span>
            <div class="absolute left-0 top-full mt-3 z-50 w-300px bg-white opacity-0 invisible translate-y-1 transition-all 
                duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                <!-- Color de fondo bg-[rgb(195,214,219)] Y texto en blanco cuando estés dentro del enlace indicando donde estás -->
                <a href="/pages/somos/vision.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'vision.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestro enfoque y visión </a>
                <a href="/pages/somos/equipo.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200 uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'equipo.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestro equipo</a>
                <a href="/pages/somos/directiva.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'directiva.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Nuestra Junta Directiva</a>
                <a href="/pages/somos/nostros.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'nostros.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">Trabaja con nosotros</a>
            </div>
        </div>
        <div class="relative group">
            <span>
                <a href="#" class="relative inline-block py-3 px-2">DÓNDE TRABAJAMOS
                    <img src="/imagenes/imagenes_principal/linea_rosa_06.png"class="absolute left-0 top-full w-20 h-auto opacity-0 
                    group-hover:opacity-100 transition-opacity duration-200" alt="Línea rosa">
                </a>
            </span>
            <div class="absolute left-0 top-full mt-3 z-50 w-300px bg-white opacity-0 invisible translate-y-1 transition-all 
                duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                <!-- Color de fondo bg-[rgb(195,214,219)] Y texto en blanco cuando estés dentro del enlace indicando donde estás -->
                <a href="/pages/trabajamos/ecuador.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
                hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'ecuador.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">ECUADOR</a>
                <a href="/pages/trabajamos/peru.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200 uppercase
                <?= basename($_SERVER['PHP_SELF']) === 'peru.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">PERÚ</a>
                <a href="/pages/trabajamos/mexico.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase 
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'mexico.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">MÉXICO</a>
                <a href="/pages/trabajamos/colombia.php" class="block px-6 py-3 text-[15px] tracking-[1.5px] text-[rgb(72,81,79)] uppercase
                hover:bg-[rgb(195,214,219)] hover:text-[rgb(15,125,63)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'colombia.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">COLOMBIA</a>
                <a href="/pages/trabajamos/bolivia.php" class="block px-6 py-3 text-[15px] leading-[1.4] tracking-[1.5px] uppercase
                text-[rgb(72,81,79)] hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)] transition-colors duration-200
                <?= basename($_SERVER['PHP_SELF']) === 'bolivia.php'
                    ? '!bg-[rgb(176,190,175)] !text-white'
                    : '' 
                ?>">BOLIVIA</a>
            </div>
        </div>
    </div>
    <div class="flex items-center space-x-4 shrink-0">
        <!-- Botón Dona Aquí -->
        <a href="#" class="bg-[rgb(245,131,32)] text-black px-10 py-3 rounded-full hover:bg-[rgb(243,119,130)] font-bold -mt-6">
            <span>Dona Aquí</span>
        </a>
        <!-- Bloque Contáctanos e Idioma a la DERECHA del botón -->
        <div class="flex items-center space-x-4 text-sm text-[rgb(72,81,79)] -mt-6">
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