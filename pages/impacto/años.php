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
    <title>30 Años</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>
        
        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/30_años/30-aniversario-Banner-SPA2-Desktop.jpg)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[90vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide">30 Años</h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/30_años/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor 30 Años Comprometidos con la Naturaleza -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 
            text-center md:text-left">
            <!-- Título Principal de la Sección -->
            <h2 class="text-3xl md:text-4xl font-normal text-[rgb(31,72,34)] mb-8 text-center md:text-left">
                30 Años Comprometidos con la Naturaleza
            </h2>
            <!-- Contenedor principal con grid responsive -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-start text-center md:text-left">
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-4 items-center md:items-start w-full">
                    <!-- Párrafos descriptivos -->
                    <p class="text-[16px] w-full text-[rgb(72,81,79)]">
                        Hace 30 años tomamos una decisión: trabajar junto a comunidades, gobiernos y aliados para proteger los paisajes más 
                        biodiversos del mundo.
                    </p>
                    <p class="text-lg md:text-xl text-[rgb(15,125,63)] font-medium w-full">
                        Hoy, ese compromiso es más fuerte que nunca.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Vídeo con un logo, título y subtítulo -->
                <div class="relative w-full max-w-7xl md:max-w-md mx-auto overflow-hidden">
                    <!-- Capa superior flotante (Logo y Textos) -->
                    <div id="capa-texto" class="absolute top-0 left-0 w-full pt-2 pr-2 pb-2 pl-2 flex items-start gap-4 z-10
                        transition-opacity duration-500 opacity-100">
                        <!-- Logo pequeño y circular -->
                        <img src="../../logo/channels4_profile.jpg" alt="Logo" class="w-9 h-9 rounded-full object-cover shrink-0">
                        <!-- Bloque de texto (alineación vertical automática a la izquierda) -->
                        <div class="flex flex-col m-0 p-0">
                        <!-- Título principal -->
                        <h2 class="text-white font-sans text-sm font-bold m-0 mb-1 leading-tight">
                            30 años Comprometidos con la Na...
                        </h2>
                        <!-- Subtítulo pequeño alineado (la N perfectamente bajo la P) -->
                        <p class="text-white font-sans font-bold text-xs m-0 p-0">
                            Naturaleza y Cultura Internacional
                        </p>
                        </div>
                    </div>

                    <!-- Video -->
                    <video id="mi-video" controls preload="metadata" playsinline class="w-full h-auto block md:max-w-md">
                        <source src="../../video/Ytdown.Com Youtube Media Brsg6utlnfw 002 720P.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Contenedor Un año para reflexionar y reafirmar nuestro compromiso -->
        <section class="w-full py-8 px-6">
            <!-- Contenedor principal con grid adaptable -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-4xl text-center md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full">
                    <h2 class="text-2xl md:text-3xl font-normal tracking-wide mb-2.5 text-[rgb(31,72,34)] w-full leading-tight">
                        Un año para reflexionar y reafirmar nuestro compromiso
                    </h2>
                    <!-- Párrafos descriptivos -->
                     <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Este año celebramos 30 años de Naturaleza y Cultura Internacional.
                     </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0 font-bold">
                        No es solo un aniversario. 
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Es un momento para reconocer el camino recorrido, agradecer a quienes han hecho posible este trabajo y reafirmar 
                        nuestro compromiso con la naturaleza y las personas que la protegen.
                    </p>
                    <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                        hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="text-sm">Conoce nuestro trabajo</span>
                    </a>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/30_años/Comunidades-Locales-Indigenas-Naturaleza-Cultura-768x768.jpeg" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor CONSERVACIÓN SOSTENIBLE CON LIDERAZGO LOCAL -->
        <section class="w-full bg-[rgb(234,232,211)] py-10 px-6">
            <div class="max-w-6xl mx-auto text-center ">
                <h2 class="text-3xl font-semibold text-[rgb(15,125,63)] mb-6">
                    30 Años Comprometidos con la Naturaleza
                </h2>
                <h3 class="text-2xl text-[rgb(31,72,34)] font-semibold mb-6">
                    Lo que hemos alcanzado en 30 años
                </h3>
            </div>

            <!-- Contenedor principal con grid -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 items-center max-w-4xl text-center md:text-left">
                
                <!-- Caja 1 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/community_green-250x253.png" alt="Icono 1" class="w-16 h-16 mb-4 object-contain">
                    <h3 class="font-normal text-[rgb(72,81,79)]">Hemos trabajado con
                        <span class="font-medium text-[rgb(15,125,63)]"> 94 pueblos indígenas y comunidades locales</span>
                    </h3>
                </div>

                <!-- Caja 2 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/handshake_green-250x253.png" alt="" class="w-16 h-16 mb-4 object-contain">
                        <h3 class="font-medium text-[rgb(15,125,63)]">361 alianzas estratégicas
                            <span class="text-[rgb(72,81,79)] font-normal">para la conservación</span>
                    </h3>
                </div>

                <!-- Caja 3 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/map_green-250x253.png" alt="" class="w-16 h-16 mb-4 object-contain">
                        <h3 class="font-semibold text-[rgb(15,125,63)]">11.9 millones de hectáreas
                        <span class="text-[rgb(72,81,79)] font-normal">protegidas</span>
                    </h3>
                </div>

                <!-- Caja 4 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/globe-and-sprout_green-250x253.png" alt="" class="w-16 h-16 mb-4 object-contain">
                        <h3 class="font-semibold text-[rgb(15,125,63)]">
                            4.2B t CO2e almacenado
                    </h3>
                </div>

                <!-- Caja 5 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/jaguar_green-250x253.png" alt="" class="w-16 h-16 mb-4 object-contain">
                    <h3 class="font-semibold text-[rgb(15,125,63)]">
                        470 especies de vertebrados bajo amenazada protegidas
                    </h3>
                </div>

                <!-- Caja 6 -->
                <div class="flex flex-col items-center text-center text-[20px]">
                    <img src="../../imagenes/30_años/life_green-250x253.png" alt="" class="w-16 h-16 mb-4 object-contain">
                    <h3 class="font-semibold text-[rgb(15,125,63)]">
                        8.9 millones de hectáreas dentro de KBAs
                    </h3>
                </div>
            </div>
        </section>

        <!-- Contenedor Puntos de inflexión para la naturaleza y las comunidades locales -->
        <section class="w-full max-w-5xl mx-auto py-12 px-6">
            <!-- Título principal -->
            <h2 class="text-3xl font-semibold text-[rgb(72,81,79)] mb-8 text-center md:text-left">
                Puntos de inflexión para la naturaleza y las comunidades locales
            </h2>

            <!-- Grid de 3 columnas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                
                <!-- Tarjeta 1 -->
                <div class="flex flex-col">
                    <img src="../../imagenes/30_años/Vista-panoramica-de-los-Andes-Adobe-Stock-600x200.webp" alt="" 
                    class="w-full h-64 object-cover rounded-md mb-4">
                    <p class="text-[rgb(72,81,79)] text-sm md:text-base leading-relaxed mb-4">
                        Reconocimiento oficial del primer Corredor Transfronterizo por la conservación de la biodiversidad de la región.
                    </p>
                    <a href="#" class="text-[rgb(15,125,63)] font-bold text-sm md:text-base hover:underline mt-auto">
                        Conoce más sobre este esfuerzo entre 2 países &rarr;
                    </a>
                </div>

                <!-- Tarjeta 2 -->
                <div class="flex flex-col">
                    <img src="../../imagenes/30_años/Tiwi-Nunka--600x397.webp" alt="" class="w-full h-64 object-cover rounded-md mb-4">
                    <p class="text-[rgb(72,81,79)] text-sm md:text-base leading-relaxed mb-4">
                        Creación del Área de Protección Hídrica, Runahurco, la segunda más extensa en Ecuador.
                    </p>
                    <a href="#" class="text-[rgb(15,125,63)] font-bold text-sm md:text-base hover:underline mt-auto">
                        Descubre este territorio clave para la conservación hídrica de Ecuador &rarr;
                    </a>
                </div>

                <!-- Tarjeta 3 -->
                <div class="flex flex-col">
                    <img src="../../imagenes/30_años/Gracias-Camino-Naturaleza-Cultura-Internacional-30-Aniversario.jpg" alt="" 
                    class="w-full h-64 object-cover rounded-md mb-4">
                    <p class="text-[rgb(72,81,79)] text-sm md:text-base leading-relaxed mb-4">
                        Establecimiento del Territorio de Vida y Uso Ancestral Tarímiat Pujutaí Nunka.
                    </p>
                    <a href="#" class="text-[rgb(15,125,63)] font-bold text-sm md:text-base hover:underline mt-auto">
                        Conoce más sobre esta creación histórica &rarr;
                    </a>
                </div>
            </div>
        </section>

        <!-- Contenedor Comprometidos con -->
        

        <!-- Contenedor Nuestros fundadores Ivan Gayler y Renzo Paladines -->
        <section class="w-full bg-[rgb(244,244,237)] py-10 px-6">
            <!-- Contenedor principal con grid adaptable -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-4xl text-center md:text-left">
                
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full ">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full text-[rgb(31,72,34)]">
                        Nuestros fundadores Ivan Gayler y Renzo Paladines
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)]">
                        Celebramos hoy, el trabajo que comenzó con una creencia simple pero poderosa: que proteger la naturaleza requiere 
                        colaboración, confianza y un compromiso a largo plazo.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)]">
                        30 años después, esa visión continúa guiando nuestros esfuerzos mientras trabajamos junto a comunidades y aliados 
                        para proteger algunos de los paisajes con mayor biodiversidad del mundo.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/30_años/Ivan-and-Renzo-627x600.jpg" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Gracias por ser parte de este camino -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/30_años/Gracias-Camino-Naturaleza-Cultura-Internacional-30-Aniversario.jpg')] 
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 px-6 md:px-12 lg:px-48 min-h-112 md:h-112.5">
                
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/55 md:bg-black/45"></div>
                
                <!-- Bloque de textos -->
                <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10 
                    [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">

                    <!-- Título principal -->
                    <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight text-[rgb(202,219,42)]">
                        Gracias por ser parte de este camino
                    </h2>

                    <!-- Párrafos descriptivos -->
                    <p class="mb-4 text-[16px] leading-relaxed w-full">
                        A nuestros fundadores, donantes, aliados, comunidades locales y 
                        <br class="hidden sm:block">equipo: gracias.
                    </p>
                    <p class="mb-4 text-[16px] leading-relaxed w-full">
                        Estos 30 años son el resultado de un esfuerzo y una convicción
                        <br class="hidden md:block">compartida: que la naturaleza y las personas pueden prosperar juntas
                    </p>
                </div>
            </div>
        </section>

        <!-- Contenedor LOS DESAFÍOS CONTINÚAN. NUESTRA DETERMINACIÓN TAMBIÉN. -->


        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>