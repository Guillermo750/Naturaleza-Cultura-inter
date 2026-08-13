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
    <title>Bosques</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima ADAPTADA -->
        <section class="w-full relative bg-[url(../../imagenes/imagenes_bosque/forest.jpg)] bg-cover bg-center bg-no-repeat flex items-center 
            min-h-[50vh] md:h-[60vh] pt-6 pb-12">
            <!-- LÍNEA SUPERIOR: Clavada en el borde superior -->
            <img src="../../imagenes/imagenes_bosque/linea01.png" alt="Línea divisoria superior" 
            class="absolute top-0 inset-x-0 block w-full h-auto z-20"> 

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 mt-6 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block bg-black/30 p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide">Bosques</h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/imagenes_principal/linea13_debajo_video.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Nuestro Trabajo ADAPTADA -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 text-center 
            md:text-left">  
            <!-- Título verde pequeño -->
            <h2 class="text-3xl md:text-4xl text-[rgb(15,125,63)] tracking-wider uppercase w-full">NUESTRO TRABAJO</h2>
            
            <!-- Subtítulo grande -->
            <h3 class="text-2xl md:text-3xl text-[rgb(72,81,79)] font-normal leading-tight w-full">Protección de bosques saludables y conectados
            </h3>
            
            <!-- Párrafo destacado (más grande) -->
            <p class="font-light text-[16px] text-[rgb(72,81,79)] w-full">Naturaleza y Cultura trabaja por proteger grandes extensiones de 
                bosques. Ecosistemas críticos que sustentan la biodiversidad, regulan el clima, proveen agua limpia y apoyan a las comunidades 
                indígenas y locales.</p>
                
            <!-- Párrafo normal -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Al conservar paisajes extensos, salvaguardamos corredores biológicos esenciales, 
                prevenimos la deforestación y fortalecemos la resiliencia de los ecosistemas, garantizando que la naturaleza prospere para las 
                generaciones futuras.</p>
                
            <!-- Último párrafo en verde destacado -->
            <p class="text-lg md:text-xl text-[rgb(15,125,63)] font-medium w-full">Trabajamos junto a comunidades locales, pueblos indígenas y 
                gobiernos para fortalecer la conservación de bosques en América Latina.</p>
        </section>

        <!-- Contenedor Programas Destacados ADAPTADA -->
        <section class="w-full max-w-7xl mx-auto px-4 py-8">
            <!-- Cabecera de la sección: Título + Línea, Botón a la derecha -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 pl-0 lg:pl-36 text-center md:text-left gap-4">
                <!-- Bloque del título estructurado en fila (Flex) en ordenadores grandes -->
                <div class="flex flex-col items-center md:items-start lg:flex-row lg:items-center gap-4 w-full">
                    <!-- IMAGEN DE LA FLOR: Visible solo en ordenadores grandes, colocada de forma natural al lado del texto -->
                    <div class="hidden lg:block w-20 shrink-0">
                        <img src="../../imagenes/imagenes_bosque/nci-cp-illustration1-countryp.png" alt="Decoración lateral" 
                        class="w-full h-auto object-contain">
                    </div>
                    <!-- Contenedor interno para el texto del título y su línea beige inferior -->
                    <div class="flex flex-col items-center md:items-start w-full">
                        <h2 class="text-3xl font-normal text-[rgb(72,81,79)] w-full">Programas Destacados</h2>
                        <!-- Imagen de la línea debajo del título -->
                        <img src="../../imagenes/imagenes_bosque/linea_beige.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                    </div>
                </div>

                <!-- Botón a la derecha alineado al final -->
                <a href="#" class="mt-4 md:mt-0 bg-[rgb(72,81,79)] text-white px-6 py-3 rounded-full hover:bg-[rgb(31,72,34)] 
                font-medium text-sm transition shrink-0"> 
                    Explora todos los programas
                </a>
            </div>

            <!-- Contenedor de las Tarjetas Adaptable -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 pl-0 lg:pl-36 w-full">
                <!-- Tarjeta 1 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_bosque/carousel1.webp" alt="Programa 1" class="w-full h-96 object-cover rounded-t-md">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/imagenes_bosque/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
                            ECUADOR, PERÚ
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 mb-2 py-4 uppercase">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] leading-snug">Corredor de Conservación Transfronterizo Andino 
                            Amazónico</h3>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_bosque/carousel2.jpg" alt="Programa 2" class="w-full h-96 object-cover rounded-t-md">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/imagenes_bosque/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
                            ECUADOR
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 mb-2 py-4 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">AGUA</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Comunidades Locales</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] leading-snug">Conservación de Fuentes de Agua</h3>
                    </div>
                </div>
                    
                <!-- Tarjeta 3 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_bosque/carousel3.webp" alt="Programa 3" class="w-full h-96 object-cover rounded-t-md">
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/imagenes_bosque/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
                            PERÚ
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 mb-2 py-4 uppercase">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] leading-snug">Bosques Secos del Marañón</h3>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_bosque/carousel4.webp" alt="Programa 2" class="w-full h-96 object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_bosque/ubicacion.jpg" 
                        alt="Ubicación" class="w-5 h-6 inline-block"> ECUADOR</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex justify-center gap-2 mb-2 py-4 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Clima</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Comunidades Locales</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px]">Plataforma Amazónica por los Bosques, el Clima y 
                        el Bienestar Humano</h3>
                    </div>
                </div>

                <!-- Tarjeta 5 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_bosque/carousel5.webp" alt="Programa 2" class="w-full h-96 object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_bosque/ubicacion.jpg" 
                        alt="Ubicación" class="w-5 h-6 inline-block"> ECUADOR</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex justify-center gap-2 mb-2 py-4 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">CLIMA</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Comunidades Locales</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px]">Fondo Futuro Amazónico</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Creando y Fortaleciendo Áreas Protegidas ADAPTADA -->
        <section class="w-full max-w-4xl mx-auto py-7 px-6">
            <!-- Contenedor principal con grid responsive -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-start text-center md:text-left">
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col text-[rgb(72,81,79)] space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desborde -->
                    <h2 class="text-2xl sm:text-3xl font-normal tracking-wide mb-2.5 w-full leading-tight">
                        Creando y Fortaleciendo Áreas Protegidas
                    </h2>
                    <p class="leading-relaxed text-[16px] w-full">
                        Ayudamos a establecer nuevas áreas protegidas y a fortalecer las existentes en lugares que enfrentan amenazas urgentes. 
                        <b>las áreas protegidas, territorios comunitarios y otras formas de conservación forman redes interconectadas,</b> 
                        los bosques son más resilientes y la biodiversidad tiene espacio para desplazarse y adaptarse.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        Los bosques no siguen fronteras políticas. Al apoyar la planificación y colaboración a <b>escala de paisaje,</b> 
                        ayudamos a proteger ecosistemas conectados a través de diversas regiones.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        En un mundo cada vez más fragmentado, muchas especies tienen menos espacio para migrar, dispersarse, alimentarse y 
                        prosperar. Al vincular áreas protegidas nacionales, regionales y locales, creamos <b>corredores biológicos vitales</b> 
                        que permiten que especies clave <b>como el jaguar, el cóndor andino y el oso de anteojos,</b> se desplacen libremente 
                        en busca de alimento, agua, refugio y sitios de reproducción.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen con margen corregido -->
                <div class="w-full mt-4 md:mt-16 flex justify-center">
                    <img src="../../imagenes/imagenes_bosque/Rio-Yaupi-001-Foto-Naturaleza-y-Cultura-Internacional.jpg" alt="Bosque y río" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Conservación liderada por las personas ADAPTADA -->
        <section class="w-full bg-[rgb(244,244,237)] py-10 px-6">
            <!-- Contenedor principal con grid adaptable -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-4xl text-center md:text-left">
                
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full">
                    <!-- Título principal verde -->
                    <h2 class="text-3xl font-normal text-[rgb(15,125,63)] leading-tight w-full">
                        Conservación liderada por las personas
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Una solución de conservación que perdura
                    </h3>
                    <!-- Párrafo descriptivo -->
                    <p class="text-[rgb(72,81,79)] leading-relaxed text-[16px] font-Avenir Book w-full">
                        Proteger los bosques no es un logro de una sola vez. La conservación duradera depende de la custodia del territorio, 
                        un liderazgo local sólido y los recursos a largo plazo necesarios para mantener la protección frente a los cambios 
                        políticos, económicos y climáticos.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/imagenes_bosque/custom-image-web-8-600x600.png" alt="Conservación liderada por personas" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Bosques Conectados ADAPTADA -->
        <section class="w-full max-w-4xl mx-auto py-12 px-6">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(15,125,63)] w-full leading-tight">
                        Bosques Conectados
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Conservación a Escala de Paisaje
                    </h3>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Cuando los bosques se fragmentan, los ecosistemas se vuelven menos resilientes. Los <b>corredores biológicos</b> se 
                        interrumpen, las cuencas hidrográficas se alteran y los bosques se vuelven más vulnerables a los incendios, las 
                        actividades ilegales y el cambio de uso de suelo. <b>Conectar bosques protegidos</b> ayuda a mantener el funcionamiento de 
                        paisajes enteros, ahora y en el futuro.
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Esto es válido independientemente de si las piezas individuales son parques nacionales, territorios indígenas, áreas 
                        subnacionales protegidas o una combinación de todas las anteriores.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/imagenes_bosque/custom-image-web-6-600x600.png" alt="Escala de Paisaje" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Trabajamos en los ecosistemas más biodiversos ADAPTADA-->
        <!-- PRIMERA SECCIÓN: Textos de Introducción -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-8 px-6 text-center 
            md:text-left">
            <!-- Título verde pequeño -->
            <h2 class="text-3xl text-[rgb(72,81,79)] tracking-wider uppercase w-full">Ecosistemas que protegemos</h2>
            <!-- Subtítulo grande -->
            <h3 class="text-2xl font-normal leading-tight text-[rgb(15,125,63)] w-full">Trabajamos en los ecosistemas más biodiversos, pero 
                también más amenazados del planeta.</h3>
            <!-- Párrafo destacado -->
            <p class="leading-relaxed text-[16px] text-[rgb(72,81,79)] w-full">Un ecosistema está compuesto por todos los seres vivos que 
                comparten un entorno, desde plantas y animales hasta organismos microscópicos. Garantizar la integridad y la salud de ecosistemas
                completos proporciona hábitat para la vida silvestre y servicios ecosistémicos vitales para toda forma de vida.
            </p>
        </section>

        <!-- SEGUNDA SECCIÓN: Cuadrícula de Cajas de Ecosistemas -->
        <section class="w-full max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-3">
                
                <!-- CAJA 1: Selva Amazónica -->
                <div class="group relative h-96 bg-gray-900 md:col-span-2 w-full max-w-sm mx-auto md:max-w-full overflow-hidden rounded-md">
                    <img src="../../imagenes/imagenes_bosque/caja1.webp" alt="Selva Amazónica" class="absolute inset-0 h-full w-full object-cover
                    opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                    <!-- Degradado general de fondo -->
                    <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/40 to-transparent"></div>
                    <!-- Fondo negro translúcido que ahora SÍ ocupa desde arriba del texto hasta abajo -->
                    <div class="absolute inset-x-0 bottom-0 top-1/2 bg-black/60 z-10"></div>
                    <!-- Contenido de texto -->
                    <div class="absolute bottom-0 left-0 z-20 w-full p-6 text-white text-left">
                        <h3 class="text-xl font-bold">Selva Amazónica</h3>
                        <p class="mt-2 text-[14px]">La <em>selva amazónica</em> es el bosque tropical más extenso de la Tierra y alberga una gran
                        diversidad de especies y vegetales, además de pueblos indígenas.</p>
                    </div>
                    
                    <!-- Línea naranja fija exactamente en el borde inferior de la tarjeta -->
                    <div class="absolute bottom-0 left-0 z-30 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform duration-500
                    group-hover:scale-x-100"></div>
                </div>

                <!-- CAJA 2: Bosque Nuboso Andino -->
                <div class="group relative h-96 bg-gray-900 md:col-span-2 w-full max-w-sm mx-auto md:max-w-full overflow-hidden rounded-md">
                    <img src="../../imagenes/imagenes_bosque/caja2.webp" alt="Bosque Nuboso" class="absolute inset-0 h-full w-full object-cover 
                    opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white text-left">
                        <!-- Fondo negro translúcido que ahora SÍ ocupa desde arriba del texto hasta abajo -->
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/50"></div>
                        <!-- Contenido de texto -->
                        <h3 class="relative z-10 text-xl font-bold">Bosque Nuboso Andino</h3>
                        <p class="relative z-10 mt-2 text-[14px]">Los <em>bosques nublados andinos</em> albergan el mayor número de especies 
                            endémicas: plantas y animales que no se encuentran en ningún otro lugar del mundo.</p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform duration-500 
                    group-hover:scale-x-100"></div>
                </div>

                <!-- CAJA 3: Páramos -->
                <div class="group relative h-96 bg-gray-900 md:col-span-2 w-full max-w-sm mx-auto md:max-w-full overflow-hidden rounded-md">
                    <img src="../../imagenes/imagenes_bosque/caja3.webp" alt="Páramos" class="absolute inset-0 h-full w-full object-cover 
                    opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white text-left">
                        <!-- Fondo negro translúcido que ahora SÍ ocupa desde arriba del texto hasta abajo -->
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/50"></div>
                        <!-- Contenido de texto -->
                        <h3 class="relative z-10 text-xl font-bold">Páramos</h3>
                        <p class="relative z-10 mt-2 text-[14px]">Los <em>páramos</em> son ecosistemas de pastizales de alta altitud situados por 
                        encima del límite de vegetación arbórea, pero por debajo de la línea de nieve...</p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform duration-500 
                    group-hover:scale-x-100"></div>
                </div>

                <!-- CAJA 4: Bosques Secos -->
                <div class="group relative h-96 bg-gray-900 md:col-span-3 w-full max-w-sm mx-auto md:max-w-full overflow-hidden rounded-md">
                    <img src="../../imagenes/imagenes_bosque/caja4.webp" alt="Bosques Secos" class="absolute inset-0 h-full w-full object-cover 
                    opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white text-left">
                        <!-- Fondo negro translúcido que ahora SÍ ocupa desde arriba del texto hasta abajo -->
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/60"></div>
                        <!-- Contenido de texto -->
                        <h3 class="relative z-10 text-xl font-bold">Bosques Secos Tropicales</h3>
                        <p class="relative z-10 mt-2 text-[14px]">Los <em>bosques tropicales caducifolios (o secos)</em> albergan una amplia gama 
                        de especies con adaptaciones únicas. Trabajamos con las comunidades locales para conservar estos bosques frágiles.</p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform duration-500 
                    group-hover:scale-x-100"></div>
                </div>

                <!-- CAJA 5: Ecosistemas Marinos -->
                <div class="group relative h-96 bg-gray-900 md:col-span-3 w-full max-w-sm mx-auto md:max-w-full overflow-hidden rounded-md">
                    <img src="../../imagenes/imagenes_bosque/caja5.webp" alt="Ecosistemas Marinos" class="absolute inset-0 h-full w-full 
                    object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white text-left">
                        <!-- Fondo negro translúcido que ahora SÍ ocupa desde arriba del texto hasta abajo -->
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/40"></div>
                        <!-- Contenido de texto -->
                        <h3 class="relative z-10 text-xl font-bold">Ecosistemas Marinos y Costeros</h3>
                        <p class="relative z-10 mt-2 text-[14px]">Los <em>manglares, estuarios, lagunas y océanos</em> sustentan las pesquerías y 
                        aportan agua dulce para los humedales. Son clave por su biodiversidad marina y para aves migratorias.</p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform duration-500 
                    group-hover:scale-x-100"></div>
                </div>
            </div>
        </section>

        <!-- Contenedor Previniendo pérdidas irreemplazables ADAPTADA -->
        <section class="w-full relative z-0 pt-4 pb-6">
            
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/imagenes_bosque/Zamora-Municipal-Conservation-and-Sustainable-Use-Area_Forest.webp')] 
            bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 px-6 md:px-12 lg:px-48 min-h-112 md:h-112.5">
                
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/40 md:bg-transparent" style="background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, 
                rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.2) 100%);"></div>
                
                <!-- Bloque de textos -->
                <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10 
                    [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">
                    <!-- Título principal -->
                    <h2 class="text-2xl sm:text-3xl font-semibold mb-2.5 w-full leading-tight">
                        Previniendo pérdidas irreemplazables
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="font-semibold tracking-wider text-xl sm:text-2xl mb-4 w-full">
                        Amenazas a los bosques y lo que la <br class="hidden sm:block">protección previene
                    </h3>
                    <!-- Párrafos descriptivos -->
                    <p class="mb-4 text-[16px] leading-relaxed w-full">
                        Los bosques intactos enfrentan una pressure creciente debido a la <br class="hidden md:block">deforestación, la degradación 
                        y la fragmentación. Estas amenazas <br class="hidden md:block">pueden provenir del cambio de uso de suelo, la extracción 
                        <br class="hidden md:block">insostenible, las carreteras que abren áreas remotas a actividades 
                        <br class="hidden md:block">ilegales y los incendios cada vez más intensos impulsados por el 
                        <br class="hidden md:block">clima.
                    </p>
                    <p class="text-[16px] leading-relaxed w-full">
                        Proteger los bosques a tiempo, antes de que sufran una degradación <br class="hidden md:block">severa, puede prevenir 
                        pérdidas irreversibles. Cuando los bosques <br class="hidden md:block">permanecen intactos, continúan sustentando la 
                        biodiversidad, <br class="hidden md:block">almacenando carbono, manteniendo los ciclos 
                        del agua y <br class="hidden md:block">proporcionando una base para comunidades resilientes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo puedes ayudar ADAPTADA -->
        <section class="w-full max-w-6xl mx-auto py-8 px-6 box-border">
            <!-- Contenedor con grid responsive e inversión de orden -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-3 order-1 md:order-2 items-center md:items-start w-full">
                    <!-- Título principal -->
                    <h2 class="text-[rgb(72,81,79)] font-medium tracking-wider text-3xl w-full leading-tight">
                        Cómo puedes ayudar a proteger los bosques
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Proteger los bosques a gran escala requiere colaboración, compromiso y una visión de largo plazo. En Naturaleza y Cultura 
                        Internacional trabajamos junto a pueblos indígenas, comunidades locales, gobiernos y aliados para fortalecer la gestión 
                        territorial, ampliar las áreas de conservación y mantener los bosques en pie donde más se necesitan.
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Conocer, valorar y apoyar estos esfuerzos es fundamental para asegurar que los paisajes más biodiversos del planeta sigan 
                        siendo fuente de vida para las generaciones presentes y futuras.
                    </p>
                    <!-- Botón adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full font-bold 
                    hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="text-sm">Conoce más sobre nuestro trabajo</span>
                    </a>
                </div>      

                <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
                <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/imagenes_bosque/Team-Gift-Explain-Forest-Biodiversity.webp" alt="Proteger los bosques" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?> <!-- ADAPTADA -->
    </div>
    
</body>
</html>