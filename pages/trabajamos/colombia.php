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
    <title>Colombia</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/colombia/Cabito-scaled-1.jpg.webp)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">
            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left text-white">
                    <!-- TÍTULO -->
                    <h1 class="text-5xl font-semibold tracking-wide py-6">Colombia</h1>
                    <!-- Texto -->
                    <p class="text-[16px] leading-relaxed">Conservamos paisajes biológicamente diversos en América Latina, en acuerdo con las culturas locales y los gobiernos locales.
                    </p>
                </div>
            </div>
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/colombia/linea02.png" alt="Línea divisoria inferior" 
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
                            <img src="../../imagenes/colombia/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                <b>Trabajamos en los lugares más biodiversos del planeta.</b>
                            </p>
                            <p class="text-[16px] leading-relaxed">
                                Colombia es uno de los países con mayor biodiversidad en el mundo. En Colombia, Naturaleza y Cultura Internacional apoya iniciativas de conservación en los Andes, específicamente en las regiones montañosas central y occidental, la región del Chocó y la región del Orinoco.
                            </p>
                        </div>
                        <!-- Imagen / Mapa -->
                        <div class="md:col-span-5 w-96 h-80 overflow-hidden">
                            <img src="../../imagenes/colombia/mapa.png" alt="Mapa de áreas de trabajo en México" class="w-full h-full 
                                object-cover">
                        </div>
                    </div>
                    <!-- Bloque Estadísticas  -->
                    <div class="bg-[rgb(31,72,34)] text-white p-6 md:p-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-[16px]">
                        <div class="flex flex-col">
                            <img src="../../imagenes/colombia/nci-country-impact-icon1.webp" alt="Icono Bosque" 
                                class="w-8 h-8 mb-2 ">
                            <span class="block mb-1">800 mil</span>
                            <span class="uppercase tracking-wider">HECTÁREAS PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/colombia/nci-country-impact-icon1.webp" alt="Icono Mano ssujetando planta" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">72</span>
                            <span class="uppercase tracking-wider">millones de toneladas de CARBONO ALMACENADO</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/colombia/nci-country-impact-icon1.webp" alt="Icono Gota de Agua" 
                                class="w-8 h-8 mb-2 object-contain">
                            <span class="block mb-1">13</span>
                            <span class="uppercase tracking-wider">FUENTES DE AGUA 
                                PROTEGIDAS</span>
                        </div>
                        <div class="flex flex-col">
                            <img src="../../imagenes/colombia/nci-country-impact-icon1.webp" alt="Icono Mano" 
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
                            <img src="../../imagenes/colombia/nci-cp-illustration1-countryp.webp" alt="flor" 
                                class="hidden md:block h-auto w-20 absolute right-0 -mt-6">
                        </div>
                        <img src="../../imagenes/mexico/linea_02.png" alt="Línea decorativa" class="h-17 w-24 mt-3 pb-6">
                        <p class="text-[16px] leading-relaxed">
                            Naturaleza y Cultura Internacional se centra en cinco áreas estratégicas complementarias: clima, paisajes naturales, 
                            agua, especies y personas.
                        </p>
                        <p class="text-[16px] leading-relaxed">
                            En asociación con el Instituto de Investigación de Recursos Biológicos Alexander von Humboldt (Instituto Humboldt), Naturaleza y Cultura identifica y desarrolla nuevas áreas protegidas para asegurar la diversidad biológica y los servicios ecosistémicos.
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
                bg-[url(../../imagenes/colombia/nci-cp-climate-background.png)]
                bg-cover bg-center bg-no-repeat z-0">
            </div>
            <div class="relative z-10 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- 2. CONTENIDO PRINCIPAL DE LA SECCIÓN -->
                    <div class="lg:col-span-9 lg:col-start-4 w-full space-y-4 md:pr-8 lg:pr-12">
                        <img src="../../imagenes/colombia/nci-country-b-1-climate_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">CLIMA</h3>
                        </div>
                        <img src="../../imagenes/colombia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
			            <p class="text-[16px] leading-relaxed">
                            El cambio climático es la mayor amenaza para la vida en nuestro planeta. La deforestación y la degradación de los 
                            bosques son una de las principales causas del cambio climático en los trópicos. Naturaleza y Cultura Internacional 
                            conserva los bosques y los recursos hídricos que ayudan a las comunidades locales a adaptarse al calentamiento global.
                            Mitigamos el cambio climático al reducir la deforestación y la degradación de los ecosistemas, lo que permite que los 
                            bosques capturen y almacenen carbono de la atmósfera.
                        </p>
                    </div> 
                </div>
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-48 md:-mt-28 lg:-mt-52">
		    <!-- Ilustración del jaguar (Oculta en móvil, visible desde md) -->
            <img src="../../imagenes/colombia/nci-cp-illustration2-countryp.webp" alt="" class="absolute -left-7 bottom-0 w-36 
                translate-x-[-55%] hidden md:block z-20" >
            <div class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                <div class="absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                    bg-[url(../../imagenes/colombia/Usaraga-scaled-1-1440x1080.jpg.webp)]
                    bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8">
                    <!-- Caja de texto interna -->
                    <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                        <h2 class="text-xl uppercase tracking-wider block font-semibold">RESERVAS DE CARBONO</h2>
                        <p class="text-[16px] leading-relaxed opacity-95">
                            Naturaleza y Cultura Internacional ha ayudado a proteger 800 mil hectáreas en Colombia, protegiendo puntos 
                            biodiversos críticos. Calculamos que estos bosques nativos protegidos y otros ecosistemas naturales no forestales, 
                            como sabanas y páramos, almacenan alrededor de 72 millones de toneladas de carbono.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor PAISAJES NATURALES -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
 	        <!-- FONDO DECORATIVO -->
            <div class="absolute -top-36 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)] 
                bg-[url(../../imagenes/colombia/nci-cp-wild-places-background.png)] bg-cover bg-center bg-no-repeat z-0">
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
                        <img src="../../imagenes/colombia/nci-wild-places_icon.webp" alt="" class="w-16 h-16 object-contain">
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl text-[rgb(15,125,63)]">PAISAJES NATURALES</h3>
                        </div>
                        <img src="../../imagenes/colombia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                    </div>
                </div> 
            </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-80">
		    <!-- Ilustración del colibrí (Oculta en móvil, visible desde md) -->
            <img src="../../imagenes/colombia/nci-cp-illustration3-countryp.webp" alt="" class="absolute -left-48 bottom-28 w-32 
                translate-x-[-55%] hidden md:block z-20">
            <div class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                <div class="absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                    bg-[url(../../imagenes/colombia/Zona-Cabo-Corrientes-scaled-1-1440x1080.jpg.webp)]
                    bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8">
                    <!-- Caja de texto interna -->
                    <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                        <h2 class="text-xl uppercase tracking-wider block font-semibold">CORREDORES CHOCOANOS</h2>
                        <p class="text-[16px] leading-relaxed opacity-95">
                            A través de la creación y administración de nuevas áreas protegidas, Naturaleza y Cultura Internacional está 
                            trabajando con las autoridades ambientales regionales y otras organizaciones para consolidar dos corredores naturales 
                            paralelos en la región del Pacífico colombiano: el Corredor Costero Chocoano de 450 kilómetros y el corredor Alto 
                            Andino-Pacífico de 250 kilómetros. Ambos corredores contribuyen a la protección de la biodiversidad y de los valores 
                            culturales de las comunidades étnicas afrocolombianas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor AGUA -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-20">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/colombia/nci-cp-water-background.png)]
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
                            <img src="../../imagenes/colombia/nci-water_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">AGUA</h3>
                            </div>
                            <img src="../../imagenes/colombia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
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
                        bg-[url(../../imagenes/colombia/DSC_0098-1-1536x864.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">PROTECCIÓN DE PÁRAMO</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                El 70% de los colombianos depende del páramo para su suministro de agua. Naturaleza y Cultura Internacional 
                                asiste a varias autoridades ambientales regionales en el manejo y protección de casi 29 mil hectáreas de este 
                                ecosistema andino. Estimamos que medio millón de personas y 24 municipios se han beneficiado de esta estrategia 
                                de conservación.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/colombia/DSCN3092-1-1492x1080.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">PROTEGIENDO EL CHOCÓ HIPER HÚMEDO</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                La Selva del Chocó es la región más húmeda de América. Esta humedad facilita el crecimiento de árboles de 30 
                                metros de altura y es compatible con una amplia gama de anfibios, a la vez que proporciona importantes fuentes de 
                                agua para las comunidades locales. En Naturaleza y Cultura, estamos ayudando a los afrocolombianos a proteger dos 
                                cuencas hidrográficas principales: el río Atrato y el río San Juan.
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
                bg-[url(../../imagenes/colombia/nci-cp-species-background.png)]
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
                            <img src="../../imagenes/colombia/nci-species_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">ESPECIES</h3>
                            </div>
                            <img src="../../imagenes/colombia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <!-- Imagen del Captus a la derecha -->
                            <img src="../../imagenes/colombia/nci-cp-illustration4-countryp.webp" alt="Captus" 
                                class="hidden md:block absolute -right-96 bottom-40 w-20 h-auto object-contain pointer-events-none">
                        </div> 
                    </div>
                </div>
        </section>

        <!-- Contenedor Banner, texto y una imagen a la izquierda del Banner -->
        <section class="relative w-full px-5 sm:px-6 md:px-0 md:w-[calc(50%+1rem)] lg:w-[calc(100vw-(100vw-64rem)/2-19rem)] 
            md:ml-auto lg:ml-[calc((100vw-64rem)/2+19rem)] mr-0 z-10 -mt-16 md:-mt-28 lg:-mt-80">
            <div class="relative flex flex-col w-full h-auto min-h-145 sm:min-h-120 md:h-140 lg:h-140" 
                    style="min-height: 450px;">
                <div class="absolute inset-x-0 top-0 w-full md:inset-0 md:h-full
                    bg-[url(../../imagenes/colombia/O7A9449-1536x1024.jpg.webp)]
                    bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8">
                    <!-- Caja de texto interna -->
                    <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                        <h2 class="text-xl uppercase tracking-wider block font-semibold">PALMA DE CERA: EL ÁRBOL NACIONAL DE COLOMBIA</h2>
                        <p class="text-[16px] leading-relaxed opacity-95">
                            La palma de cera <em>(Ceroxylon quindiuense)</em>, es la palma más alta del mundo (hasta 60 metros) y en 1985 fue 
                            declarada por el gobierno colombiano como el “árbol nacional”. Sin embargo, está en peligro de extinción. Naturaleza 
                            y Cultura busca proteger este árbol y el paisaje que lo rodea, a través de la promoción de su uso sostenible, la 
                            investigación sobre esta especie y la creación de reservas privadas y un área protegida pública.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor PERSONAS -->
        <section class="relative w-full pb-28 md:pb-87.5 lg:pb-92.5 overflow-hidden py-28">
            <!-- FONDO DECORATIVO -->
            <div class="absolute -top-24 bottom-0 left-0 w-full lg:w-[calc(50%+18rem)]
                bg-[url(../../imagenes/colombia/nci-cp-people-background.png)]
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
                            <img src="../../imagenes/colombia/nci-people_icon.webp" alt="" class="w-16 h-16 object-contain">
                            <div class="flex items-center gap-3">
                                <h3 class="text-2xl text-[rgb(15,125,63)]">PERSONAS</h3>
                            </div>
                            <img src="../../imagenes/colombia/linea_rosa_06.png" alt="Línea decorativa" class="h-17 w-20 mt-3">
                            <!-- Imagen del guacamayo a la derecha -->
                            <img src="../../imagenes/colombia/nci-cp-illustration5-countryp.webp" alt="Guacamayo" 
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
                        bg-[url(../../imagenes/colombia/IMG_0433-scaled-1-1536x1024.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 1; pointer-events: auto; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-3 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">TERRITORIO ANCESTRAL ALIWA KUPEPE</h2>
                            <p class="text-[15px] leading-relaxed opacity-95">
                                Aliwa Kupepe es el territorio ancestral del pueblo indígena Sikuani, extendido en sabanas y bosques naturales. 
                                Hace más de 30 millones de años, un meteorito impactó en esta región y dentro del cráter creció un denso bosque 
                                amazónico, el más grande de las sabanas naturales de la región del Orinoco colombiano. Estos bosques presentan 
                                características biológicas inigualables y tienen una importancia cosmológica única para el pueblo Sikuani.
                            </p>
                        </div>
                    </div>
                    <!-- BANNER 2 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/colombia/firma-acuerdos7_colombia-1440x1080.jpeg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">RESERVAS PRIVADAS</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Naturaleza y Cultura Internacional está ayudando a 11 familias en los Andes y la región del Orinoco a registrar 
                                casi 12 mil hectáreas de tierras privadas como reservas locales e implementar planes de manejo sostenible. 
                                Especies amenazadas, endémicas y únicas prosperan en estas áreas, como la palma de cera 
                                <em>(Ceroxylon quindiuense)</em>, perico paramuno <em>(Leptosittaca branickii)</em>, loro orejiamarillo 
                                <em>(Ognorhynchus icterotis)</em>, pumas <em><(Puma concolor)</em>, tucanes <em>(Ramphastos tucanus)</em>, 
                                caimanes <em>(Crocodylus intermedius)</em>, osos hormigueros <em>(Myrmecophaga tridactyla)</em>, entre otros. 
                            </p>
                        </div>
                    </div>
		            <!-- BANNER 3 -->
                    <div class="banner-slide absolute inset-x-0 top-0 w-full md:inset-0 md:h-full 
                        bg-[url(../../imagenes/colombia/DSCN6569-2-1536x1038.jpg.webp)]
                        bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8"
                        style="transition: opacity 1.8s ease-in-out; opacity: 0; pointer-events: none; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-5 sm:p-6 rounded-lg space-y-4 bg-black/60 md:bg-black/45 backdrop-blur-xs">
                            <h2 class="text-xl uppercase tracking-wider block font-semibold">COMUNIDADES TRADICIONALES AFROCOLOMBIANAS</h2>
                            <p class="text-[16px] leading-relaxed opacity-95">
                                Naturaleza y Cultura ha apoyado la creación de un área protegida marina y costera en el Chocó (el Encanto de los 
                                Manglares del Bajo Baudó), y está ayudando a crear otra (el Delta del Río San Juan), que son áreas clave para el 
                                bienestar y la seguridad alimentaria de las comunidades afrocolombianas. Estamos trabajando con estas comunidades 
                                para promover la pesca sostenible y tradicional, prohibiendo la pesca industrial.
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
			            <button class="banner-dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white transition-all cursor-pointer" 
                            style="opacity: 0.4;" data-slide="2"></button>
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
                                <img src="../../imagenes/colombia/linea03.png" alt="Línea decorativa" class="h-17 w-36 mt-3">
                                <p class="text-[16px] leading-relaxed">
                                    No te pierdas las últimas noticias, historias y eventos de Naturaleza y Cultura en Colombia.
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
            <img src="../../imagenes/colombia/nci-cp-illustration6-countryp.webp" alt=""
                class="hidden md:block absolute -bottom-6 -left-96 w-48 z-30 pointer-events-none">
            <!-- ARMADILLO - OCULTO EN MÓVIL -->
            <img src="../../imagenes/colombia/nci-cp-illustration7-countryp.webp" alt="" 
                class="hidden md:block absolute -bottom-1 -right-96 w-48 z-20 pointer-events-none">
        </section>

        <!-- Contenedor PUBLICACIONES -->
        <section class="w-full relative bg-[rgb(240,245,246)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:min-h-[70vh] h-auto pt-6 pb-12">
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/peru/nci-divider-cp-brush-texture_top-publications.png" alt="Línea divisoria inferior" 
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
                                    <img src="../../imagenes/colombia/linea05.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                                    <p class="text-[16px] leading-relaxed">
                                        Mantente al día con las últimas publicaciones de Colombia.
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
                            <img src="../../imagenes/colombia/linea04.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                            <p class="text-[16px] leading-relaxed">
                                <b>Naturaleza y Cultura Internacional trabaja en estrecha colaboración con el 
                                <a href=""  class="underline text-[rgb(15,125,63)] hover:no-underline hover:text-[rgb(72,81,79)]">Instituto de 
                                Investigación de Recursos Biológicos Alexander von Humboldt</a> (Instituto Humboldt) en Colombia, así como con 
                                universidades, instituciones públicas y privadas, comunidades y gobiernos locales</b> para proteger paisajes 
                                biológica y culturalmente diversos. Nuestros socios son fundamentales para lograr nuestros objetivos de 
                                conservación. Creemos que la conservación sólo es posible cuando se trabaja junto con las personas que viven en 
                                las comunidades que pretendemos proteger.
                            </p>
                        </div>
                    </div>
                    <!-- CARRUSEL DE SOCIOS LOCALES: DEBAJO DEL TEXTO -->
                    <div class="relative w-full mt-10 overflow-visible">
                        <!-- VENTANA DEL CARRUSEL -->
                        <div class="w-full overflow-hidden">
                            <!-- TRACK -->
                            <div id="partners-track" class="flex transition-transform duration-500 ease-in-out">
                                <!-- POSICIÓN 1 -->
                                <div class="partners-slide min-w-full shrink-0">
                                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-12 items-center justify-items-center gap-2">
                                        <img src="../../imagenes/colombia/Logo-Corantioquia-700px-x-450px-JPG-e1669067007957.jpg.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/logo-carder-e1669067715153.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/LOGO-CUNAGUARO-fondo-trans-1-e1669067727558.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/default.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                    </div>
                                </div>
                                <!-- POSICIÓN 2 -->
                                <div class="partners-slide min-w-full shrink-0">
                                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 items-center justify-items-center gap-2">
                                        <img src="../../imagenes/colombia/FOB-LOGO-e1669067770724.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/ECI-P-04-F-06-LOGO-HUMBOLDT-FONDO-CLARO-e1669067816606.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/Col_ESP-1-e1669132347802.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/Corponariคo-e1669067909698.jpg.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                        <img src="../../imagenes/colombia/ATICO-GM-e1669067920131.png.webp" alt="" 
                                            class="w-40 h-32 object-contain">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PUNTOS -->
                    <div id="partners-dots" class="flex items-center justify-center gap-2 mt-6">
                        <button type="button" data-partner-slide="0" class="partners-dot w-2 h-2 rounded-full bg-[rgb(15,125,63)] 
                            transition-all">
                        </button>
                        <button type="button" data-partner-slide="1" class="partners-dot w-2 h-2 rounded-full bg-[rgb(15,125,63)] 
                            opacity-40 transition-all">
                        </button>
                    </div>
                    <!-- Línea Separadora Verde -->
                    <img src="../../imagenes/colombia/nci-cp-green-brush_separator.png" alt="Línea separadora" class="w-full mt-3">
                </div>
            </div>
        </section>

        <!-- Contenedor NUESTRO EQUIPO EN PERÚ -->
        <section class="relative w-full py-10 overflow-visible">
            <!-- FONDO DE PAISAJE: SOLO EN LA PARTE INFERIOR Y A TODO EL ANCHO -->
            <div class="absolute left-1/2 top-[300px] -bottom-3 -z-10 w-screen -translate-x-1/2 overflow-hidden">
                <img src="../../imagenes/colombia/nci-bg-photo-background_our-team.jpg" alt="" class="absolute inset-0 h-full w-full 
                    object-cover object-bottom">
                <!-- FLOR + COLIBRÍ EN LA ESQUINA SUPERIOR IZQUIERDA -->
                <img src="../../imagenes/colombia/nci-cp-illustration8-countryp.webp" alt="" class="hidden md:block absolute left-2 top-44 w-48
                    opacity-90 z-10">
                <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
                <img src="../../imagenes/colombia/nci-brush-texture_bottom-banner.png" alt="Línea divisoria inferior" 
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
                                <h2 class="text-3xl tracking-tight">NUESTRO EQUIPO EN COLOMBIA</h2>
                                <img src="../../imagenes/colombia/linea01.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                                <p class="text-[16px] leading-relaxed">
                                    A través del Instituto de Investigación de Recursos Biológicos Alexander von Humboldt (Instituto Humboldt), 
                                    contamos con expertos especializados en conservación, monitoreo y evaluación, que ayudan a las comunidades, 
                                    organizaciones y gobiernos locales y nacionales a proteger paisajes biológica y culturalmente diversos.
                                </p>
                                <!-- flex-wrap y space-y/space-x aseguran que si la pantalla es muy pequeña, los botones se apilen suavemente 
                                sin romperse -->
                                <div class="flex flex-wrap sm:flex-nowrap items-center gap-3 pt-2">
                                    <!-- Botón de Twitter (X) -->
                                    <a href="#" class="relative inline-flex items-center justify-center h-12 w-12 shrink-0">
                                        <img src="../../imagenes/colombia/nci-social-btn-bg.png" alt="Twitter" class="absolute inset-0 w-full h-full 
                                            object-cover">
                                        <i class="fa-brands fa-twitter relative z-10 text-white text-sm"></i>
                                    </a>
                                    <!-- Botón de Facebook -->
                                    <a href="#" class="relative inline-flex items-center justify-center h-12 w-12 shrink-0">
                                        <img src="../../imagenes/colombia/nci-social-btn-bg.png" alt="Facebook" class="absolute inset-0 w-full h-full 
                                            object-cover">
                                        <i class="fa-brands fa-facebook-f relative z-10 text-white text-sm"></i>
                                    </a>
                                    <!-- Línea Vertical de separación (Solo visible desde pantallas sm en adelante) -->
                                    <div class="h-8 w-px bg-[rgb(31,72,34)] hidden sm:block mx-2 shrink-0"></div>
                                    <!-- Botón Conoce al equipo en Ecuador -->
                                    <button class="px-6 py-3 bg-[rgb(74,85,78)] hover:bg-[rgb(31,72,34)] text-white font-semibold 
                                        text-base rounded-full transition-colors duration-200 text-center whitespace-nowrap">
                                        Conoce al equipo en Colombia
                                    </button >
                                </div>
                            </div>
                        </div>
                        <!-- Equipo Colombia -->
                        <div class="relative mt-10">
                            <!-- Fondo decorativo inferior con paisaje y colibrí -->
                            <div class="absolute left-1/2 top-24 -z-10 h-162.5 w-screen -translate-x-1/2 overflow-hidden">
                                <img src="../../imagenes/colombia/nci-bg-photo-background_our-team.jpg" alt="" class="absolute inset-0 h-full w-full 
                                    object-cover object-bottom">
                                <!-- Colibrí en la esquina superior izquierda -->
                                <img src="../../imagenes/colombia/nci-cp-illustration8-countryp.webp" alt="" class="hidden md:block absolute left-0 
                                    top-0 w-40 opacity-90 z-10">
                            </div>
                            <!-- Tarjeta blanca que contiene al equipo -->
                            <div class="relative z-10 bg-white px-5 py-8 shadow-sm sm:px-8 sm:py-10 lg:px-12">
                                <!-- Grid de personas -->
                                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                    <!-- Juliana Cortez R -->
                                    <article class="overflow-hidden bg-white">
                                        <div class="bg-[rgb(235,241,237)] p-4 sm:p-5">
                                            <img src="../../imagenes/colombia/Juliana_Cortes-600x400.jpg.webp" alt="Juliana Cortez R" 
                                            class="h-64 w-full object-cover sm:h-72">
                                        </div>
                                        <div class="pt-4">
                                            <h3 class="text-[12px] font-bold text-[rgb(15,125,63)]">Juliana Cortez R</h3>
                                            <p class="mt-4 text-[16px] leading-relaxed text-[rgb(72,81,79)]">Investigadora adjunto del Centro 
                                                de Soluciones basadas en la Naturaleza
                                            </p>
                                        </div>
                                    </article>
                                    <!-- Nora Sánchez Luzardo -->
                                    <article class="overflow-hidden bg-white">
                                        <div class="bg-[rgb(235,241,237)] p-4 sm:p-5">
                                            <img src="../../imagenes/colombia/Headshot-Nora-e1674845675886.webp" alt="Nora Sánchez Luzardo" 
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