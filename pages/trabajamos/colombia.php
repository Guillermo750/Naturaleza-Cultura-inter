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

        <section class="py-12 w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 z-10">
            <div class="relative overflow-hidden md:overflow-visible group">
                <!-- Ilustración del jaguar (Fija encima del carrusel, oculta en móvil, visible desde md) -->
                <img src="../../imagenes/ecuador/nci-cp-illustration2-countryp.webp" alt="" 
                    class="absolute -left-6 bottom-0 w-36 translate-x-[-55%] hidden md:block z-30 pointer-events-none">
                
                <!-- CONTENEDOR PRINCIPAL CON ALTURA ASIGNADA NATIVAMENTE -->
                <div class="relative w-full h-auto min-h-137.5 sm:min-h-115 md:min-h-112.5" style="min-height: 450px;">
                    
                    <!-- BANNER 1 (Activo por defecto) -->
                    <div class="banner-slide absolute inset-0 w-full h-full 
                    bg-[url(../../imagenes/ecuador/PAISAJE_MENADROS-RIO-BOBONAZA-2-scaled-1-1920x1080-1-1536x864.jpg.webp)] bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8" style="transition: opacity 1s ease, visibility 1s; opacity: 1; visibility: visible; z-index: 10;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-6 rounded-lg space-y-3 bg-black/55 md:bg-black/45">
                            <h2 class="text-2xl uppercase tracking-wider block">Acciones por la Amazonía</h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Zamora Chinchipe, Morona Santiago, Pastaza</p>
                                <p><b>Años:</b> 2021-2025</p>
                            </div>
                            <p class="text-[16px] leading-relaxed">
                                Organizaciones indígenas, sociedad civil, sector privado responsable y otros actores unen esfuerzos en una 
                                agenda común sobre bosques y cambio climático, tanto a nivel nacional como internacional. Juntos impulsan 
                                acciones coordinadas que fortalecen la conservación y promueven un futuro más sostenible para el Ecuador y el 
                                planeta.
                            </p>
                        </div>
                    </div>

                    <!-- BANNER 2 (Imagen de fondo distinta) -->
                    <div class="banner-slide absolute inset-0 w-full h-full 
                    bg-[url(../../imagenes/ecuador/Amazon-Howler.webp)] bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8" style="transition: opacity 1s ease, visibility 1s; opacity: 0; visibility: hidden; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-6 rounded-lg space-y-3 bg-black/55 md:bg-black/45">
                            <h2 class="text-2xl uppercase tracking-wider block">Segundo Título del Banner</h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Nueva Ubicación Segunda</p>
                                <p><b>Años:</b> 2026-2030</p>
                            </div>
                            <p class="text-[16px] leading-relaxed">
                                Texto descriptivo para el segundo banner del carrusel. Puedes personalizar este párrafo de forma 
                                totalmente independiente al primero manteniendo el mismo estilo visual y su propio fondo.
                            </p>
                        </div>
                    </div>

                    <!-- BANNER 3 (Imagen de fondo distinta) -->
                    <div class="banner-slide absolute inset-0 w-full h-full 
                    bg-[url(../../imagenes/ecuador/Untitled-design-51-1536x864.webp)] bg-cover bg-center bg-no-repeat grid grid-cols-1 md:grid-cols-12 items-center p-4 sm:p-6 md:p-8" style="transition: opacity 1s ease, visibility 1s; opacity: 0; visibility: hidden; z-index: 5;">
                        <!-- Caja de texto interna -->
                        <div class="md:col-span-7 text-white p-6 rounded-lg space-y-3 bg-black/55 md:bg-black/45">
                            <h2 class="text-2xl uppercase tracking-wider block">Tercer Título del Banner</h2> 
                            <div class="text-[16px] leading-relaxed">
                                <p><b>Área de implementación:</b> Nueva Ubicación Tercera</p>
                                <p><b>Años:</b> 2026</p>
                            </div>
                            <p class="text-[16px] leading-relaxed">
                                Texto descriptivo para el tercer banner del carrusel. Cada bloque cuenta con su propia caja de texto 
                                para que configures la información de forma dinámica sobre su respectiva foto.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PUNTOS INDICADORES (DOTS) -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-40">
                    <button class="banner-dot w-3 h-3 rounded-full bg-white transition-all cursor-pointer" style="opacity: 1;" data-slide="0"></button>
                    <button class="banner-dot w-3 h-3 rounded-full bg-white transition-all cursor-pointer" style="opacity: 0.4;" data-slide="1"></button>
                    <button class="banner-dot w-3 h-3 rounded-full bg-white transition-all cursor-pointer" style="opacity: 0.4;" data-slide="2"></button>
                </div>
            </div>
    </section>

    </div>

</body>
</html>