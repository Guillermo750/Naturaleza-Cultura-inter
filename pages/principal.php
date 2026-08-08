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
    <script defer src="../js/app.js"></script>
    <title>Nature and Culture International</title>
</head>

<body>
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/header.php"; ?>

    <!-- Contenedor Padre: Vídeo de fondo + todo el contenido encima -->
    <section class="relative w-full h-screen overflow-hidden flex flex-col pt-3">
        <!-- El Vídeo de fondo -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="../video/Header-Video_h265_20mb.mp4" type="video/mp4">
        </video>
        <!-- CONTENEDOR GENERAL -->
        <div class="relative z-20 w-full px-24 pt-6 flex flex-col flex-1">
            <!-- 3. CONTENEDOR DEL TEXTO PRINCIPAL RÉPLICA -->
            <div class="flex flex-col items-start mt-48 pl-44 flex-1 ">
                <div class="flex flex-col items-start space-y-6 max-w-2xl bg-black/30 p-6">
                    <h1 class="text-white text-5xl font-semibold text-left">
                        30 AÑOS <br>COMPROMETIDOS <br>CON LA NATURALEZA
                    </h1>
                    <a href="#" class="bg-white text-black px-8 py-3 rounded-full font-semibold hover:text-[rgb(15,125,63)]">
                        <span class="text-sm">Celebra con nosotros</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Línea divisoria inferior aplicada exactamente con tu ajuste -->
        <img src="../imagenes/imagenes_principal/linea13_debajo_video.png" alt="Línea divisoria" class="block w-full h-auto relative z-10" 
        style="margin-top: -10px;"> 
    </section>

    <!-- Contenedor principal de dos columnas -->
    <section class="container flex flex-col md:flex-row items-start gap-4 w-full max-w-6xl mx-auto p-4 my-6 pt-8">
        <!-- COLUMNA IZQUIERDA -->
        <div class="w-full md:w-1/2 flex flex-col">
            <!-- CONTENEDOR DE IMAGEN Y BORDES (Optimizado con padding fijo) -->
            <div class="relative pt-3 pl-3 self-start">
                <!-- Línea superior -->
                <img src="../imagenes/imagenes_principal/linea06.png" class="absolute top-0 left-3 w-[calc(100%-12px)] h-2 object-fill" alt="">
                <!-- Línea izquierda -->
                <img src="../imagenes/imagenes_principal/linea07.png" class="absolute top-3 left-0 h-[calc(100%-12px)] w-2 object-fill" alt="">
                <!-- Foto principal -->
                <img src="../imagenes/imagenes_principal/imagen35.jpg" class="w-full h-auto block" alt="Mujer Indígena">
            </div>
            <!-- BLOQUE VERDE (Compactado y acoplado perfectamente con mt-[-1px]) -->
            <div class="w-full -mt-px bg-[url('../imagenes/imagenes_principal/fondo-verde.svg')] bg-size:100%_100% bg-no-repeat p-8 text-white">
                <!-- CONTENEDOR DE LAS TARJETAS -->
                <div class="flex flex-wrap justify-between gap-6 text-center">
                    <!-- INICIO: INSERTA TUS RECUADROS / TARJETAS AQUÍ -->
                    <div class="flex flex-col flex-1">
                        <h3 class="font-bold text-xl">Más de 10 millones</h3> 
                        <p class="">de hectáreas protegidas</p> 
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="font-bold text-xl">Más de 3 mil millones</h3> 
                        <p class="">de toneladas de carbono almacenadas</p>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="font-bold text-xl">94</h3> 
                        <p class="">culturas locales apoyadas</p>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="font-bold text-xl">470</h3> 
                        <p class="">especies de vertebrados amenazadas protegidas</p>
                    </div>
                    <!-- FIN DE LAS TARJETAS -->
                </div>
            </div>
        </div>
        <!-- COLUMNA DERECHA: Texto y botón (Tu código actual) -->
        <div class="w-full md:w-1/2 flex flex-col justify-between min-h-full">
            <!-- Contenedor de icono, texto con una imagen de línea en medio y botón -->
            <div>
                <!-- Icono pequeño -->
                <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen04.svg" alt="">
                <!-- Contenedor del h2 con un dibujo de la línea debajo -->
                <div class="w-fit flex flex-col mb-4">
                    <h2 class="text-2xl font-semibold text-[rgb(72,81,79)]">
                        UN ENFOQUE LOCAL PARA <br>PROTEGER PAISAJES <br>NATURALES
                    </h2>
                  
                    <img src="../imagenes/imagenes_principal/linea01.png" class="h-17 w-32 mt-4">
                </div>
                <p class="mb-4 text-gray-600">
                    Hemos protegido más de <span class="text-[rgb(72,81,79)] font-semibold">10 millones de hectáreas</span> 
                    de los paisajes más biodiversos en América Latina y almacenando más de 
                    <span class="text-[rgb(72,81,79)] font-semibold">3 mil millones de toneladas de carbono</span> en acuerdo 
                    con pueblos indígenas y comunidades locales.
                </p>
                <p class="text-gray-600">
                    Promovemos soluciones creadas localmente porque vivimos donde trabajamos. Nuestro enfoque 
                    inclusivo basado en la comunidad es lo que nos hace únicos. También 
                    <span class="text-[rgb(72,81,79)] font-semibold">es lo que nos ha funcionado durante más de 30 años.</span>
                </p>
            </div>
            <!-- El botón se mantiene corto y alineado con self-start -->
            <a href="#" class="self-start mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full 
            font-bold hover:bg-[rgb(31,72,34)] transition-colors ">
                <span class="text-sm">Nuestro Enfoque y Visión</span>
            </a>
        </div>
    </section>

    <!-- Contenedor de mapa interactivo de proyectos y zonas de trabajo -->
    <section class="container mx-auto relative overflow-visible">
        <!-- IMAGEN DE FONDO DEL SECTION -->
        <img src="../imagenes/imagenes_principal/imagen05.png" alt="" class="absolute inset-0 w-full h-full object-fill">
        <!-- IMAGEN DEL GUACAMAYO (Ubicado exactamente abajo a la izquierda, cruzando la línea) -->
        <!-- 'bottom-0' lo clava abajo del todo, '-mb-12' lo hace pisar la línea y 'left-16' o 'left-32' lo alinea con tus textos -->
        <img src="../imagenes/imagenes_principal/guacamayo.webp" alt="Guacamayo decorativo" 
            class="absolute bottom-0 -mb-40 left-24 w-48 h-auto pointer-events-none z-30 hidden md:block">
        <!-- TODO TU CONTENIDO ENCIMA DEL FONDO -->
        <div class="flex flex-col md:flex-row items-center gap-4 w-full max-w-6xl mx-auto p-4 my-6 relative z-10">
            <!-- COLUMNA IZQUIERDA -->
            <div class="w-full md:w-1/2 flex flex-col justify-between min-h-full">
                <!-- Icono pequeño, texto con una imagen de línea en medio y botón -->
                <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen06.svg" alt="">
                <!-- Contenedor del h2 con un dibujo de la línea debajo -->
                <div class="w-fit flex flex-col mb-4">
                    <h2 class="text-3xl font-normal text-[rgb(72,81,79)]">Explora nuestro trabajo</h2>
                    <img src="../imagenes/imagenes_principal/linea02.png" class="h-17 w-32 mt-4">
                </div>
                <p class="mb-4 text-[rgb(72,81,79)]">Nos enfocamos en proteger y conectar paisajes naturales en Ecuador, Perú, México, Bolivia 
                    y Colombia.
                </p>
                <p class="mb-4 text-[rgb(72,81,79)]"> Los lugares que protegemos incluyen
                    <span class="text-[rgb(72,81,79)] font-semibold">algunas de las mayores reservas de carbono y los ecosistemas más ricos 
                    en especies del mundo.
                    </span>
                </p>
                <!-- El botón se mantiene corto y alineado con self-start -->
                <a href="#" class="self-start mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full 
                font-semibold hover:bg-[rgb(31,72,34)]">
                    <span class="text-sm">Apoya proyectos urgentes</span>
                </a>
            </div>
            
            <!-- COLUMNA DERECHA (Contenedor del mapa con las líneas extendidas) -->
            <div class="relative w-full max-w-xl mx-auto py-3 px-3">
                <!-- Línea superior -->
                <img src="../imagenes/imagenes_principal/linea08.png" alt="" class="absolute top-0 left-0 w-full h-2 z-10">
                <!-- Línea derecha -->
                <img src="../imagenes/imagenes_principal/linea09.png" alt="" class="absolute top-0 right-0 h-full w-2 z-10">
                <!-- Línea inferior -->
                <img src="../imagenes/imagenes_principal/linea10.svg" alt="" class="absolute bottom-0 left-0 w-full h-2 z-10">
                <!-- Contenedor Principal del Mapa -->
                <div class="relative w-full h-500">
                    <!-- Imagen del mapa (corregida para ocupar todo el espacio) -->
                    <img src="../imagenes/imagenes_principal/mapa-principal.JPG" alt="Mapa" class="w-full h-full"> 
                </div>
            </div> 
        </div>
    </section>
    <!-- La línea con el color de fondo colocada fuera y solapada con un margen negativo -->
    <img src="../imagenes/imagenes_principal/linea12_debajo_color.png" alt="Línea divisoria" class="block w-full h-auto relative z-20" 
    style="margin-top: -30px;">

    <!-- Contenedor de lo que hacemos -->
    <section class="container mx-auto p-10">
        <div class="w-full flex flex-col items-center">
            <div class="w-fit flex flex-col mb-4">
                <!-- Icono pequeño -->
                <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen09.svg" alt="">
                <!-- Contenedor del h2 con un dibujo de la línea debajo y un texto -->
                <h2 class="text-3xl font-normal text-[rgb(72,81,79)] font-serif">Lo que hacemos</h2>
                  
                <img src="../imagenes/imagenes_principal/linea03.png" class="h-17 w-40 mt-4">
                <p class="text-[rgb(72,81,79)] mb-4 mt-4">Trabajamos en 5 áreas estratégicas para asegurar un <br>futuro más sostenible.</p>
            </div>
        </div>
        <div class="flex justify-center items-center gap-8">
            <div class="flex flex-col items-center">
                <a href="" class="flex flex-col items-center"><img src="../imagenes/imagenes_principal/imagen10.svg" alt="Bosque" class="w-28 h-28"> 
                <h3 class="text-[rgb(15,125,63)] text-center mt-1">Bosques</h3></a> 
            </div>
            <div class="flex flex-col items-center">
                <a href="" class="flex flex-col items-center"><img src="../imagenes/imagenes_principal/imagen11.svg" alt="Comunidades Locales" 
                    class="w-28 h-28">
                <h3 class="text-[rgb(15,125,63)] text-center mt-1">Comunidades Locales</h3></a> 
            </div>
            <div class="flex flex-col items-center">
                <a href="" class="flex flex-col items-center"><img src="../imagenes/imagenes_principal/imagen12.svg" alt="Clima" class="w-28 h-28">
                <h3 class="text-[rgb(15,125,63)] text-center mt-1">Clima</h3></a> 
            </div>
            <div class="flex flex-col items-center">
                <a href="" class="flex flex-col items-center"><img src="../imagenes/imagenes_principal/imagen13.svg" alt="Biodiversidad" 
                    class="w-28 h-28">
                <h3 class="text-[rgb(15,125,63)] text-center mt-1">Biodiversidad</h3></a> 
            </div>
            <div class="flex flex-col items-center">
                <a href="" class="flex flex-col items-center"><img src="../imagenes/imagenes_principal/imagen14.svg" alt="Fuentes de Agua" 
                    class="w-28 h-28">
                <h3 class="text-[rgb(15,125,63)] text-center mt-1">Fuentes de Agua</h3></a> 
            </div>
        </div>
    </section>

    <!-- Contenedor Imagen con línea decorativa -->
    <div class="relative w-full" style="height: 810px;">
        <div class="w-full h-full bg-cover bg-center -mt-10" style="background-image: url('../imagenes/imagenes_principal/imagen16.webp');"></div>

        <img src="../imagenes/imagenes_principal/linea11_debajo_imagen.png" alt="Línea divisoria" class="block w-full h-auto relative z-10" 
        style="margin-top: -10px;"> 
    </div>

    <!-- Contenedor Conoce nuestro trabajo  -->
    <section class="container mx-auto w-full py-6">
        <!-- 1. BLOQUE SUPERIOR DE TEXTOS (Fuera del fondo beige) -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 w-full max-w-6xl p-4">
            <!-- Columna Izquierda -->
            <div class="w-full md:w-auto flex flex-col justify-center items-start">
                <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen18.svg" alt="">
                <div class="w-fit flex flex-col">
                    <h2 class="text-3xl font-normal text-[rgb(72,81,79)]">CONOCE <br>NUESTRO TRABAJO</h2>
                    <img src="../imagenes/imagenes_principal/linea04.png" class="h-17 w-32 mt-4">
                </div>
            </div>
            <!-- Columna Derecha -->
            <div class="w-full md:w-auto flex flex-col justify-center items-start">
                <p class="mb-4 text-[rgb(72,81,79)]">Descubre quiénes somos, cómo <br>trabajamos y por qué luchamos 
                    <br> para proteger paisajes naturales.
                </p>
                <a href="#" class="self-start mt-2 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full 
                            font-semibold hover:bg-[rgb(31,72,34)]"><span class="text-sm">Explora nuestra galería</span>
                </a>
            </div>
        </div>
        <!-- 2. BLOQUE INFERIOR: El fondo beige vive SOLO dentro del contenedor de la imagen del lago -->
        <div class="relative w-full py-6 overflow-visible">
            <!-- Imagen de fondo beige exclusiva para este bloque -->
            <img src="../imagenes/imagenes_principal/imagen17.png" alt="" class="absolute inset-0 w-full h-full object-fill pointer-events-none">
            <!-- PALMERA (Alineada a la línea de ENCIMA del fondo beige) -->
            <img src="../imagenes/imagenes_principal/palmera.webp" alt="Palmera decorativa" 
                class="absolute -top-44 left-0 w-auto h-4/5 max-w-[220%] object-contain pointer-events-none z-20 hidden md:block">
            <!-- FELINO (Alineado a la línea de ABAJO del fondo beige) -->
            <img src="../imagenes/imagenes_principal/jaguar.webp" alt="Felino decorativo" 
                class="absolute bottom-0 -mb-5 right-16 w-auto h-2/5 max-w-[220%] object-contain pointer-events-none z-30 hidden md:block">
            <!-- Contenedor del lago con las líneas y la imagen -->
            <div class="relative z-30 w-full max-w-2xl mx-auto py-3 px-3">
                <img src="../imagenes/imagenes_principal/linea17_azul_encima.png" alt="" class="absolute top-0 left-0 w-full h-2 z-10">
                <img src="../imagenes/imagenes_principal/linea17_azul_derecha.png" alt="" class="absolute top-0 right-0 h-full w-2 z-10">
                <img src="../imagenes/imagenes_principal/linea17_azul_izquierda.png" alt="" class="absolute top-0 left-0 h-full w-2 z-10">
                <img src="../imagenes/imagenes_principal/linea17_azul_bajo.png" alt="" class="absolute bottom-0 left-0 w-full h-2 z-10">
                <div class="relative w-full">
                    <img src="../imagenes/imagenes_principal/imagen-del-lago.JPG" alt="Lago" class="w-full h-full object-cover"> 
                </div>
            </div>
        </div>
    </section>
    <!-- La línea con el color de fondo colocada fuera y solapada con un pequeño margen negativo -->
    <img src="../imagenes/imagenes_principal/linea12_debajo_color.png" alt="Línea divisoria" class="block w-full h-auto relative z-20 mb-14" 
    style="margin-top: -30px;">

    <!-- Contenedor imagen de fondo con la columa de texto con su botón y líneas colocadas encima e inferior en la imagen  -->
    <section class="container mx-auto relative z-0">
        <!-- La línea con el color de fondo colocada encima y solapada con un margen inferior negativo -->
        <img src="../imagenes/imagenes_principal/linea16_encima_mono.png" alt="Línea divisoria" class="block w-full h-auto relative z-20" 
        style="margin-bottom: -10px;"> 
        <div class="p-16 bg-[url('../imagenes/imagenes_principal/imagen23.webp')] bg-cover bg-no-repeat flex items-center relative z-10" 
            style="height: 450px;">
            <div class="w-full flex flex-col items-start">
                <!-- Icono pequeño, texto con una imagen de línea en medio y botón -->
                <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen22.svg" alt="">
                <!-- Contenedor del h2 con un dibujo de la línea debajo -->
                <div class="w-fit flex flex-col mb-4">
                    <h2 class="text-3xl font-normal text-[rgb(72,81,79)]">¿ESTÁS LISTO/A PARA HACER UNA <br>DIFERENCIA?</h2>
                    <img src="../imagenes/imagenes_principal/linea05.png" class="h-17 w-32 mt-4">
                </div>
                <p class="mb-4 text-[rgb(72,81,79)]">Las hectáreas de bosque que conservamos, las especies que protegemos, <br>
                    el carbono que capturamos, las culturas y las comunidades locales con las <br>que trabajamos; todo comienza contigo
                    <span class="text-[rgb(72,81,79)] font-semibold">Tu apoyo marca la diferencia para <br>las generaciones de hoy y mañana.
                    </span>
                </p>
                <!-- El botón se mantiene corto y alineado con self-start -->
                <a href="#" class="self-start mt-2 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full 
                    font-semibold hover:bg-[rgb(31,72,34)]"><span class="text-sm">Ingresa Aquí</span>
                </a>
            </div>
        </div>
    </section>
    <!-- La línea con el color de fondo colocada fuera y solapada con un margen negativo -->
    <img src="../imagenes/imagenes_principal/linea11_debajo_imagen.png" alt="Línea divisoria" class="block w-full h-auto relative z-10" 
    style="margin-top: -10px;"> 

    <!-- Contenedor NOTICIAS Y CASOS DE ÉXITO -->
    <section class="container mx-auto py-6 w-full">
        <!-- Cabecera: Dividida en dos columnas perfectas -->
        <div class="grid grid-cols-2 gap-4 mb-8">
            <!-- Columna Izquierda: Icono arriba, H2 abajo (Desplazados a la derecha) -->
            <div class="flex flex-col items-end justify-end w-full">
                <div class="flex flex-col items-start">
                    <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen25.svg" alt="Icono">
                    <h2 class="text-3xl font-normal text-[rgb(72,81,79)] leading-none m-0">
                        NOTICIAS Y CASOS DE ÉXITO
                    </h2>
                </div>
            </div>
            <!-- Columna Derecha: Botón alineado a la base del H2 -->
            <div class="flex items-end justify-start pt-4 mx-4">
                <a href="#" class="inline-block bg-[rgb(15,125,63)] text-white font-medium text-sm px-6 py-3 
                    rounded-full hover:bg-[rgb(12,100,50)] transition-colors whitespace-nowrap">Noticias e Historias
                </a>
            </div>
            <!-- Columna Izquierda: Alineada exactamente al H2 de arriba usando un contenedor interno con el mismo desplazamiento -->
            <div class="flex flex-col items-start w-full pl-60">
                    <!-- Imagen principal alineada al ras del H2 -->
                    <img src="../imagenes/imagenes_principal/imagen26.webp" class="w-full h-60 rounded-2px" alt="Amazonía">
                    <a href="#" class="text-[24px] font-semibold text-[rgb(31,72,34)] mt-4 leading-snug hover:underline">
                        <h3>Un paso adelante para una <br>Amazonía conectada</h3>
                    </a>
                    <div class="flex flex-wrap items-center gap-3 mt-4">
                        <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                        <span class="text-[11px]">PERÚ</span>
                    </div>
            </div>
            <!-- Columna Derecha con los artículos en miniatura -->
            <div class="w-1/2 flex flex-col gap-6 mx-3">
                <!-- Artículo 1 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/imagen28.webp" alt="Miel por Bosque" class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#" class="font-semibold text-[16px] text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>Miel por Bosque <br>fortalece la <br>conservación en <br>Zamora Chinchipe</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                            <span class="text-[11px]">ECUADOR</span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 2 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/imagen27.webp" alt="San Andrés" class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#" class="text-[15px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>San Andrés: la <br>comunidad que luchó 16 años para proteger el agua y los bosques</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                            <span class="text-[11px]">ECUADOR</span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 3 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/imagen29.webp" alt="Ocho regiones del Perú" class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full ">
                        <a href="#" class="text-[16px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>Ocho regiones del <br>Perú se unen en <br>Huánuco</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3 ">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">EVENTO</span>
                            <span class="text-[11px]">PERÚ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Línea horizontal -->
        <div class="mx-auto w-2/3 border-t border-[rgb(15,125,63)]"></div>
    </section>
    
    <!-- PONTE EN CONTACTO -->
    <section class="container mx-auto relative z-0">
        <!-- Cabecera con imagen de fondo y altura fija de 550px -->
        <div class="bg-[url('../imagenes/imagenes_principal/imagen31.jpg')] bg-cover bg-no-repeat bg-center relative z-10 w-full flex 
        items-center px-8 md:px-16" style="height: 480px;">
            <!-- Grid de dos columnas que ocupa el 100% para distribuir los elementos a lo ancho -->
            <div class="grid grid-cols-2 gap-10 w-full items-center">
                <!-- Columna Izquierda: Icono arriba, H2 en blanco -->
                <div class="flex flex-col items-start justify-center w-full">
                    <div class="flex flex-col items-start relative -top-20 ml-56">
                        <img class="h-10 w-10 mb-4" src="../imagenes/imagenes_principal/imagen30.svg" alt="Icono">
                        <h2 class="text-3xl font-semibold text-[rgb(72,81,79)] leading-tight">
                            PONTE EN <br>CONTACTO
                        </h2>
                    </div>
                </div>
                <!-- Columna Derecha: Textos descriptivos y botón centrado/alineado -->
                <div class="flex flex-col items-start justify-center pt-4">
                    <div class="flex flex-col items-start gap-3 relative -top-14">
                        <p class="text-[rgb(72,81,79)] text-[16px]">¿Te gustaría colaborar?</p>
                        <p class="text-[rgb(72,81,79)] text-[16px]">¡Sumemos esfuerzos para proteger paisajes naturales!</p>
                        <!-- Botón -->
                        <div class="mt-4">
                            <a href="#" class="inline-block bg-white font-medium text-sm px-8 py-3 text-[rgb(72,81,79)]
                                    rounded-full hover:text-[rgb(15,125,63)] ">
                                Contáctanos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- La línea con el color de fondo colocada fuera y solapada con un margen negativo -->
    <img src="../imagenes/imagenes_principal/linea18.png" alt="Línea divisoria" class="block w-full h-auto relative z-20" 
    style="margin-top: -10px;">

    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/footer.php"; ?>

    <!-- ICONO DEL WHATSAPP -->
    <!-- <div class="flex items-end justify-end p-5">
        <img src="icono/whatsapp-svgrepo-com.svg" alt="" width="70px">
    </div> -->

</body>
</html>