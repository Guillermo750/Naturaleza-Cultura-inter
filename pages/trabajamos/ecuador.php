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
        <section class="py-12 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Grid principal de la página (Menú lateral + Contenido) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                    border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                    <a href="" class="block transition-colors font-semibold">Resumen</a>
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
        </section>
        
        <!-- Contenedor Plataforma Amazónica -->
        <section class="relative w-full pb-12 md:pb-16 overflow-hidden">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-16 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/ecuador/nci-cp-climate-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/ecuador/nci-country-b-1-climate_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">
                                Plataforma Amazónica por los Bosques, el Clima y el Bienestar Humano
                            </h3>
                        </div>
                        <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                        <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                            La Plataforma Amazónica por los Bosques, el Clima y el Bienestar Humano es una <b>iniciativa regional de gobernanza 
                            colaborativa territorial</b> entre los gobiernos subnacionales y los pueblos y nacionalidades de la Amazonía 
                            ecuatoriana.
                        </p>
                        <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                            Esta propuesta innovadora articula esfuerzos para <b>conservar y gestionar más de 5 millones de hectáreas del bosque 
                            continuo más grande del Ecuador, a escala provincial y de paisaje,</b> e impulsar medios de vida sostenibles.
                        </p>
                        <p class="text-[16px] font-medium text-[rgb(72,81,79)]">
                            <a href=""> Más información <span class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">
                                aquí </span>
                            </a>
                        </p>
                    </div> 
                </div>
            </div>
        </section>
         
        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto 
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10">
            <div class="relative">
                <!-- Ilustración del jaguar (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/ecuador/nci-cp-illustration2-countryp.webp" alt="" class="absolute -left-7 bottom-0 w-36 
                    translate-x-[-55%] hidden md:block z-20" >
                <!-- CONTENEDOR PRINCIPAL -->
                <div id="amazon-banner" class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" style="min-height: 450px;">
                    <!-- BANNER 1 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/ecuador/PAISAJE_MENADROS-RIO-BOBONAZA-2-scaled-1-1920x1080-1-1536x864.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Acciones por la Amazonía</h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora<br>Chinchipe, Morona Santiago, Pastaza</p>
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
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/ecuador/Amazon-Howler.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Construyendo la Plataforma Amazónica</h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora Chinchipe,<br>Morona Santiago, Pastaza</p>
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
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
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
                    <!-- PUNTOS INDICADORES (DOTS) -->
                    <div class="relative flex justify-center gap-2 pt-1 pb-4 z-40 pointer-events-auto md:absolute md:bottom-4 md:left-1/2 
                        md:-translate-x-1/2 md:pt-0 md:pb-0">
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            tyle="opacity: 1;" data-slide="0"></button>
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            style="opacity: 0.4;" data-slide="1"></button>
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white opacity-40 hover:opacity-80 transition-all 
                            cursor-pointer" data-slide="2"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Corredor de Conservación -->
        <section class="relative w-full pb-12 overflow-hidden py-12">
 	        <!-- FONDO DECORATIVO -->
            <div class="absolute -top-36 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)] bg-[url(../../imagenes/ecuador/nci-cp-wild-places-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
	        <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
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
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/ecuador/nci-wild-places_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">Corredor de Conservación Transfronterizo Andino Amazónico</h3>
                        </div>
                        <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                        <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                            El Corredor de Conservación Transfronterizo Andino Amazónico (CCTAA) es una estrategia de conservación promovida por 
                            los gobiernos de Ecuador y Perú, SERNANP, Plan Binacional, Naturaleza y Cultura Internacional, gobiernos subnacionales
                            y otras organizaciones sociales, que conecta los ecosistemas andino-amazónicos del sur de Ecuador y el norte de Perú.
                        </p>
                        <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                            <b>Ubicado en el Hotspot Andes Tropicales,</b> este corredor garantiza la conectividad ecológica que permite el 
                            desplazamiento de especies, el mantenimiento del flujo genético y una mayor resiliencia de los ecosistemas y las 
                            comunidades a la crisis climática.
                        </p>
                        <p class="text-[16px] font-medium text-[rgb(72,81,79)]">
                            <a href=""> Más información <span class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">
                                aquí </span>
                            </a>
                        </p>
                    </div>
                </div> 
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto 
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10">
            <div class="relative">
                <!-- Ilustración del colibrí (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/ecuador/nci-cp-illustration3-countryp.webp" alt="" class="absolute -left-24 bottom-0 w-32 
                    translate-x-[-55%] hidden md:block z-20" >
                <!-- CONTENEDOR PRINCIPAL -->
                <div id="amazon-banner" class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                    <!-- BANNER 1 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/ecuador/Cloud-Forest-Andean-Bear-1.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">BLF Andes Amazónico</h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora<br>Chinchipe, Morona Santiago, Pastaza</p>
                                <p><b>Años:</b> 2024-2029</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                El Proyecto del Fondo de Paisajes Biodiversos del Reino Unido (BLF Andes Amazónico) se desarrolla en Ecuador y 
                                Perú.  Este proyecto se enmarca en las políticas y planes nacionales de desarrollo del Perú y Ecuador y el Plan 
                                Binacional de Desarrollo, aporta directamente a las estrategias y metas nacionales de biodiversidad y de cambio 
                                climático, así como a los planes de vida de los pueblos y nacionalidades indígenas en ambos países.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/ecuador/Amazonian-Platform-YellowFrog-Bird-Gallery-4-1536x864.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">
                                Protección de especies endémicas de anfibios en el Abra de Zamora
                            </h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora Chinchipe</p>
                                <p><b>Años:</b> 2022-2027</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Este proyecto tiene como objetivo proteger y conservar los ecosistemas naturales del Área Clave de Biodiversidad 
                                Abra de Zamora en el sur de Ecuador, que se encuentra dentro de la zona de amortiguamiento norte del Parque 
                                Nacional Podocarpus (PNP).
                            </p>
                        </div>
                    </div>
                    <!-- PUNTOS INDICADORES (DOTS) -->
                    <div class="relative flex justify-center gap-2 pt-1 pb-4 z-40 pointer-events-auto md:absolute md:bottom-4 md:left-1/2 
                        md:-translate-x-1/2 md:pt-0 md:pb-0">
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            tyle="opacity: 1;" data-slide="0"></button>
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            style="opacity: 0.4;" data-slide="1"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Conservación de Fuentes de Agua -->
        <section class="relative w-full pb-12 md:pb-16 overflow-hidden py-20">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/ecuador/nci-cp-water-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                            border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
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
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                            <img src="../../imagenes/ecuador/nci-water_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">
                                    Conservación de Fuentes de Agua
                                </h3>
                            </div>
                            <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                                Trabajamos en estrecha colaboración con la Autoridad Ambiental Nacional para establecer Áreas de Protección Hídrica (APH).
                                proporcionando asistencia técnica y financiera.
                            </p>
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor texto y una imagen a la izquierda del Banner -->
        <section class="w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto 
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10">
            <div class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                <div class="absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                    bg-[url(../../imagenes/ecuador/Palora-Municipal-Conservation-and-Sustainable-Use-Area-_River_Quilicos.webp)]
                    bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8">
                    <!-- Caja de texto interna -->
                    <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                        <h2 class="text-xl uppercase tracking-wider block font-semibold">BLF Andes Amazónico</h2>
                        <div class="text-[16px] leading-relaxed">
                            <p><b>Área de implementación:</b> Zamora<br>Chinchipe</p>
                            <p><b>Años:</b> 2024-2027</p>
                        </div>
                        <p class="text-[16px] leading-relaxed opacity-95">
                            El Proyecto del Fondo de Paisajes Biodiversos del Reino Unido (BLF Andes Amazónico) se desarrolla en Ecuador y 
                            Perú.  Este proyecto se enmarca en las políticas y planes nacionales de desarrollo del Perú y Ecuador y el Plan 
                            Binacional de Desarrollo, aporta directamente a las estrategias y metas nacionales de biodiversidad y de cambio 
                            climático, así como a los planes de vida de los pueblos y nacionalidades indígenas en ambos países.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Bosque Seco -->
        <section class="relative w-full pb-12 md:pb-16 overflow-hidden py-28">
            <!-- FONDO DECORATIVO -->
                <div class="absolute -top-56 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                    bg-[url(../../imagenes/ecuador/nci-cp-species-background.png)]
                    bg-cover bg-center bg-no-repeat z-0">
                </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                            border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
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
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                            <img src="../../imagenes/ecuador/nci-species_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">
                                    Bosque Seco
                                </h3>
                            </div>
                            <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <p class="text-[16px] leading-relaxed text-[rgb(72,81,79)]">
                                Trabajamos para mejorar la resiliencia de los paisajes forestales y el entorno socio ecológico para las comunidades 
                                locales que viven en las áreas de intervención en el Bosque Seco del Sur.
                            </p>
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor texto y una imagen a la izquierda del Banner -->
        <section class="w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto 
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10">
            <div class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                <div class="absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                    bg-[url(../../imagenes/ecuador/Dry-Forest-in-Bloom-copy-2.webp)]
                    bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8">
                    <!-- Caja de texto interna -->
                    <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                        <h2 class="text-xl uppercase tracking-wider block font-semibold">Programa BOS+ DGD</h2>
                        <div class="text-[16px] leading-relaxed">
                            <p><b>Área de implementación:</b>  Loja</p>
                            <p><b>Años:</b> 2022-2026</p>
                        </div>
                        <p class="text-[16px] leading-relaxed opacity-95">
                            El proyecto promueve la conservación efectiva de los bosques mediante su uso sostenible y la implementación de 
                            prácticas agroforestales diversificadas que previenen la deforestación y fortalecen la resiliencia frente a la crisis 
                            climática. También impulsa la restauración con especies nativas y el intercambio de saberes entre jóvenes y 
                            comunidades, fortaleciendo las capacidades locales y la valoración de los bosques tropicales.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Otras iniciativas -->
        <section class="relative w-full pb-12 md:pb-16 overflow-hidden py-12">
            <!-- FONDO DECORATIVO -->
                <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                    bg-[url(../../imagenes/ecuador/nci-cp-people-background.png)]
                    bg-cover bg-center bg-no-repeat z-0">
                </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 1. MENÚ LATERAL IZQUIERDO (Actualizado a "¿Qué hacemos?" activo) -->
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
                        <a href="" class="block transition-colors">¿Qué hacemos?</a>
                        <a href="" class="block transition-colors">Noticias y eventos</a>
                        <a href="" class="block transition-colors">Publicaciones</a>
                        <a href="" class="block transition-colors">Socios locales</a>
                        <a href="" class="block transition-colors">Equipo</a>
                    </aside>
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/ecuador/nci-people_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">Otras iniciativas</h3>
                        </div>
                        <img src="../../imagenes/ecuador/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                    </div> 
                </div>
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto 
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10">
            <div class="relative">
                <!-- CONTENEDOR PRINCIPAL -->
                <div id="amazon-banner" class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                    <!-- BANNER 1 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/ecuador/5-1536x1152.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Fortalecimiento de capacidades para la conservación 
                                de ecosistemas a través del establecimiento y manejo de reservas naturales, el ordenamiento territorial y otras 
                                estrategias complementarias de conservación</h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Pastaza, Zamora Chinchipe, Morona Santiago, Azuay, Loja</p>
                                <p><b>Años:</b> 2024-2028</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Impulsamos la creación y gestión participativa de áreas de conservación en el sur del Ecuador y la Amazonía, 
                                fortaleciendo la conectividad del Sistema Nacional de Áreas Protegidas y la protección de fuentes de agua que 
                                abastecen a comunidades locales. A través del trabajo conjunto con autoridades ambientales y gobiernos locales, 
                                promueve planes de manejo sostenibles que aseguran el bienestar de la naturaleza y las personas.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/ecuador/FRL_0002-1536x1020.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Establecimiento y manejo de áreas criticas para la 
                                conservación</h2>
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Morona Santiago, Azuay, Zamora Chinchipe, Loja, El Oro</p>
                                <p><b>Años:</b> 2024-2025</p>
                            </div>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                El proyecto apoya a la Autoridad Ambiental Nacional y a los gobiernos locales en la creación y gestión de áreas 
                                protegidas y otras medidas de conservación. Estas acciones fortalecen la conectividad del Sistema Nacional de 
                                Áreas Protegidas y contribuyen a proteger las fuentes de agua para consumo humano, mediante planes de manejo 
                                participativos y sostenibles impulsados por los GADs parroquiales, municipales y provinciales.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 3 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/ecuador/SF-FieldStaion.webp)] bg-cover bg-center bg-no-repeat flex items-center p-4 
                        sm:p-6 md:p-8" style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="w-full md:w-7/12 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Estaciones científicas</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Naturaleza y Cultura Internacional gestiona la Estación Científica San Francisco y la Estación Científica Laipuna.
                                El mayor programa de investigación sobre el bosque tropical de montaña tiene su sede en la Estación San Francisco,
                                financiada con recursos de la Fundación Alemana para la Investigación Científica (DFG).
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 4 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/ecuador/RESTAURACION_MAYCU_PIC2-1536x864.webp)] bg-cover bg-center bg-no-repeat flex items-center 
                        p-4 sm:p-6 md:p-8" style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="w-full md:w-7/12 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">Reservas Naturales</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Conservamos y administramos 8 reservas naturales (Cazaderos, La Ceiba, Numbala, San Francisco, Pisaca, 
                                Jamboé, Maycú, Laipuna) que protegen hábitats de especies amenazadas. En la Amazonía tenemos una 
                                reserva que protege a la Tangara de garganta naranja <em>(Wetmorethraupis sterrhopteron) </em> conocida por 
                                habitar en áreas muy remotas de Ecuador.
                            </p>
                        </div>
                    </div>
                    <!-- PUNTOS INDICADORES (DOTS) -->
                    <div class="relative flex justify-center gap-2 pt-1 pb-4 z-40 pointer-events-auto md:absolute md:bottom-4 md:left-1/2 
                        md:-translate-x-1/2 md:pt-0 md:pb-0">
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            tyle="opacity: 1;" data-slide="0"></button>
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            style="opacity: 0.4;" data-slide="1"></button>
                        <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white opacity-40 hover:opacity-80 transition-all 
                            cursor-pointer" data-slide="2"></button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contenedor -->
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
                                NOTICIAS Y EVENTOS
                            </h2>
                            <img src="../../imagenes/ecuador/linea03.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                No te pierdas las últimas noticias, historias y eventos de Naturaleza y Cultura Internacional en Ecuador.
                            </p>
			                <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                            hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                                <span class="text-sm">Ver todas las noticias</span>
                            </a>
                        </div>
                    </div>
                    <!-- Bloque Estadísticas  -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-[16px] items-stretch">
                        <!-- Tarjeta 1 -->
                         <div class="flex flex-col items-start w-full h-full">
                            <img src="../../imagenes/ecuador/SalidaOrellana2024_32-350x262.webp" class="w-full h-44 md:h-48 object-cover rounded-2px" alt="">
                            <a href=""><h3 class="text-2xl font-semibold text-[rgb(72,81,79)] hover:text-[rgb(31,72,34)] mt-4">
                                Una carrera para descubrir y conservar el territorio de Orellana
                            </h3></a>
                            <div class="flex flex-wrap items-center gap-3 mt-4">
                                <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                                <span class="text-[11px] text-[rgb(31,72,34)]">ECUADOR</span>
                            </div>
                        </div> 
                        <!-- Tarjeta 2 -->
                        <div class="flex flex-col items-start w-full h-full">
                            <img src="../../imagenes/ecuador/P6280015-scaled-e1790695782515-350x163.jpg" 
                                class="w-full h-44 md:h-48 object-cover rounded-2px" alt="">
                            <a href=""><h3 class="text-2xl font-semibold text-[rgb(72,81,79)] hover:text-[rgb(31,72,34)] mt-4">
                                El Abra de Zamora es el sitio donde más especies nuevas de anfibios se han descrito en Ecuador
                            </h3></a>
                            <div class="flex flex-wrap items-center gap-3 mt-4">
                                <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                                <span class="text-[11px] text-[rgb(31,72,34)]">ECUADOR</span>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="flex flex-col items-start w-full h-full">
                            <img src="../../imagenes/ecuador/PARQUE-NACIONAL-YACURI-1-NCI-350x233.png" 
                                class="w-full h-44 md:h-48 object-cover rounded-2px" alt="">
                            <a href=""><h3 class="text-2xl font-semibold text-[rgb(72,81,79)] hover:text-[rgb(31,72,34)] mt-4">
                                    Conocer para conservar: monitoreo en el Corredor de Conectividad Podocarpus Yacuri
                            </h3></a>
                            <div class="flex flex-wrap items-center gap-3 mt-4">
                                <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                                <span class="text-[11px] text-[rgb(31,72,34)]">ECUADOR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>