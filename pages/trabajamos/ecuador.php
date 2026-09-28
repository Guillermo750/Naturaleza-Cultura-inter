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
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center md:justify-start">
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
        <section class="w-full py-16 mx-auto px-6 md:px-12 lg:px-24 max-w-5xl">
            <!-- Grid principal: Menú lateral izquierdo (oculto en móvil o adaptado) y Contenido a la derecha -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- 1. MENÚ LATERAL IZQUIERDO (Ocupa 3 columnas en pantallas grandes) -->
                <aside class="hidden lg:block lg:col-span-3 text-xs uppercase tracking-wider font-semibold
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
                            <img src="../../imagenes/ecuador/nci-orange-brush-short.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
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
                            <img src="../../imagenes/ecuador/mapa-ecuador.jpg" alt="Mapa de áreas de trabajo en Ecuador" class="w-full h-full 
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

        <!--  -->

        
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>