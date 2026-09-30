<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para poner icono al html -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <!-- Link para poner llamar a las clases Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- LLamar al js -->
    <script defer src="../../js/app.js"></script>
    <title>Ecuador</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/ecuador/Andes-mountains.webp)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide py-6">Ecuador</h1>
                    <!-- Texto -->
                    <p class="text-white text-lg md:text-xl font-medium">Conservamos paisajes biológicamente diversos en América Latina, 
                        en acuerdo con las culturas locales para el bienestar del planeta.
                    </p>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/ecuador/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor ¿DÓNDE TRABAJAMOS? -->
        <section class="w-full max-w-5xl mx-auto py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- 1. MENÚ LATERAL IZQUIERDO (Ocupa 3 columnas en pantallas grandes) -->
                <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider font-semibold
                    text-[rgb(31,72,34)] pt-2 border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                    <!-- Opción Activa (Con su marquita naranja característica en el borde) -->
                    <a href="" class="block relative">
                        <span class="absolute -left-4.25 top-0 bottom-0 w-0.75 border-[rgb(245,131,32)]"></span>
                        Resumen
                    </a>
                    <!-- Resto de opciones del menú -->
                    <a href="" class="block transition-colors">¿Qué hacemos?</a>
                    <a href="" class="block transition-colors">Noticias y eventos</a>
                    <a href="" class="block transition-colors">Publicaciones</a>
                    <a href="" class="block transition-colors">Socios locales</a>
                    <a href="" class="block transition-colors">Equipo</a>
                </aside>
                <!-- 2. CONTENIDO PRINCIPAL (Ocupa 9 columnas en pantallas grandes) -->
                <div class="lg:col-span-9 space-y-12">
                    <!-- Bloque ¿Dónde trabajamos? + Mapa + Estadísticas -->
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
                        <!-- Textos explicativos -->
                        <div class="md:col-span-7 space-y-4 text-[rgb(72,81,79)]">
                            <h2 class="text-3xl tracking-tight">
                                ¿DÓNDE TRABAJAMOS?
                            </h2>
                            <img src="../../imagenes/ecuador/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                En Ecuador, enfocamos nuestros esfuerzos en la Amazonía y en el sur del país, protegiendo sitios críticos para la 
                                biodiversidad, reservas de carbono y recursos hídricos para las generaciones presentes y futuras.
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                Hemos identificado cuatro programas de escalamiento para proteger y gestionar ecosistemas de manera integral: 
                                <b>Corredor de Conservación Transfronterizo Andino Amazónico, Plataforma Amazónica por los Bosques, el Clima y 
                                el Bienestar Humano, Conservación de Fuentes de Agua y Bosque Seco.</b>
                            </p>
                        </div>
                        <!-- Imagen / Mapa -->
                        <div class="md:col-span-5 w-full h-80 rounded-lg overflow-hidden">
                            <img src="" alt="Mapa de áreas de trabajo en Ecuador" class="w-full h-full 
                                object-cover">
                        </div>
                    </div>
                    <!-- Bloque Estadísticas  -->
                    <div class="bg-[rgb(31,72,34)] text-white p-6 md:p-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-[16px]">
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon1.webp" alt="Icono Bosque" 
                                class="w-8 h-8 mb-2 ">
                            <span class="block mb-1">5 millones</span>
                            <span class="uppercase tracking-wider">de HECTÁREAS PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon2.webp" alt="Icono Mano ssujetando planta" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">2.5 mil</span>
                            <span class="uppercase tracking-wider">millones de toneladas de CARBONO ALMACENADO</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon3.webp" alt="Icono Gota de Agua" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">2.4 millones</span>
                            <span class="uppercase tracking-wider">de personas beneficiadas por FUENTES DE AGUA 
                                PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon4.webp" alt="Icono Mano" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">6</span>
                            <span class="uppercase tracking-wider">CULTURAS LOCALES</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor ¿QUÉ HACEMOS? -->
        <section class="w-full py-12">
            <!-- Contenedor global alineado con max-w-5xl y los mismos paddings -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <!-- Grid principal de la página (Menú lateral + Contenido) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider font-semibold text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors">Resumen</a>
                        <a href="" class="block transition-colors">¿Qué hacemos?</a>
                        <!-- Submenú sutil alineado y con sangría para no recargar -->
                        <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                            <a href="#plataforma-amazonica" class="block transition-colors">Plataforma Amazónica</a>
                            <a href="#corredor-andino" class="block transition-colors">Corredor Transfronterizo</a>
                            <a href="#fuentes-agua" class="block transition-colors">Fuentes de Agua</a>
                            <a href="#bosque-seco" class="block transition-colors">Bosque Seco</a>
                            <a href="#otras-iniciativas" class="block transition-colors">Otras Iniciativas</a>
                        </div>
                        <a href="" class="block transition-colors">Noticias y eventos</a>
                        <a href="" class="block transition-colors">Publicaciones</a>
                        <a href="" class="block transition-colors">Socios locales</a>
                        <a href="" class="block transition-colors">Equipo</a>
                    </aside>
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9">
                        <!-- Encabezado y textos introductorios -->
                        <div class="space-y-4 text-[rgb(72,81,79)]">
                            <div class="relative flex items-start justify-between">
                                <h2 class="text-3xl tracking-tight">¿QUÉ HACEMOS?</h2>  
                                <!-- FLOR DECORATIVA -->
                                <img src="../../imagenes/ecuador/nci-cp-illustration1-countryp.webp" alt="flor" 
                                    class="hidden md:block h-auto w-20 absolute right-0 -mt-6">
                            </div>
                            <img src="../../imagenes/ecuador/linea_02.png" alt="Línea decorativa" class="h-17 w-24 mt-3 pb-6">
                            <p class="text-[16px] leading-relaxed">
                                Conservamos paisajes biológicamente diversos en América Latina, en acuerdo con las culturas locales para el 
                                bienestar del planeta.
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                Nuestra estrategia siempre ha sido asociarnos con las comunidades y gobiernos locales para proteger la 
                                naturaleza. Más del 80% de nuestro personal vive y trabaja en las áreas que protegemos. Como vecinos de 
                                confianza, fomentamos soluciones basadas en la naturaleza que se originan localmente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contenedor Plataforma Amazónica -->
        <section class="w-full pb-12">
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 space-y-4">
                <img src="../../imagenes/ecuador/nci-country-b-1-climate_icon.webp" alt="" class="w-16 h-16 object-contain">
                <div class="flex items-center gap-3">
                    <h3 class="text-2xl text-[rgb(15,125,63)]">
                        Plataforma Amazónica por los Bosques, el Clima y el Bienestar Humano
                    </h3>
                </div>
                <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                    La Plataforma Amazónica por los Bosques, el Clima y el Bienestar Humano es una iniciativa regional de gobernanza 
                    colaborativa territorial entre los gobiernos subnacionales y los pueblos y nacionalidades de la Amazonía 
                    ecuatoriana.
                </p>
                <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                    Esta propuesta innovadora articula esfuerzos para conservar y gestionar más de 5 millones de hectáreas del bosque 
                    continuo más grande del Ecuador, a escala provincial y de paisaje, e impulsar medios de vida sostenibles.
                </p>
                <p class="text-[16px] font-medium text-[rgb(72,81,79)]">
                    <a href=""> Más información <span class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">
                        aquí </span>
                    </a>
                </p>
            </div>
        </section>
         
        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 z-10">
            <div class="relative">
                <!-- Ilustración del jaguar (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/ecuador/nci-cp-illustration2-countryp.webp" alt="" 
                    class="absolute -left-7 bottom-0 w-36 translate-x-[-55%] hidden md:block z-20">
                <!-- CONTENEDOR PRINCIPAL CON EL REDONDEADO RECUPERADO EN TODAS LAS PANTALLAS (rounded-lg) -->
                <div id="amazon-banner" class="relative w-full h-auto min-h-145 sm:min-h-120 md:min-h-112.5" style="min-height: 450px;">
                    <!-- BANNER 1 (Activo por defecto) -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full
                        bg-[url(../../imagenes/ecuador/PAISAJE_MENADROS-RIO-BOBONAZA-2-scaled-1-1920x1080-1-1536x864.jpg.webp)] 
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8" 
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Acciones por la Amazonía</h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora <br>Chinchipe, Morona Santiago, Pastaza</p>
                                <p><b>Años:</b> 2021-2025</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Organizaciones indígenas, sociedad civil, sector privado responsable y otros actores unen esfuerzos en una 
                                agenda común sobre bosques y cambio climático, tanto a nivel nacional como internacional. Juntos 
                                impulsan acciones coordinadas que fortalecen la conservación y promueven un futuro
                                más sostenible para el Ecuador y el planeta.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full
                        bg-[url(../../imagenes/ecuador/Amazon-Howler.webp)] bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 
                        items-center p-4 sm:p-6 md:p-8" style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; 
                        z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Construyendo la Plataforma Amazónica</h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora Chinchipe, <br>Morona Santiago, Pastaza</p>
                                <p><b>Años:</b> 2022-2025</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                La Plataforma Amazónica trabaja para ampliar la protección de los bosques en el sur de la Amazonía 
                                ecuatoriana, para alcanzar 11 millones de hectáreas conservadas. A través de la colaboración entre 
                                pueblos indígenas, gobiernos locales y organizaciones aliadas, impulsa la gestión sostenible del 
                                territorio y la protección de ecosistemas vitales para el clima y el bienestar de las comunidades
                                amazónicas.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 3 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full
                        bg-[url(../../imagenes/ecuador/Untitled-design-51-1536x864.webp)] bg-cover bg-center bg-no-repeat flex items-center p-4 
                        sm:p-6 md:p-8" style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="w-full md:w-7/12 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">
                                Expansión de la Plataforma Amazónica a través de la integración de la Provincia de Orellana
                            </h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Orellana</p>
                                <p><b>Años:</b> 2024-2028</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                El proyecto apoya al Gobierno Provincial de Orellana en la declaración legal de su Área de Conservación 
                                Provincial y en el fortalecimiento de sus capacidades para una gestión sostenible a largo plazo. Con 
                                ello, se busca asegurar la conservación de su valiosa biodiversidad y el bienestar de las comunidades 
                                locales.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PUNTOS INDICADORES (DOTS) -->
                <div class="absolute bottom-1.5 left-1/2 -translate-x-1/2 flex space-x-2 z-40">
                    <button class="banner-dot w-3 h-3 rounded-full bg-white transition-all cursor-pointer" style="opacity: 1;" data-slide="0"></button>
                    <button class="banner-dot w-3 h-3 rounded-full bg-white transition-all cursor-pointer" style="opacity: 0.4;" data-slide="1"></button>
                    <button class="banner-dot w-3 h-3 rounded-full bg-white opacity-40 hover:opacity-80 transition-all cursor-pointer" data-slide="2"></button>
                </div>
            </div>
        </section>

        
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>