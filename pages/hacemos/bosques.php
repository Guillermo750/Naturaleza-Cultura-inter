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
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../../components/header.php"; ?>

    <!-- Contenedor principal Imagen de fondo + título encima encima -->
    <section class="relative w-full h-[60vh] bg-[url(../../imagenes/imagenes_bosque/forest.jpg)] bg-cover bg-center 
             bg-no-repeat flex items-center">
        <!-- Contenedor centrado y alineado (ocupa todo el ancho máximo según la pantalla) -->
        <div class="container mx-auto px-24 mt-6 max-w-5xl">
            <!-- Bloque con fondo negro translúcido [bg-black/30] -->
            <div class="inline-block bg-black/30 p-6 max-w-xl rounded-lg ">
                <!-- TÍTULO -->
                <h1 class="text-white text-5xl font-semibold tracking-wide text-left">Bosques</h1>
            </div>
        </div>
    </section>
    <!-- Línea divisoria inferior aplicada exactamente con tu ajuste -->
    <img src="../../imagenes/imagenes_principal/linea13_debajo_video.png" alt="Línea divisoria" class="block w-full h-auto relative z-10" 
    style="margin-top: -10px;"> 

    <!-- Contenedor Nuestro Trabajo ADAPTADA -->
    <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 text-center md:text-left overflow-hidden">  
        <!-- Título verde pequeño -->
        <h2 class="text-3xl md:text-4xl text-[rgb(15,125,63)] tracking-wider uppercase w-full">NUESTRO TRABAJO</h2>
        
        <!-- Subtítulo grande -->
        <h3 class="text-2xl md:text-3xl text-[rgb(72,81,79)] font-normal leading-tight w-full">Protección de bosques saludables y conectados</h3>
        
        <!-- Párrafo destacado (más grande) -->
        <p class="font-light text-[16px] text-[rgb(72,81,79)] w-full">Naturaleza y Cultura trabaja por proteger grandes extensiones de bosques. 
            Ecosistemas críticos que sustentan la biodiversidad, regulan el clima, proveen agua limpia y apoyan a las comunidades 
            indígenas y locales.</p>
            
        <!-- Párrafo normal -->
        <p class="text-[16px] text-[rgb(72,81,79)] w-full">Al conservar paisajes extensos, salvaguardamos corredores biológicos esenciales, 
            prevenimos la deforestación y fortalecemos la resiliencia de los ecosistemas, garantizando que la naturaleza prospere para las 
            generaciones futuras.</p>
            
        <!-- Último párrafo en verde destacado -->
        <p class="text-lg md:text-xl text-[rgb(15,125,63)] font-medium w-full">Trabajamos junto a comunidades locales, pueblos indígenas y 
            gobiernos para fortalecer la conservación de bosques en América Latina.</p>
    </section>

    <!-- Contenedor Programas Destacados -->
    <section class="relative container mx-auto px-4 py-8">
        <!-- Imagen decorativa a la izquierda alineada con la altura del título -->
        <div class="absolute left-0 top-12 hidden lg:block w-32 pointer-events-none ml-3.5 -mt-2">
            <img src="../../imagenes/imagenes_bosque/nci-cp-illustration1-countryp.png" alt="Decoración lateral" 
            class="w-full h-auto object-contain">
        </div>

        <!-- Cabecera de la sección: Título + Línea a la izquierda, Botón a la derecha -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 pl-0 lg:pl-36">
            <div>
                <h2 class="text-3xl font-normal text-[rgb(72,81,79)]">Programas Destacados</h2>
                <!-- Imagen de la línea debajo del título -->
                <img src="../../imagenes/imagenes_bosque/linea_beige.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
            </div>
            <!-- Botón a la derecha alineado al final -->
            <a href="#" class="mt-4 md:mt-0 bg-[rgb(72,81,79)] text-white px-6 py-3 rounded-full hover:bg-[rgb(31,72,34)] 
                font-medium text-sm transition"> Explora todos los programas
            </a>
        </div>

        <!-- Contenedor de las Tarjetas (Alineado con el contenido) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pl-0 lg:pl-36">
            <!-- Tarjeta 1 -->
            <div class="flex flex-col items-center">
                <div class="relative w-full">
                    <img src="../../imagenes/imagenes_bosque/carousel1.webp" alt="Programa 1" class="w-full h-96 object-cover">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                </div>
                <div class="p-4 text-center">
                    <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_bosque/ubicacion.jpg" 
                    alt="Ubicación" class="w-5 h-6 inline-block"> ECUADOR, PERÚ</p>
                    <div class="flex justify-center gap-2 mb-2 py-4 uppercase">
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                    </div>
                    <h3 class="font-medium text-[rgb(72,81,79)] text-[22px]">Corredor de Conservación Transfronterizo Andino Amazónico</h3>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="flex flex-col items-center">
                <div class="relative w-full">
                    <img src="../../imagenes/imagenes_bosque/carousel2.jpg" alt="Programa 2" class="w-full h-96 object-cover">
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                </div>
                <div class="p-4 text-center">
                    <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_bosque/ubicacion.jpg" 
                    alt="Ubicación" class="w-5 h-6 inline-block"> ECUADOR</p>
                    <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                    <div class="flex justify-center gap-2 mb-2 py-4 uppercase"> 
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">AGUA</span>
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Comunidades Locales</span>
                        
                    </div>
                    <h3 class="font-medium text-[rgb(72,81,79)] text-[22px]">Conservación de Fuentes de Agua</h3>
                </div>
            </div>
                
            <!-- Tarjeta 3 -->
            <div class="flex flex-col items-center">
                <div class="relative w-full">
                    <img src="../../imagenes/imagenes_bosque/carousel3.webp" alt="Programa 3" class="w-full h-96 object-cover">
                </div>
                <div class="p-4 text-center">
                    <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_bosque/ubicacion.jpg" 
                    alt="Ubicación" class="w-5 h-6 inline-block "> PERÚ</p>
                    <div class="flex justify-center gap-2 mb-2 py-4 uppercase">
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                    </div>
                    <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] ">Bosques Secos del Marañón</h3>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="flex flex-col items-center">
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
            <div class="flex flex-col items-center">
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
    <section class="w-full max-w-4xl mx-auto py-7 px-6 overflow-hidden">
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
    <section class="w-full bg-[rgb(244,244,237)] py-10 px-6 overflow-hidden">
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
                    un liderazgo local sólido y los recursos a largo plazo necesarios para mantener la protección frente a los cambios políticos, 
                    económicos y climáticos.
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
    <section class="w-full max-w-4xl mx-auto py-12 px-6 overflow-hidden">
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
                    interrumpen, las cuencas hidrográficas se alteran y los bosques se vuelven más vulnerables a los incendios, las actividades 
                    ilegales y el cambio de uso de suelo. <b>Conectar bosques protegidos</b> ayuda a mantener el funcionamiento de paisajes 
                    enteros, ahora y en el futuro.
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

    <!-- Contenedor Trabajamos en los ecosistemas más biodiversos -->
    <section class="container mx-auto flex flex-col justify-start items-start my-6 space-y-4 py-8 px-6 max-w-4xl text-left">
        <!-- Título verde pequeño -->
        <h2 class="text-3xl text-[rgb(72,81,79)] tracking-wider uppercase">Ecosistemas que protegemos</h2>
        <!-- Subtítulo grande -->
        <h3 class="text-2xl font-normal leading-tight text-[rgb(15,125,63)]">Trabajamos en los ecosistemas más biodiversos, pero también 
            más amenazados del planeta.</h3>
        <!-- Párrafo destacado (más grande) -->
        <p class="leading-relaxed text-[16px] text-[rgb(72,81,79)]">Un ecosistema está compuesto por todos los seres vivos que comparten un 
            entorno, desde plantas y animales hasta organismos microscópicos. Garantizar la integridad y la salud de ecosistemas completos 
            proporciona hábitat para la vida silvestre y servicios ecosistémicos vitales para toda forma de vida.
        </p>
    </section>

    <section class="container mx-auto max-w-5xl px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- CAJA 1: Selva Amazónica -->
            <div class="group relative overflow-hidden h-96 bg-gray-900">
                <!-- Imagen de fondo -->
                <img src="../../imagenes/imagenes_bosque/caja1.webp" alt="Páramos" 
                    class="absolute inset-0 h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 
                    group-hover:scale-105">
                <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white">
                    <div class="absolute inset-x-0 top-3 bottom-0 bg-black/60"></div>
                    <h3 class="relative z-10 text-xl font-bold">Selva Amazónica</h3>
                    <p class="relative z-10 mt-2 text-[14px]">
                        La <em>selva amazónica</em> es el bosque tropical más extenso de la Tierra y alberga una gran diversidad de especies y 
                        vegetales, además de pueblos indígenas.
                    </p>
                </div>
                <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform 
                duration-500 group-hover:scale-x-100"></div>
            </div>

            <!-- CAJA 2: Bosque Nuboso Andino -->
            <div class="group relative overflow-hidden h-96 bg-gray-900">
                <!-- Imagen de fondo -->
                <img src="../../imagenes/imagenes_bosque/caja2.webp" alt="Páramos" 
                    class="absolute inset-0 h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 
                    group-hover:scale-105">
                <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white">
                    <div class="absolute inset-x-0 top-3 bottom-0 bg-black/50"></div>
                    <h3 class="relative z-10 text-xl font-bold">Bosque Nuboso Andino</h3>
                    <p class="relative z-10 mt-2 text-[14px]">
                        Los <em>bosques nublados andinos</em>  albergan el mayor número de especies endémicas: plantas y animales que no se encuentran en ningún otro 
                        lugar del mundo.
                    </p>
                </div>
                <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform 
                duration-500 group-hover:scale-x-100"></div>
            </div>

            <!-- CAJA 3: Páramos -->
            <div class="group relative overflow-hidden h-96 bg-gray-900">
                <!-- Imagen de fondo -->
                <img src="../../imagenes/imagenes_bosque/caja3.webp" alt="Páramos" 
                    class="absolute inset-0 h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 
                    group-hover:scale-105">
                <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white">
                    <div class="absolute inset-x-0 top-3 bottom-0 bg-black/50"></div>
                    <h3 class="relative z-10 text-xl font-bold">Páramos</h3>
                    <p class="relative z-10 mt-2 text-[14px]">
                        Los <em>páramos</em> son ecosistemas de pastizales de alta altitud situados por encima del límite de vegetación 
                        arbórea, pero por debajo de la línea de nieve...
                    </p>
                </div>
                <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform 
                duration-500 group-hover:scale-x-100"></div>
            </div>

            <!-- CONTENEDOR CAJAS 4 Y 5 -->
            <div class="col-span-3 flex justify-center gap-4">
                <!-- CAJA 4 -->
                <div class="group relative overflow-hidden h-96 bg-gray-900 w-96">
                    <!-- Imagen de fondo -->
                    <img src="../../imagenes/imagenes_bosque/caja4.webp" alt="Páramos" 
                        class="absolute inset-0 h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 
                        group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white">
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/60"></div>
                        <h3 class="relative z-10 text-xl font-bold">Bosques Secos Tropicales</h3>
                        <p class="relative z-10 mt-2 text-[14px]">
                            Los <em>bosques tropicales caducifolios (o secos)</em> albergan una amplia gama de especies con adaptaciones 
                            únicas. Trabajamos con las comunidades locales para conservar estos bosques frágiles.
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform 
                    duration-500 group-hover:scale-x-100"></div>
                </div>

                <!-- CAJA 5 -->
                <div class="group relative overflow-hidden h-96 bg-gray-900 w-96">
                    <!-- Imagen de fondo -->
                    <img src="../../imagenes/imagenes_bosque/caja5.webp" alt="Páramos" 
                        class="absolute inset-0 h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 
                        group-hover:scale-105">
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 z-10 w-full p-6 text-white">
                        <div class="absolute inset-x-0 top-3 bottom-0 bg-black/40"></div>
                        <h3 class="relative z-10 text-xl font-bold">Ecosistemas Marinos y Costeros</h3>
                        <p class="relative z-10 mt-2 text-[14px]">
                            Los <em>manglares, estuarios, lagunas y océanos</em> sustentan las pesquerías y aportan agua dulce para los 
                            humedales. Son clave por su biodiversidad marina y para aves migratorias.
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 z-20 h-1.5 w-full origin-left scale-x-0 bg-[#f58320] transition-transform 
                    duration-500 group-hover:scale-x-100"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor Previniendo pérdidas irreemplazables -->
    <section class="container mx-auto relative z-0 py-6">
        <!-- La línea con el color de fondo colocada encima y solapada con un margen inferior negativo -->
        <img src="../../imagenes/imagenes_bosque/linea01.png" alt="Línea divisoria" class="block w-full h-auto relative z-20" 
        style="margin-bottom: -10px;"> 
        <div class="p-16 bg-[url('../../imagenes/imagenes_bosque/Zamora-Municipal-Conservation-and-Sustainable-Use-Area_Forest.webp')] 
            bg-cover bg-no-repeat flex items-center relative z-10 " 
            style="height: 450px;">
            <!-- CAPA DE OSCURECIDO DIFUMINADO: Usa CSS nativo para crear un degradado perfecto e inmune a las versiones de Tailwind -->
            <div class="absolute inset-0 z-0" 
                style="background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 40%, rgba(0,0,0,0) 70%);">
            </div>
            <div class="w-full max-w-2xl flex flex-col text-white  relative z-10 [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">
                <!-- Contenedor del h2 con un dibujo de la línea debajo -->
                    <!-- Título principal -->
                    <h2 class="text-3xl font-semibold mb-2.5 ">Previniendo pérdidas irreemplazables</h2>
                    <!-- Título pequeño -->
                    <h3 class="font-semibold tracking-wider text-2xl mb-2.5">Amenazas a los bosques y lo que la <br>protección previene</h3>
                <p class="mb-2.5 text-[16px]">
                    Los bosques intactos enfrentan una presión creciente debido a la <br>deforestación, la degradación y la fragmentación. 
                    Estas amenazas <br>pueden provenir del cambio de uso de suelo, la extracción <br>insostenible, las carreteras que 
                    abren áreas remotas a actividades <br>ilegales y los incendios cada vez más intensos impulsados por el <br>clima.
                </p>
                <p class="text-[16px]">
                    Proteger los bosques a tiempo, antes de que sufran una degradación <br>severa, puede prevenir pérdidas irreversibles. 
                    Cuando los bosques <br>permanecen intactos, continúan sustentando la biodiversidad, <br>almacenando carbono, manteniendo los ciclos 
                    del agua y <br>proporcionando una base para comunidades resilientes.
                </p>
            </div>
        </div>
        <!-- Línea divisoria inferior aplicada exactamente con tu ajuste -->
        <img src="../../imagenes/imagenes_bosque/linea02.png" alt="Línea divisoria" class="absolute bottom-0 left-0 z-10 block w-full h-auto">
    </section>

    <!-- Contenedor Cómo puedes ayudar ADAPTADA -->
    <section class="w-full max-w-6xl mx-auto py-8 px-6 overflow-hidden">
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
                <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full font-bold hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start flex-shrink-0">
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

</body>
</html>