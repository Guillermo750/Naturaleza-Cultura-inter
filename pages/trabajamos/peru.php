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
    <title>Perú</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/peru/20220310-P1012343-1-scaled-1.webp)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">
            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left text-white">
                    <!-- TÍTULO -->
                    <h1 class="text-5xl font-semibold tracking-wide py-6">PERÚ</h1>
                    <!-- Texto -->
                    <p class="text-[16px] leading-relaxed">Conservamos paisajes biológicamente diversos en América Latina, en 
                        acuerdo con las culturas locales y los gobiernos locales.
                    </p>
                </div>
            </div>
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/peru/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor ¿DÓNDE TRABAJAMOS? -->
        <section class="w-full max-w-5xl mx-auto py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- 1. MENÚ LATERAL IZQUIERDO (Ocupa 3 columnas en pantallas grandes) -->
                <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
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
                            <h2 class="text-3xl tracking-tight">¿DÓNDE TRABAJAMOS?</h2>
                            <img src="../../imagenes/peru/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                <b>Trabajamos en los lugares más biodiversos del planeta.</b>
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                Nuestros esfuerzos están enfocados en conectar grandes territorios, que hemos organizado en “mosaicos” que nos 
                                ayudan a identificar áreas de conectividad por su importancia biológica, ecosistémica y cultural en América Latina.
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                En Perú, trabajamos en cuatro Mosaicos: Andes del Norte, Bosques Secos del Marañón, Carpish-Río Abiseo y 
                                Nanay-Tigre. 
                            </p>
                        </div>
                        <!-- Imagen / Mapa -->
                        <div class="md:col-span-5 w-96 h-80 overflow-hidden">
                            <img src="../../imagenes/peru/mapa.png" alt="Mapa de áreas de trabajo en Perú" class="w-full h-full 
                                object-cover">
                        </div>
                    </div>
                    <!-- Bloque Estadísticas  -->
                    <div class="bg-[rgb(31,72,34)] text-white p-6 md:p-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-[16px]">
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon1.webp" alt="Icono Bosque" 
                                class="w-8 h-8 mb-2 ">
                            <span class="block mb-1">2.4 millones</span>
                            <span class="uppercase tracking-wider">de HECTÁREAS PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon1.webp" alt="Icono Mano ssujetando planta" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">1 mil</span>
                            <span class="uppercase tracking-wider">millones de toneladas de CARBONO ALMACENADO</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon1.webp" alt="Icono Gota de Agua" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">27</span>
                            <span class="uppercase tracking-wider">FUENTES DE AGUA 
                                PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/ecuador/nci-country-impact-icon1.webp" alt="Icono Mano" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">7</span>
                            <span class="uppercase tracking-wider">CULTURAS LOCALES</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor ¿QUÉ HACEMOS? -->
        <section class="md:pt-8 pb-16 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
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
                            <img src="../../imagenes/peru/nci-cp-illustration1-countryp.webp" alt="flor" 
                                class="hidden md:block h-auto w-20 absolute right-0 -mt-6">
                        </div>
                        <img src="../../imagenes/ecuador/linea_02.png" alt="Línea decorativa" class="h-17 w-24 mt-3 pb-6">
                        <p class="text-[16px] leading-relaxed">
                            Naturaleza y Cultura Internacional se centra en cinco áreas estratégicas complementarias: clima, paisajes naturales, 
                            agua, especies y personas.
                        </p>
                        <p class="text-[16px] leading-relaxed">
                            Los gobiernos y las comunidades locales en Perú están motivados para proteger su entorno, pero a menudo enfrentan 
                            barreras financieras, técnicas y legales. En Naturaleza y Cultura, contamos con un equipo dedicado de expertos que 
                            trabajan para superar estas barreras colaborando directamente con las comunidades locales y los gobiernos para crear 
                            áreas protegidas con planes de gestión sostenible a largo plazo.
                        </p>
                        <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                            hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                            <span class="text-sm">Nuestro proceso</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Plataforma Amazónica -->
        <section class="relative w-full py-12 overflow-hidden">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-16 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/peru/nci-cp-climate-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/peru/nci-country-b-1-climate_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">CLIMA</h3>
                        </div>
                        <img src="../../imagenes/peru/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                    </div> 
                </div>
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] md:ml-auto
            lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 mt-8 sm:mt-8 md:-mt-16 lg:-mt-6 md:mb-20 lg:mb-20">
            <div class="relative">
		        <!-- Ilustración del jaguar (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/peru/nci-cp-illustration2-countryp.webp" alt="" class="absolute -left-7 bottom-0 w-36 
                    translate-x-[-55%] hidden md:block z-20" >
                <!-- CONTENEDOR PRINCIPAL -->
                <div id="blf-banner4" class="relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="blf-banner-slide4 relative md:absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/peru/Chaupe-29-1_peru_michell-Leon-1536x1025.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">ALMACENAMIENTO DE CARBONO</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                Hemos apoyado la creación de reservas en ecosistemas conocidos por su gran capacidad de almacenamiento de carbono, como el páramo, el bosque nuboso y la Amazonía. Estas reservas funcionan como grandes almacenamientos de carbono que ayudan a mitigar el cambio climático y mantener ecosistemas saludables. Al proteger estas áreas y detener la deforestación y la degradación forestal, Naturaleza y Cultura Internacional ha evitado que se liberen a la atmósfera más de mil millones de toneladas de carbono.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="blf-banner-slide4 absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/peru/IMG_0262ok_peru_huanuco-scaled-1-1536x1024.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">RESTAURACION</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Naturaleza y Cultura Internacional trabaja con las comunidades y gobiernos locales en la recuperación y restauración de los bosques montañosos de Piura, Cajamarca y la Amazonía. Al apoyar viveros forestales comunales y plantar especies nativas con la ayuda de las comunidades locales, nuestro trabajo contribuye directamente a la mitigación del cambio climático.
                            </p>
                        </div>
                    </div>
                   <!-- PUNTOS INDICADORES (DOTS) -->
                    <div class="relative flex justify-center gap-2 pt-1 pb-4 z-40 pointer-events-auto md:absolute md:bottom-4 md:left-1/2 
                        md:-translate-x-1/2 md:pt-0 md:pb-0">
                        <button class="blf-banner-dot4 w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            tyle="opacity: 1;" data-slide="0"></button>
                        <button class="blf-banner-dot4 w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            style="opacity: 0.4;" data-slide="1"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>