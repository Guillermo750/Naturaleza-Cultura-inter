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
    <title>Bolivia</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/bolivia/Incahuasi-2-scaled-1.jpeg.webp)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">
            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left text-white">
                    <!-- TÍTULO -->
                    <h1 class="text-5xl font-semibold tracking-wide py-6">BOLIVIA</h1>
                    <!-- Texto -->
                    <p class="text-[16px] leading-relaxed">Conservamos paisajes biológicamente diversos en América Latina, en acuerdo con las culturas locales y los gobiernos locales.
                    </p>
                </div>
            </div>
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/bolivia/linea02.png" alt="Línea divisoria inferior" 
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
                        <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
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
                            <img src="../../imagenes/bolivia/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                <b>Trabajamos en los lugares más biodiversos del planeta.</b>
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                Nuestros esfuerzos están enfocados en conectar grandes territorios, que hemos organizado en “mosaicos” que nos ayudan a identificar áreas de conectividad por su importancia biológica, ecosistémica y cultural en América Latina.
                            </p>
			                <p class="text-[16px] leading-relaxed">
                                En Bolivia trabajamos en dos Mosaicos: el Mosaico Guaraní, que abarca los ecosistemas del Chaco Americano, y el Mosaico del Corredor de Agua, que protege los ecosistemas del Chaco Serrano y la Selva Tucumana Boliviana, conectando Parques Nacionales con áreas protegidas municipales.
                            </p>
                        </div>
                        <!-- Imagen / Mapa -->
                        <div class="md:col-span-5 w-96 h-80 overflow-hidden">
                            <img src="../../imagenes/bolivia/mapa.png" alt="Mapa de áreas de trabajo en México" class="w-full h-full 
                                object-cover">
                        </div>
                    </div>
                    <!-- Bloque Estadísticas  -->
                    <div class="bg-[rgb(31,72,34)] text-white p-6 md:p-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-[16px]">
                        <div class="flex flex-col">
                            <img src="../../imagenes/bolivia/nci-country-impact-icon1.webp" alt="Icono Bosque" 
                                class="w-8 h-8 mb-2 ">
                            <span class="block mb-1">1,9 millones de</span>
                            <span class="uppercase tracking-wider">HECTÁREAS PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/bolivia/nci-country-impact-icon1.webp" alt="Icono Mano ssujetando planta" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">210</span>
                            <span class="uppercase tracking-wider">millones de toneladas de CARBONO ALMACENADO</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/bolivia/nci-country-impact-icon1.webp" alt="Icono Gota de Agua" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">7</span>
                            <span class="uppercase tracking-wider">FUENTES DE AGUA 
                                PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/bolivia/nci-country-impact-icon1.webp" alt="Icono Mano" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">2</span>
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
                <!-- 1. MENÚ LATERAL IZQUIERDO -->
                <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                    border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                    <a href="" class="block transition-colors font-semibold">Resumen</a>
                    <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                    <!-- Submenú sutil alineado y con sangría para no recargar -->
                    <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                        <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                        <a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                        <a href="#fuentes-agua" class="block transition-colors">agua</a>
                        <a href="#bosque-seco" class="block transition-colors">especies</a>
                        <a href="#otras-iniciativas" class="block transition-colors">personas</a>
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
                            <img src="../../imagenes/bolivia/nci-cp-illustration1-countryp.webp" alt="flor" 
                                class="hidden md:block h-auto w-20 absolute right-0 -mt-6">
                        </div>
                        <img src="../../imagenes/bolivia/linea_02.png" alt="Línea decorativa" class="h-17 w-24 mt-3 pb-6">
                        <p class="text-[16px] leading-relaxed">
                            <b>Naturaleza y Cultura Internacional se centra en cinco áreas estratégicas complementarias:</b> clima, paisajes naturales, 
                            agua, especies y personas.
                        </p>
                        <p class="text-[16px] leading-relaxed">
                            Los gobiernos y las comunidades locales en Bolivia que quieren proteger sus servicios ecosistémicos se enfrentan a muchas barreras financieras, técnicas y legales. Naturaleza y Cultura apoya el trabajo de las fundaciones Nativa Bolivia y Natura Bolivia para superar estas barreras, con el objetivo de crear y gestionar áreas protegidas municipales en áreas clave para la biodiversidad.
                        </p>
                        <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                            hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                            <span class="text-sm">Nuestro proceso</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor CLIMA -->
        <section class="relative w-full pb-64 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-16 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/bolivia/nci-cp-climate-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/bolivia/nci-country-b-1-climate_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">CLIMA</h3>
                        </div>
                        <img src="../../imagenes/bolivia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                    </div> 
                </div>
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-48 md:-mt-28 lg:-mt-56">
            <div class="relative">
		        <!-- Ilustración del jaguar (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/bolivia/nci-cp-illustration2-countryp.webp" alt="" class="absolute -left-7 bottom-0 w-36 
                    translate-x-[-55%] hidden md:block z-20" >
                <!-- CONTENEDOR PRINCIPAL -->
                <div class="banner-carousel relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="banner-slide relative md:absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/bolivia/Nembi-Guasu_2-1-1536x863.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">ALMACENAMIENTO DE CARBONO</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                En Bolivia, en los departamentos de Chuquisaca, Tarija y Santa Cruz, Naturaleza y Cultura junto con sus aliados 
                                Natura y Nativa, ha apoyado la creación y gestión de 6 áreas protegidas con una superficie total de 1,9 millones 
                                de hectáreas. Con la protección y manejo sustentable de estas áreas, hemos evitado la emisión de más de 210 
                                millones de toneladas de carbono almacenado, lo que contribuye a mitigar el cambio climático.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/Paisaje-de-ANMI-Cuenca-Alta-del-Rio-Parapet-scaled-1-1536x1024.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">UN PLAN DE REDUCCIÓN DE EMISIONES</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                El gobierno autónomo Guaraní de Charagua es el primero en crear un área de conservación en Bolivia con su reserva 
                                Ñembi Guasu. Naturaleza y Cultura Internacional está apoyando a este gobierno autónomo con el desarrollo de un 
                                plan REDD+ para reducir las emisiones de carbono de la deforestación y la degradación forestal y proteger esta 
                                área a largo plazo.
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

        <!-- Contenedor PAISAJES NATURALES -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
 	        <!-- FONDO DECORATIVO -->
            <div class="absolute -top-36 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)] 
                bg-[url(../../imagenes/bolivia/nci-cp-wild-places-background.png)] bg-cover bg-center bg-no-repeat z-0">
            </div>
	        <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 1. MENÚ LATERAL IZQUIERDO  -->
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
                        <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                        <!-- Submenú sutil alineado y con sangría para no recargar -->
                        <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                            <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                            <a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                            <a href="#fuentes-agua" class="block transition-colors">agua</a>
                            <a href="#bosque-seco" class="block transition-colors">especies</a>
                            <a href="#otras-iniciativas" class="block transition-colors">personas</a>
                        </div>
                        <a href="" class="block transition-colors">Noticias y eventos</a>
                        <a href="" class="block transition-colors">Publicaciones</a>
                        <a href="" class="block transition-colors">Socios locales</a>
                        <a href="" class="block transition-colors">Equipo</a>
                    </aside>
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/bolivia/nci-wild-places_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">PAISAJES NATURALES</h3>
                        </div>
                        <img src="../../imagenes/bolivia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                    </div>
                </div> 
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-80">
            <div class="relative">
		        <!-- Ilustración del colibrí (Oculta en móvil, visible desde md) -->
                <img src="../../imagenes/bolivia/nci-cp-illustration3-countryp.webp" alt="" class="absolute -left-48 bottom-28 w-32 
                    translate-x-[-55%] hidden md:block z-20">
                <!-- CONTENEDOR PRINCIPAL -->
                <div class="banner-carousel relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="banner-slide relative md:absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/bolivia/Incahuasi-1-scaled-1-1440x1080.jpeg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">CONECTANDO EL CHACO SERRANO DE BOLIVIA</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                             Junto a Natura Bolivia, Naturaleza y Cultura Internacional ha apoyado la creación de áreas protegidas municipales 
                             que conectan parques nacionales y reservas municipales en el Chaco boliviano, permitiendo así el tránsito seguro de 
                             animales amenazados como el jaguar <em>(Panthera onca)</em> y el oso de anteojos <em>(Tremarctos ornatus)</em>. El 
                             suelo fértil del Chaco boliviano es atractivo para la industria agrícola, lo que lo ha convertido en uno de los 
                             ecosistemas más amenazados de América del Sur.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/Nembi-Guasu_bolivia-1-1536x863.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">ÑEMBI GUASU</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Ñembi Guasu, con casi 1,2 millones de hectáreas, es la segunda área de conservación más grande del Gran Chaco y 
                                la primera área protegida que fue creada por un gobierno autónomo. Ubicado cerca de la frontera con Paraguay y 
                                Brasil, se considera una zona de transición entre el Gran Chaco Sudamericano, el Bosque Chiquitano y el Pantanal. 
                                Forma parte del territorio ancestral del pueblo Guaraní, así como del pueblo Ayoreo en aislamiento voluntario.
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

        <!-- Contenedor AGUA -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/bolivia/nci-cp-water-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                            border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
                            <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                            <!-- Submenú sutil alineado y con sangría para no recargar -->
                            <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                                <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                            	<a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                            	<a href="#fuentes-agua" class="block transition-colors">agua</a>
                            	<a href="#bosque-seco" class="block transition-colors">especies</a>
                            	<a href="#otras-iniciativas" class="block transition-colors">personas</a>
                            </div>
                            <a href="" class="block transition-colors">Noticias y eventos</a>
                            <a href="" class="block transition-colors">Publicaciones</a>
                            <a href="" class="block transition-colors">Socios locales</a>
                            <a href="" class="block transition-colors">Equipo</a>
                        </aside>
                        <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                            <img src="../../imagenes/bolivia/nci-water_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">AGUA</h3>
                            </div>
                            <img src="../../imagenes/bolivia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-80">
            <div class="relative">
                <!-- CONTENEDOR PRINCIPAL -->
                <div class="banner-carousel relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/AP_ER_Natura_6_Bolivia-scaled-1-1440x1080.jpeg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">PROTECCIÓN DE FUENTES DE AGUA CLAVES</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                En el sur de Bolivia, Naturaleza y Cultura, junto a su aliado Natura Bolivia, ha apoyado a los gobiernos 
                                municipales de Villa Vaca Guzmán, Macharetí, Entre Ríos y Monteagudo en la creación y manejo de casi 800 mil de 
                                hectáreas de Áreas de Manejo Integrado, con el objetivo de proteger las fuentes de agua que abastecen a las 
                                principales poblaciones de estos municipios.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/5_PH_SimonPaisaje-Rio-Parapeti-scaled-1-1536x1024.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">CREACIÓN DE UN CORREDOR DE AGUA</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                El Corredor de Agua, ubicado en la cordillera sur de los Andes bolivianos, está conformado por 4 áreas protegidas 
                                nacionales y 10 subnacionales. Se extiende sobre 39 millones de hectáreas y atraviesa bosques montañosos y 
                                pastizales que alimentan de agua las principales cuencas de los ríos Caín, Parapetí, Pilcomayo y Guadalquivir. 
                                Estas cuencas abastecen de agua a 18 municipios y más de 200 comunidades locales.
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

        <!-- Contenedor ESPECIES -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-56 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/bolivia/nci-cp-species-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                            border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
                            <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                            <!-- Submenú sutil alineado y con sangría para no recargar -->
                            <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                                <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                            	<a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                            	<a href="#fuentes-agua" class="block transition-colors">agua</a>
                            	<a href="#bosque-seco" class="block transition-colors">especies</a>
                            	<a href="#otras-iniciativas" class="block transition-colors">personas</a>
                            </div>
                            <a href="" class="block transition-colors">Noticias y eventos</a>
                            <a href="" class="block transition-colors">Publicaciones</a>
                            <a href="" class="block transition-colors">Socios locales</a>
                            <a href="" class="block transition-colors">Equipo</a>
                        </aside>
                        <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                            <img src="../../imagenes/bolivia/nci-species_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">ESPECIES</h3>
                            </div>
                            <img src="../../imagenes/bolivia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <!-- Imagen del Captus a la derecha -->
                            <img src="../../imagenes/bolivia/nci-cp-illustration4-countryp.webp" alt="Captus" 
                                class="hidden md:block absolute -right-96 bottom-40 w-20 h-auto object-contain pointer-events-none">
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner bolivia -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-72">
            <div class="relative">
                <!-- CONTENEDOR PRINCIPAL -->
                <div class="banner-carousel relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="banner-slide relative md:absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/bolivia/spectacled_bear_1.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">EL OSO DE ANTEOJOS, EL ÚNICO OSO DE AMÉRICA DEL SUR</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                El oso de anteojos <em>(Tremarctos ornatus)</em> en la Sierra Madre Occidental. Hemos capacitado a voluntarios de 
                                la comunidad de Munihuaza en Álamos para monitorear a estos grandes felinos con cámaras trampa y monitorear la 
                                salud de la población de jaguares. Para crear conciencia sobre la protección de los jaguares en Álamos, hemos 
                                promovido la celebración del Día regional del Jaguar.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/FAUNA-condor-andino_FR-scaled-1-1440x1080.jpeg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">PROTECCIÓN DEL HÁBITAT DEL CÓNDOR ANDINO</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Naturaleza y Cultura, en alianza con Nativa, trabaja para proteger un área cercana a la comunidad de Laderas del 
                                Norte en Tarija, Bolivia. El área comprende 20 mil hectáreas en la provincia de Cercado y creará un corredor de 
                                conectividad crítico para los cóndores <em>(Vultur gryphus)</em>. El área protegida Laderas del Norte preservará 
                                el hábitat de anidación y alimentación del cóndor andino.
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

        <!-- Contenedor PERSONAS -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-28">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/bolivia/nci-cp-people-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                            border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
                            <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                            <!-- Submenú sutil alineado y con sangría para no recargar -->
                            <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                                <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                            	<a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                            	<a href="#fuentes-agua" class="block transition-colors">agua</a>
                            	<a href="#bosque-seco" class="block transition-colors">especies Seco</a>
                            	<a href="#otras-iniciativas" class="block transition-colors">personas</a>
                            </div>
                            <a href="" class="block transition-colors">Noticias y eventos</a>
                            <a href="" class="block transition-colors">Publicaciones</a>
                            <a href="" class="block transition-colors">Socios locales</a>
                            <a href="" class="block transition-colors">Equipo</a>
                        </aside>
                        <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                        <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                            <img src="../../imagenes/bolivia/nci-people_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">PERSONAS</h3>
                            </div>
                            <img src="../../imagenes/bolivia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <!-- Imagen del guacamayo a la derecha -->
                            <img src="../../imagenes/bolivia/nci-cp-illustration5-countryp.webp" alt="Guacamayo" 
                            class="hidden md:block absolute -right-96 bottom-52 w-28 h-auto object-contain pointer-events-none">
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-80">
            <div class="relative">
                <!-- CONTENEDOR PRINCIPAL -->
                <div class="banner-carousel relative flex flex-col w-full h-190 sm:h-175 md:h-[450px] lg:h-[450px]">
                    <!-- BANNER 1 -->
                    <div class="banner-slide relative md:absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                        bg-[url(../../imagenes/bolivia/Comunidad-Tentayape-scaled-1-1536x1024.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">CHARAGUA - LA PRIMERA NACIÓN AUTÓNOMA DE AMÉRICA 
                                DEL SUR</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                Naturaleza y Cultura Internacional apoyó al pueblo Guaraní en la formación de su propio gobierno indígena 
                                autónomo en Charagua, convirtiéndose en el primero en Bolivia. También apoyamos la creación y gestión de áreas 
                                protegidas en su territorio para conservar una gran parte de sus más de 6 millones de hectáreas de bosques 
                                naturales amenazados por la invasión de la agroindustria.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/bolivia/guarani-Charagua-scaled-1-1536x1022.jpeg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">MONITOREO COMUNITARIO</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                A través de Natura Bolivia, hemos apoyado a 15 comunidades indígenas y locales en el fortalecimiento de 
                                capacidades y equipamiento para que puedan monitorear sus áreas protegidas. Trabajar con las comunidades locales 
                                en el monitoreo, control y vigilancia de sus áreas protegidas ha llevado a una mayor apropiación de su territorio 
                                y al monitoreo de especies y sus amenazas.
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

        <!-- Contenedor NOTICIAS Y EVENTOS -->
        <section class="w-full max-w-5xl mx-auto py-10 px-5 sm:px-6 md:px-8 lg:px-12 relative overflow-visible">
            <div class="relative z-10 w-full space-y-4 py-12">
                <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 1. MENÚ LATERAL IZQUIERDO (Ocupa 3 columnas en pantallas grandes) -->
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
                        <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                        <a href="" class="block transition-colors">Noticias y eventos</a>
                        <a href="" class="block transition-colors">Publicaciones</a>
                        <a href="" class="block transition-colors">Socios locales</a>
                        <a href="" class="block transition-colors">Equipo</a>
                    </aside>
                    <!-- 2. CONTENIDO PRINCIPAL (Ocupa 9 columnas en pantallas grandes) -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-10">
                        <!-- Bloque ¿Dónde trabajamos? + Mapa + Estadísticas -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-start">
                            <!-- Textos explicativos -->
                            <div class="md:col-span-7 space-y-4 text-[rgb(72,81,79)]">
                                <h2 class="text-3xl tracking-tight">NOTICIAS Y EVENTOS</h2>
                                <img src="../../imagenes/bolivia/linea03.png" alt="Línea decorativa" class="h-17 w-36 mt-3">
                                <p class="text-[16px] leading-relaxed">
                                    No te pierdas las últimas noticias, historias y eventos de Naturaleza y Cultura Internacional en Bolivia.
                                </p>
                                <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                                hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                                    <span class="text-sm">Ver todas las noticias</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PALMERA - OCULTA EN MÓVIL -->
            <img src="../../imagenes/bolivia/nci-cp-illustration6-countryp.webp" alt=""
                class="hidden md:block absolute -bottom-6 -left-96 w-48 z-30 pointer-events-none">
            <!-- ARMADILLO - OCULTO EN MÓVIL -->
            <img src="../../imagenes/bolivia/nci-cp-illustration7-countryp.webp" alt="" 
                class="hidden md:block absolute -bottom-1 -right-96 w-48 z-20 pointer-events-none">
        </section>

        <!-- Contenedor PUBLICACIONES -->
        <section class="w-full relative bg-[rgb(240,245,246)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:min-h-[70vh] h-auto pt-6 pb-12">
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/bolivia/nci-divider-cp-brush-texture_top-publications.png" alt="Línea divisoria inferior" 
            class="absolute top-0 inset-x-0 block w-full h-auto z-20">
            <div class="w-full max-w-5xl mx-auto py-20 px-5 sm:px-6 md:px-8 lg:px-12 relative overflow-visible">
                <div class="relative z-10 w-full space-y-4">
                    <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- 1. MENÚ LATERAL IZQUIERDO (Ocupa 3 columnas en pantallas grandes) -->
                        <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider font-semibold
                            text-[rgb(31,72,34)] pt-2 border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                            <!-- Opción Activa (Con su marquita naranja característica en el borde) -->
                            <a href="" class="block transition-colors font-semibold">Resumen</a>
                            <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                            <a href="" class="block transition-colors">Noticias y eventos</a>
                            <a href="" class="block transition-colors">Publicaciones</a>
                            <a href="" class="block transition-colors">Socios locales</a>
                            <a href="" class="block transition-colors">Equipo</a>
                        </aside>
                        <!-- 2. CONTENIDO PRINCIPAL (Ocupa 9 columnas en pantallas grandes) -->
                        <div class="lg:col-span-9 lg:col-start-4 w-full space-y-10">
                            <!-- Bloque ¿Dónde trabajamos? + Mapa + Estadísticas -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-start">
                                <!-- Textos explicativos -->
                                <div class="md:col-span-7 space-y-4 text-[rgb(72,81,79)]">
                                    <h2 class="text-3xl tracking-tight">
                                        PUBLICACIONES
                                    </h2>
                                    <img src="../../imagenes/bolivia/linea05.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                                    <p class="text-[16px] leading-relaxed">
                                        Mantente al día con las últimas publicaciones en Bolivia.
                                    </p>
                                    <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                                    hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                                        <span class="text-sm">Ver todas las publicaciones</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Bloque Estadísticas  -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 text-[16px] items-stretch">
                                <!-- Tarjeta 1 -->
                                <div class="flex flex-col w-full h-full bg-[rgb(200,227,230)] bg-cover bg-center bg-no-repeat p-5 md:p-6">
                                    <h3 class="text-[14px] text-[rgb(4,142,152)] mt-4 uppercase">
                                        Recursos disponibles para descarga
                                    </h3>
                                    <hr class="my-4 border-0 border-t-2 border-[rgb(4,142,152)]"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/peru/nci-cp-publications_background-brush-bottom.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor NUESTROS SOCIOS LOCALES -->
        <section class="w-full max-w-5xl mx-auto py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Grid principal: Menú lateral izquierdo y Contenido a la derecha -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- MENÚ LATERAL -->
                <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2
                    border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                    <a href="" class="block transition-colors font-semibold">Resumen</a>
                    <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                    <a href="" class="block transition-colors">Noticias y eventos</a>
                    <a href="" class="block transition-colors">Publicaciones</a>
                    <a href="" class="block transition-colors">Socios locales</a>
                    <a href="" class="block transition-colors">Equipo</a>
                </aside>
                <!-- CONTENIDO PRINCIPAL -->
                <div class="lg:col-span-9 lg:col-start-4 w-full space-y-10">
                    <!-- TEXTO -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-start">
                        <div class="md:col-span-7 space-y-4 text-[rgb(72,81,79)]">
                            <h2 class="text-3xl tracking-tight">NUESTROS SOCIOS LOCALES</h2>
                            <img src="../../imagenes/bolivia/linea04.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                <b>Naturaleza y Cultura Internacional trabaja en estrecha colaboración con las fundaciones 
                                <a href="" class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">Natura Bolivia
                                </a> y <a href=""  class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">Nativa 
                                Bolivia </a>, así como con universidades, instituciones públicas y privadas, comunidades y gobiernos locales</b>
                                para proteger paisajes biológica y culturalmente diversos. Nuestros socios son fundamentales para lograr nuestros 
                                objetivos de conservación. Creemos que la conservación sólo es posible cuando se trabaja en conjunto con las 
                                personas que viven en los territorios que pretendemos proteger.
                            </p>
                        </div>
                    </div>
                    <!-- CARRUSEL DE SOCIOS LOCALES: DEBAJO DEL TEXTO -->
                    <div class="relative w-full mt-10 overflow-visible">
                        <!-- VENTANA DEL CARRUSEL -->
                        <div class="w-full overflow-hidden">
                            <!-- TRACK -->
                            <div class="flex transition-transform duration-500 ease-in-out">
                                <!-- POSICIÓN 1 -->
                                <div class="min-w-full shrink-0">
                                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-12 items-center justify-items-center gap-2">
                                        <img src="../../imagenes/bolivia/NATIVA-LOGO-1-1980x541-1-350x96-1-e1669649051747.png.webp" alt="" 
                                            class="w-48 h-32 object-contain">
                                        <img src="../../imagenes/bolivia/natura-bolivia-logo-e1669648945311.webp" alt="" 
                                            class="w-48 h-32 object-contain">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Línea Separadora Verde -->
                    <img src="../../imagenes/bolivia/nci-cp-green-brush_separator.png" alt="Línea separadora" class="w-full mt-3">
                </div>
            </div>
        </section>

        <!-- Contenedor NUESTRO EQUIPO EN PERÚ -->
        <section class="relative w-full py-10 overflow-visible">
            <!-- FONDO DE PAISAJE: SOLO EN LA PARTE INFERIOR Y A TODO EL ANCHO -->
            <div class="absolute left-1/2 top-[300px] -bottom-3 -z-10 w-screen -translate-x-1/2 overflow-hidden">
                <img src="../../imagenes/bolivia/nci-bg-photo-background_our-team.jpg" alt="" class="absolute inset-0 h-full w-full 
                    object-cover object-bottom">
                <!-- FLOR + COLIBRÍ EN LA ESQUINA SUPERIOR IZQUIERDA -->
                <img src="../../imagenes/bolivia/nci-cp-illustration8-countryp.webp" alt="" class="hidden md:block absolute left-2 top-44 w-48
                    opacity-90 z-10">
                <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
                <img src="../../imagenes/bolivia/nci-brush-texture_bottom-banner.png" alt="Línea divisoria inferior" 
                class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
            </div>
            <div class="w-full max-w-5xl mx-auto py-12 px-5 sm:px-6 md:px-8 lg:px-12">
                <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <aside class="hidden lg:block lg:col-span-3 text-[12px] uppercase tracking-wider text-[rgb(31,72,34)] pt-2 
                        border-l border-[rgb(195,214,219)] pl-4 space-y-6 relative">
                        <a href="" class="block transition-colors font-semibold">Resumen</a>
                        <a href="" class="block transition-colors">AREAS ESTRATÉGICAS</a>
                        <!-- Submenú sutil alineado y con sangría para no recargar -->
                        <div class="pl-3 space-y-3 border-l border-[rgb(195,214,219)] text-[12px] text-[rgb(245,131,32)]">
                               <a href="#plataforma-amazonica" class="block transition-colors">clima</a>
                            <a href="#corredor-andino" class="block transition-colors">paisajes naturales</a>
                            <a href="#fuentes-agua" class="block transition-colors">agua</a>
                            <a href="#bosque-seco" class="block transition-colors">especies</a>
                            <a href="#otras-iniciativas" class="block transition-colors">personas</a>
                        </div>
                        <a href="" class="block transition-colors">Noticias y eventos</a>
                        <a href="" class="block transition-colors">Publicaciones</a>
                        <a href="" class="block transition-colors">Socios locales</a>
                        <a href="" class="block transition-colors">Equipo</a>
                    </aside>
                    <!-- 2. CONTENIDO PRINCIPAL (Ocupa 9 columnas en pantallas grandes) -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-10">
                        <!-- Bloque ¿Dónde trabajamos? + Mapa + Estadísticas -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-start">
                            <!-- Textos explicativos -->
                            <div class="md:col-span-7 space-y-4 text-[rgb(72,81,79)]">
                                <h2 class="text-3xl tracking-tight">NUESTRO EQUIPO EN BOLIVIA</h2>
                                <img src="../../imagenes/bolivia/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                                <p class="text-[16px] leading-relaxed">
                                    A través de las fundaciones Natura Bolivia y Nativa Bolivia, contamos con expertos especializados en 
                                    conservación y manejo de tierras que apoyan a comunidades, organizaciones y gobiernos locales y nacionales 
                                    para proteger paisajes biológica y culturalmente diversos.
                                </p>
                                <!-- flex-wrap y space-y/space-x aseguran que si la pantalla es muy pequeña, los botones se apilen suavemente 
                                sin romperse -->
                                <div class="flex flex-wrap sm:flex-nowrap items-center gap-3 pt-2">
                                    <!-- Botón de Twitter (X) -->
                                    <a href="#" class="relative inline-flex items-center justify-center h-12 w-12 shrink-0">
                                        <img src="../../imagenes/bolivia/nci-social-btn-bg.png" alt="Twitter" class="absolute inset-0 w-full h-full 
                                            object-cover">
                                        <i class="fa-brands fa-twitter relative z-10 text-white text-sm"></i>
                                    </a>
                                    <!-- Botón de Facebook -->
                                    <a href="#" class="relative inline-flex items-center justify-center h-12 w-12 shrink-0">
                                        <img src="../../imagenes/bolivia/nci-social-btn-bg.png" alt="Facebook" class="absolute inset-0 w-full h-full 
                                            object-cover">
                                        <i class="fa-brands fa-facebook-f relative z-10 text-white text-sm"></i>
                                    </a>
                                    <!-- Línea Vertical de separación (Solo visible desde pantallas sm en adelante) -->
                                    <div class="h-8 w-px bg-[rgb(31,72,34)] hidden sm:block mx-2 shrink-0"></div>
                                    <!-- Botón Conoce al equipo en Ecuador -->
                                    <button class="px-6 py-3 bg-[rgb(74,85,78)] hover:bg-[rgb(31,72,34)] text-white font-semibold 
                                        text-base rounded-full transition-colors duration-200 text-center whitespace-nowrap">
                                        Conoce al equipo en Bolivia
                                    </button >
                                </div>
                            </div>
                        </div>
                        <!-- Equipo Colombia -->
                        <div class="relative mt-10">
                            <!-- Fondo decorativo inferior con paisaje y colibrí -->
                            <div class="absolute left-1/2 top-24 -z-10 h-162.5 w-screen -translate-x-1/2 overflow-hidden">
                                <img src="../../imagenes/bolivia/nci-bg-photo-background_our-team.jpg" alt="" class="absolute inset-0 h-full w-full 
                                    object-cover object-bottom">
                                <!-- Colibrí en la esquina superior izquierda -->
                                <img src="../../imagenes/bolivia/nci-cp-illustration8-countryp.webp" alt="" class="hidden md:block absolute left-0 
                                    top-0 w-40 opacity-90 z-10">
                            </div>
                            <!-- Tarjeta blanca que contiene al equipo -->
                            <div class="relative z-10 bg-white px-5 py-8 shadow-sm sm:px-8 sm:py-10 lg:px-12">
                                <!-- Grid de personas -->
                                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                    <!-- Felipe Serrano -->
                                    <article class="overflow-hidden bg-white">
                                        <div class="bg-[rgb(235,241,237)] p-4 sm:p-5">
                                            <img src="../../imagenes/bolivia/nci-Felipe-Serrano-Ecuador-2-1024x683 1.jpg" alt="Felipe Serrano" 
                                            class="h-64 w-full object-cover sm:h-72">
                                        </div>
                                    </article>
                                    <!-- Nora Sánchez Luzardo -->
                                    <article class="overflow-hidden bg-white">
                                        <div class="bg-[rgb(235,241,237)] p-4 sm:p-5">
                                            <img src="../../imagenes/bolivia/nci-our-team_photo2.jpg" alt="Nora Sánchez Luzardo" 
                                            class="h-64 w-full object-cover sm:h-72">
                                        </div>
                                        <div class="pt-4">
                                            <h3 class="text-[12px] font-bold text-[rgb(15,125,63)]">Nora Sánchez Luzardo</h3>
                                            <p class="mt-4 text-[16px] leading-relaxed text-[rgb(72,81,79)]">Coordinadora de Comunicación para 
                                                América Latina</p>
                                            <a href="mailto:nsanchez@naturalezaycultura.org" class="mt-3 inline-block text-[14px] 
                                                text-[rgb(15,125,63)] underline">
                                                nsanchez@naturalezaycultura.org
                                            </a>
                                        </div>
                                    </article>
                                </div>
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