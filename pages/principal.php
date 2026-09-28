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
<!-- FALTA ADAPTARLO TODO A TODAS LAS PANTALLAS Y OTRAS COSITAS QUE MEJORAR EN CADA SECCIÓN -->
<body>
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/header.php"; ?>

    <!-- Contenedor Padre: Vídeo de fondo + todo el contenido encima -->
    <section class="relative w-full min-h-250 sm:min-h-230 md:min-h-200 lg:h-screen lg:min-h-190 overflow-hidden flex flex-col pt-3">
        <!-- Vídeo -->
        <video autoplay loop muted playsinline
            class="absolute inset-0 w-full h-[82%] sm:h-[78%] md:h-[72%] lg:h-3/4 object-cover z-0">
            <source src="../video/Inicio_Naturaleza_y_Cultura_Internacional.mp4" type="video/mp4">
        </video>
        <!-- CONTENEDOR GENERAL -->
        <div class="w-full max-w-5xl mx-auto relative z-20 px-5 sm:px-6 md:px-8 lg:px-12 pt-6 flex flex-col flex-1">
            <!-- CONTENEDOR DEL TEXTO -->
            <div class="mt-16 sm:mt-20 md:mt-24 lg:mt-20 flex flex-col items-start">
                <!-- BLOQUE NEGRO -->
                <div class="w-full max-w-2xl flex flex-col items-start space-y-5 sm:space-y-6 bg-black/30 p-5 sm:p-6">
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold text-left">
                        30 AÑOS <br>
                        COMPROMETIDOS <br>
                        CON LA NATURALEZA
                    </h1>
                    <p class="text-[17px] text-white font-semibold">
                        Protegemos los bosques más biodiversos del mundo
                        <br class="hidden sm:block">
                        de la mano de quienes mejor los conocen: los pueblos
                        <br class="hidden sm:block">
                        indígenas y comunidades locales.
                    </p>
                    <!-- BOTONES -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 w-full">
                        <a href="#"
                            class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                            text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">
                            SÚMATE A ESTA MISIÓN
                        </a>
                        <a href="#"
                            class="flex shrink-0 items-center gap-2 text-[16px] font-bold text-white">
                            <span class="hover:underline">
                                30 años de experiencia
                            </span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor Conservación efectiva a nivel de paisaje -->
    <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 lg:gap-12 items-center text-center md:text-left">
            <!-- TEXTO -->
            <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <h2 class="text-3xl w-full leading-tight">
                    Conservación efectiva a nivel de paisaje
                </h2>
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                    Diseñada para perdurar
                </h3>
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
                <!-- BOTONES -->
                <div class="flex flex-col sm:flex-row items-center md:items-start gap-3 sm:gap-6 w-full">
                    <a href="#"
                        class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-4 md:py-3.5 lg:py-3 text-center text-[16px] font-bold
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">
                        NUESTRA VISIÓN
                    </a>
                    <a href="#"
                        class="mt-0 sm:mt-6 text-[rgb(15,125,63)] inline-block px-6 py-2.5 rounded-full font-bold 
                        hover:text-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="hover:underline">
                            Cómo puedes apoyar
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <!-- IMAGEN -->
            <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-2 md:mt-0 overflow-hidden">
                <img src="../../imagenes/imagenes_principal/home2026-media-bird.webp"
                    alt=""
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
        </div>
    </section>

    <!-- Contenedor Nuestro impacto -->
    <section class="w-full relative z-0 pt-2 pb-6 sm:pb-8">
        <div class="w-full bg-[url('../../imagenes/imagenes_principal/home2026-impact-mountains.webp')] 
            bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-14 sm:py-16 md:py-20 px-5 sm:px-6 md:px-8 lg:px-12 
            min-h-130 sm:min-h-140 md:min-h-112 lg:h-112.5">
            <!-- OSCURECIDO -->
            <div class="absolute inset-0 z-0 bg-black/50 md:bg-black/35"></div>
            <!-- EJE PRINCIPAL -->
            <div class="w-full max-w-5xl mx-auto relative z-10">
                <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start">
                    <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                        Nuestro impacto
                    </h2>
                    <h3 class="font-semibold tracking-wider text-2xl mb-4 w-full">
                        Lo que hemos alcanzado hasta ahora:
                    </h3>
                    <p class="mb-4 text-[22px] leading-relaxed w-full">
                        Hectáreas protegidas en América Latina
                    </p>
                    <p class="mb-4 text-[32px] leading-relaxed w-full">
                        11.9
                    </p>
                    <p class="mb-4 text-[32px] leading-relaxed w-full uppercase">
                        Millones
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 text-center md:text-left">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-6 pb-8">
            <!-- Métrica 1 -->
            <div class="flex flex-col">
                <span class="block text-3xl text-[rgb(31,72,34)] mb-2">
                    4.2MM
                </span>
                <p class="text-[rgb(72,81,79)] text-[16px] leading-relaxed max-w-xs">
                    Toneladas de CO₂e almacenadas en ecosistemas naturales
                </p>
            </div>
            <!-- Métrica 2 -->
            <div class="flex flex-col">
                <span class="block text-3xl text-[rgb(31,72,34)] mb-2">
                    94
                </span>
                <p class="text-[rgb(72,81,79)] text-[16px] leading-relaxed max-w-xs">
                    Pueblos indígenas y comunidades locales aliadas
                </p>
            </div>
            <!-- Métrica 3 -->
            <div class="flex flex-col">
                <span class="block text-3xl text-[rgb(31,72,34)] mb-2">
                    470
                </span>
                <p class="text-[rgb(72,81,79)] text-[16px] leading-relaxed max-w-xs">
                    Especies amenazadas protegidas
                </p>
            </div>
            <!-- Enlace -->
            <div class="flex flex-col">
                <button type="submit" class="inline-flex items-center justify-center md:justify-start w-full text-[rgb(48,143,90)] 
                    text-[16px] hover:text-[rgb(4,34,17)] hover:underline gap-2">
                    Cómo lo hacemos posible
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Contenedor Nuestro modelo -->
    <section class="w-full max-w-5xl mx-auto py-10 sm:py-12 md:py-14 px-5 sm:px-6 md:px-8 lg:px-12 box-border">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 lg:gap-12 items-center text-center md:text-left">
            <!-- TEXTO -->
            <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <h2 class="text-3xl w-full leading-tight">
                    Nuestro modelo
                </h2>
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                    Conservación construida desde el territorio
                </h3>
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
                    <span class="font-bold text-[24px]">
                        Más de 30 años
                    </span>
                    <br>
                    de experiencia
                </p>
                <p class="leading-relaxed text-[16px] w-full text-[rgb(15,125,63)] font-medium">
                    <span class="font-bold text-[24px]">
                        94% de nuestro personal
                    </span>
                    <br>
                    trabaja en territorio
                </p>
                <div class="flex flex-col sm:flex-row items-center md:items-start gap-3 sm:gap-6 w-full">
                    <a href="#"
                        class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-4 md:py-3.5 lg:py-3 text-center text-[16px] font-bold
                        text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">
                        NUESTRA VISIÓN
                    </a>
                    <a href="#"
                        class="mt-0 sm:mt-6 text-[rgb(15,125,63)] inline-block px-6 py-2.5 rounded-full font-bold 
                        hover:text-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="hover:underline">
                            Cómo puedes apoyar
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <!-- IMAGEN -->
            <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-2 md:mt-0 overflow-hidden">
                <img src="../../imagenes/imagenes_principal/home2026-media-monkey.webp"
                    alt=""
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
        </div>
    </section>

    <!-- Contenedor Dónde trabajamos -->
    <section class="w-full max-w-5xl mx-auto py-6 sm:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 lg:gap-12 items-center text-center md:text-left">
            <!-- TEXTO -->
            <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                <h2 class="text-3xl w-full leading-tight">
                    Dónde trabajamos
                </h2>
                <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                    Protegiendo los bosques donde más importa
                </h3>
                <p class="leading-relaxed text-[16px] w-full">
                    Trabajamos en los paisajes más biodiversos de Latinoamérica, protegiendo ecosistemas clave para la vida en el planeta. 
                    Priorizamos aquellos territorios más amenazados y de mayor valor ecológico, donde la conservación es imperativa.
                </p>
                <p class="leading-relaxed text-[16px] w-full">
                    Estos paisajes albergan algunas de las mayores reservas de carbono del mundo y una biodiversidad única e inigualable. 
                    Son lugares extraordinarios e irremplazables, esenciales para enfrentar la crisis climática y conservar el patrimonio 
                    natural de las futuras generaciones.
                </p>
                <a href="#"
                    class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                    text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">
                    EXPLORA NUESTROS PROGRAMAS
                </a>
            </div>
            <!-- IMAGEN -->
            <div class="w-full h-full flex justify-center items-center mt-2 md:mt-0 overflow-hidden">
                <img src="../../imagenes/imagenes_principal/ecoregiones-1-768x768.webp"
                    alt=""
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
            </div>
        </div>
    </section>

    <!-- Contenedor Blogs y noticias -->
    <section class="w-full max-w-5xl mx-auto py-8 sm:py-10 px-5 sm:px-6 md:px-8 lg:px-12">
        <!-- CABECERA -->
        <div class="mb-8">
            <h2 class="text-3xl uppercase tracking-widest text-[rgb(72,81,79)] block mb-1">
                Blogs y noticias
            </h2>
            <h3 class="text-2xl text-[rgb(31,72,34)]">
                Conservación en acción
            </h3>
        </div>
        <!-- CONTENIDO -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-8 mb-8">
            <!-- ARTÍCULO PRINCIPAL -->
            <div class="flex flex-col items-start w-full">
                <img src="../imagenes/imagenes_principal/PARQUE-NACIONAL-YACURI-1-NCI-768x512.png"
                    class="w-full h-auto rounded-2px"
                    alt="">
                <a href="#"
                    class="text-[24px] font-semibold text-[rgb(31,72,34)] mt-4 leading-snug hover:underline">
                    <h3>
                        Conocer para conservar: monitoreo en el <br class="hidden sm:block">
                        Corredor de Conectividad Podocarpus <br class="hidden sm:block">
                        Yacuri
                    </h3>
                </a>
                <div class="flex flex-wrap items-center gap-3 mt-4">
                    <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">
                        BLOG
                    </span>
                    <span class="text-[11px] text-[rgb(31,72,34)]">
                        ECUADOR
                    </span>
                </div>
            </div>
            <!-- ARTÍCULOS SECUNDARIOS -->
            <div class="w-full flex flex-col gap-6">
                <!-- Artículo 1 -->
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <img src="../imagenes/imagenes_principal/SalidaOrellana2024_32-253x190.webp"
                        alt=""
                        class="w-full sm:w-40 h-48 sm:h-28 object-cover rounded-2px shrink-0">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#"
                            class="font-semibold text-[16px] text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>
                                Una carrera para <br class="hidden sm:block">
                                descubrir y conservar <br class="hidden sm:block">
                                el territorio de <br class="hidden sm:block">
                                Orellana
                            </h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">
                                BLOG
                            </span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">
                                PERÚ
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 2 -->
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <img src="../imagenes/imagenes_principal/Foto-principal-253x169.jpg"
                        alt=""
                        class="w-full sm:w-40 h-48 sm:h-28 object-cover rounded-2px shrink-0">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#"
                            class="text-[15px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>
                                Las comunidades de <br class="hidden sm:block">
                                los Andes del Norte <br class="hidden sm:block">
                                se unen
                            </h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">
                                BLOG
                            </span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">
                                PERÚ
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Artículo 3 -->
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <img src="../imagenes/imagenes_principal/Foto-de-potada_-Krisia-Espinoza-253x169.webp"
                        alt=""
                        class="w-full sm:w-40 h-48 sm:h-28 object-cover rounded-2px shrink-0">
                    <div class="flex flex-col justify-between h-full">
                        <a href="#"
                            class="text-[16px] font-semibold text-[rgb(31,72,34)] leading-snug hover:underline">
                            <h3>
                                El compromiso <br class="hidden sm:block">
                                comunitario en la <br class="hidden sm:block">
                                ACP Cujillo se <br class="hidden sm:block">
                                renueva
                            </h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-3 mt-3">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[11px] px-2 py-1 rounded-2px">
                                BLOG
                            </span>
                            <span class="text-[11px] text-[rgb(31,72,34)]">
                                PERÚ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center lg:justify-start mt-2 lg:col-span-2">
                <a href="#"
                    class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                    text-[rgb(72,81,79)] transition hover:bg-[rgb(172,186,36)] uppercase">
                    Todas las historias y noticias
                </a>
            </div>
        </div>
    </section>

    <!-- Contenedor Trabajando por el futuro -->
    <section class="w-full relative z-0 pt-4 pb-6">
        <div class="w-full bg-[url('../../imagenes/imagenes_principal/mountain-band-1920x897.webp')] 
            bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-14 sm:py-16 md:py-20 px-5 sm:px-6 md:px-8 lg:px-12 
            min-h-162.5 md:min-h-112 md:h-112.5">
            <!-- EJE PRINCIPAL -->
            <div class="w-full max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 lg:gap-12 items-center text-center md:text-left">
                    <!-- TEXTO -->
                    <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                        <h2 class="text-3xl w-full leading-tight text-[rgb(72,81,79)]">
                            Trabajando por el futuro
                        </h2>
                        <h3 class="text-[rgb(31,72,34)] font-medium tracking-wider text-2xl w-full leading-tight">
                            Paisajes conectados para las futuras generaciones
                        </h3>
                        <p class="leading-relaxed text-[16px] w-full text-white">
                            Imaginamos un futuro en el que los bosques, ríos y ecosistemas de América Latina permanecen conectados y saludables; 
                            donde las comunidades prosperen junto a la naturaleza y donde la biodiversidad continúe sosteniendo la vida para las 
                            generaciones venideras.
                        </p>
                        <p class="leading-relaxed text-[16px] w-full text-white">
                            Cada paisaje donde trabajamos contribuye a hacer realidad esa visión.
                        </p>
                        <a href="#"
                            class="w-full sm:w-auto rounded-full bg-[rgb(202,219,42)] px-8 py-5 text-center text-[16px] font-bold 
                            text-[rgb(72,81,79)] transition hover:bg-[rgb(31,72,34)] hover:text-white">
                            CONOCE NUESTRA VISIÓN
                        </a>
                        <a href="#"
                            class="mt-3 sm:mt-6 text-white inline-block px-6 py-2.5 font-bold self-center md:self-start shrink-0 
                            hover:underline">
                            30 años de compromiso con la naturaleza
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- IMAGEN -->
                    <div class="w-full h-full flex justify-center items-center mt-4 md:mt-0 overflow-hidden">
                        <img src="../../imagenes/imagenes_principal/home2026-media-jaguar.webp"
                            alt=""
                            class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                    </div>
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