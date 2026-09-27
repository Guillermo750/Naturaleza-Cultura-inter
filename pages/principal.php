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
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-3/4 object-cover z-0">
            <source src="../video/Inicio_Naturaleza_y_Cultura_Internacional.mp4" type="video/mp4">
        </video>
        <!-- CONTENEDOR GENERAL -->
        <div class="container mx-auto relative z-20 px-5 pt-6 flex flex-col flex-1">
            <!-- 3. CONTENEDOR DEL TEXTO PRINCIPAL RÉPLICA -->
            <div class="mt-20 flex flex-1 flex-col items-start">
                <div class="flex max-w-2xl flex-col items-start space-y-6 bg-black/30 p-6">
                    <h1 class="text-white text-5xl font-semibold text-left">
                        30 AÑOS <br>COMPROMETIDOS <br>CON LA NATURALEZA
                    </h1>
                    <p class="text-[17px] text-white font-semibold">
                      Protegemos los bosques más biodiversos del mundo<br> de la mano de quienes mejor los conocen: los pueblos<br>
                      indígenas y comunidades locales.  
                    </p>
                    <div class="flex items-center gap-6">
                        <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">SÚMATE A ESTA MISIÓN</a>
                        <a href="#" class="flex shrink-0 items-center gap-2 text-[16px] font-bold text-white">
                        <span class="hover:underline">30 años de experiencia </span><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor Conservación efectiva a nivel de paisaje -->
    <section class="w-full max-w-6xl mx-auto px-6">
        <!-- Contenedor con grid responsive e inversión de orden -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
            <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
            <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <!-- Título principal -->
                <h2 class="text-3xl w-full leading-tight">
                    Conservación efectiva a nivel de paisaje
                </h2>
                <!-- Título secundario -->
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">Diseñada para perdurar</h3>
                <!-- Párrafos descriptivos -->
                <p class="leading-relaxed text-[16px] w-full">
                    En Naturaleza y Cultura Internacional entendemos que la conservación efectiva va más allá de establecer áreas protegidas.
                    Trabajamos de manera mancomunada con aliados locales para crear y fortalecer las condiciones que hacen posible proteger 
                    la biodiversidad hoy y garantizar su permanencia para las futuras generaciones.
                </p>
                <p class="leading-relaxed text-[16px] w-full">
                    Durante más de 30 años, nuestro equipo ha vivido y trabajado en los territorios que protegemos, construyendo relaciones 
                    de confianza con comunidades, gobiernos locales y aliados estratégicos. 
                </p>
                <p class="leading-relaxed text-[16px] w-full">
                    Esta es una conservación diseñada para perdurar.
                </p>
                <div class="flex items-center gap-6">
                    <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">NUESTRA VISIÓN</a>
                    <a href="#" class="mt-6 text-[rgb(15,125,63)] inline-block px-6 py-2.5 rounded-full font-bold 
                         hover:text-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="hover:underline">Cómo puedes apoyar <i class="fa-solid fa-arrow-right"></i></span></a>
                    </a>
                </div>
            </div>      

            <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
            <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                <img src="../../imagenes/imagenes_principal/home2026-media-bird.webp" alt="" 
                class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
         </div>
    </section>

    <!-- Contenedor Nuestro impacto -->


    <!-- Contenedor Nuestro modelo -->
    <section class="w-full max-w-6xl mx-auto py-8 px-6 box-border">
        <!-- Contenedor con grid responsive e inversión de orden -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
            <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
            <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <!-- Título principal -->
                <h2 class="text-3xl w-full leading-tight">
                   Nuestro modelo
                </h2>
                <!-- Título secundario -->
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                    Conservación construida desde el territorio
                </h3>
                <!-- Párrafos descriptivos -->
                <p class="leading-relaxed text-[16px] w-full">
                    Nuestro trabajo es posible gracias a las alianzas que construimos con comunidades locales, pueblos indígenas, gobiernos,
                    organizaciones de la sociedad civil y socios estratégicos.
                </p>
                <p class="leading-relaxed text-[16px] w-full">
                    Creemos que las soluciones más duraderas nacen de quienes conocen y habitan los territorios. Por eso promovemos la 
                    gobernanza territorial, el fortalecimiento de capacidades locales y acompañamos procesos que deriven en beneficios 
                    para las personas gracias a la conservación de la naturaleza.
                </p>
                <p class="leading-relaxed text-[16px] w-full text-[rgb(15,125,63)] font-medium">
                    <span class="font-bold text-[24px]">Más de 30 años</span> <br>de experiencia
                </p>
                <p class="leading-relaxed text-[16px] w-full text-[rgb(15,125,63)] font-medium">
                    <span class="font-bold text-[24px]">94% de nuestro personal</span> <br>trabaja en territorio
                </p>
                <div class="flex items-center gap-6">
                    <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">NUESTRA VISIÓN</a>
                    <a href="#" class="mt-6 text-[rgb(15,125,63)] inline-block px-6 py-2.5 rounded-full font-bold 
                         hover:text-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="hover:underline">Cómo puedes apoyar <i class="fa-solid fa-arrow-right"></i></span></a>
                    </a>
                </div>
            </div>      

            <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
            <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                <img src="../../imagenes/imagenes_principal/home2026-media-monkey.webp" alt="" 
                class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
         </div>
    </section>

    <!-- Contenedor Dónde trabajamos -->
    <section class="w-full max-w-4xl mx-auto py-8">
        <!-- Contenedor con grid responsive sin alterar el orden original -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
            <!-- COLUMNA IZQUIERDA: Textos -->
            <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <!-- Título principal -->
                <h2 class="text-3xl w-full leading-tight">
                   Dónde trabajamos
                </h2>
                <!-- Título secundario -->
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                    Protegiendo los bosques donde más importa
                </h3>
                <!-- Párrafos descriptivos -->
                <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                    Trabajamos en los paisajes más biodiversos de Latinoamérica, protegiendo ecosistemas clave para la vida en el planeta. 
                    Priorizamos aquellos territorios más amenazados y de mayor valor ecológico, donde la conservación es imperativa.
                </p>
                <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                    Estos paisajes albergan algunas de las mayores reservas de carbono del mundo y una biodiversidad única e inigualable.
                    Son lugares extraordinarios e irremplazables, esenciales para enfrentar la crisis climática y conservar el patrimonio 
                    natural de las futuras generaciones.
                </p>
                <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                    text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">EXPLORA NUESTROS PROGRAMAS</a>
            </div>      
                
            <!-- COLUMNA DERECHA: Imagen -->
            <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0 px-4 md:px-0">
                <img src="../../imagenes/imagenes_principal/ecoregiones-1-768x768.webp" alt="" 
                class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
        </div>
    </section>

    <!-- Contenedor Blogs y noticias -->
    <section class="container mx-auto py-6 w-full pt-10">
        <!-- Cabecera con h2 y texto -->
        <div>
            
        </div>
        <!-- Cabecera: Dividida en dos columnas perfectas -->
        <div class="grid grid-cols-2 gap-4 mb-8">
            <!-- Columna Izquierda: Alineada exactamente al H2 de arriba usando un contenedor interno con el mismo desplazamiento -->
            <div class="flex flex-col items-start w-full pl-60">
                <!-- Imagen principal alineada al ras del H2 -->
                <img src="../imagenes/imagenes_principal/PARQUE-NACIONAL-YACURI-1-NCI-768x512.png" class="w-full h-full rounded-2px" alt="">
                <a href="#" class="text-[24px] font-semibold text-[rgb(31,72,34)] mt-4 leading-snug hover:underline">
                    <h3>Conocer para conservar: monitoreo en el <br>Corredor de Conectividad Podocarpus <br>Yacuri</h3>
                </a>
                <div class="flex flex-wrap items-center gap-3 mt-4">
                    <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                    <span class="text-[11px] text-[rgb(31,72,34)]">ECUADOR</span>
                </div>
                <div class="flex items-center">
                    <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                     text-[rgb(72,81,79)] transition hover:bg-[rgb(172,186,36)] uppercase mt-6">Todas las historias y noticias</a>
                </div>
            </div>
            <!-- Columna Derecha con los artículos en miniatura -->
            <div class="w-1/2 flex flex-col gap-6 mx-3">
                <!-- Artículo 1 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/SalidaOrellana2024_32-253x190.webp" alt="" 
                        class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#" class="font-semibold text-[16px] text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>Una carrera para <br>descubrir y conservar <br>el territorio de <br>Orellana</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">PERÚ</span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 2 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/Foto-principal-253x169.jpg" alt="" class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#" class="text-[15px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>Las comunidades de <br>los Andes del Norte <br>se unen</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">PERÚ</span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 3 -->
                <div class="flex items-start gap-4 space-x-1">
                    <img src="../imagenes/imagenes_principal/Foto-de-potada_-Krisia-Espinoza-253x169.webp" alt="" 
                        class="w-40 h-28 object-cover rounded-2px">
                    <div class="flex flex-col justify-between h-full ">
                        <a href="#" class="text-[16px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>El compromiso <br>comunitario en la <br>ACP Cujillo se <br>renueva</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3 ">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">BLOG</span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">PERÚ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor Trabajando por el futuro -->
    <section class="w-full relative z-0 pt-4 pb-6">
        <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
        <div class="w-full bg-[url('../../imagenes/imagenes_principal/mountain-band-1920x897.webp')] 
            bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 px-6 md:px-12 lg:px-48 min-h-112 md:h-112.5">
                
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="text-3xl w-full leading-tight">
                    Trabajando por el futuro
                    </h2>
                    <!-- Título secundario -->
                    <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                        Paisajes conectados para las futuras generaciones
                    </h3>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                        Imaginamos un futuro en el que los bosques, ríos y ecosistemas de América Latina permanecen conectados y saludables; 
                        donde las comunidades prosperen junto a la naturaleza y donde la biodiversidad continúe sosteniendo la vida para las 
                        generaciones venideras.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                        Cada paisaje donde trabajamos contribuye a hacer realidad esa visión.
                    </p>
                    <a href="#" class="rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">CONOCE NUESTRA VISIÓN</a>
                    <a href="#" class="mt-6 text-white inline-block px-6 py-2.5 font-bold self-center md:self-start shrink-0 
                        hover:underline">30 años de compromiso con la naturaleza <i class="fa-solid fa-arrow-right"></i></a>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0 px-4 md:px-0">
                    <img src="../../imagenes/imagenes_principal/home2026-media-jaguar.webp" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </div>  
    </section>

    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/footer.php"; ?>

    <!-- ICONO DEL WHATSAPP -->
    <!-- <div class="flex items-end justify-end p-5">
        <img src="icono/whatsapp-svgrepo-com.svg" alt="" width="70px">
    </div> -->

</body>
</html>