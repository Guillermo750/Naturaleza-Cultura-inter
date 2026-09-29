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
    <title>Clima</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/imagenes_clima/imagen-fondo.png)] bg-cover bg-center bg-no-repeat 
            flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide">Clima</h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/imagenes_clima/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Nuestro Trabajo -->
        <section class="w-full max-w-5xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-5 sm:px-6 
            md:px-8 lg:px-12 text-center md:text-left">  
            <!-- Título verde -->
            <h2 class="text-3xl md:text-4xl text-[rgb(15,125,63)] tracking-wider w-full">Nuestro Trabajo</h2>
            
            <!-- Subtítulo -->
            <h3 class="text-2xl md:text-3xl text-[rgb(72,81,79)] font-normal leading-tight w-full">La conservación de los bosques como 
                solución climática
            </h3>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Naturaleza y Cultura ayuda a enfrentar el cambio climático protegiendo 
                grandes extensiones de bosque. Al trabajar junto a comunidades indígenas y locales, establecemos y fortalecemos áreas 
                protegidas que mantienen el carbono almacenado, salvaguardan la biodiversidad y apoyan a la resilencia de los ecosistemas.
            </p>
            <p class="text-lg md:text-xl text-[rgb(15,125,63)] font-medium w-full">Nuestras áreas protegidas ayudan a evitar un estimado 
                de <b>3,9 mil millones de toneladas de emisiones de CO₂</b> al mantener bosques en pie.
            </p>
        </section>

        <!-- Contenedor Programas Destacados -->
        <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 py-8">
            <!-- Cabecera de la sección: Título + Línea, Botón a la derecha -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 text-center md:text-left gap-4">
                <!-- Bloque del título estructurado en fila (Flex) en ordenadores grandes -->
                <div class="flex flex-col items-center md:items-start lg:flex-row lg:items-center gap-4 w-full">
                    <!-- IMAGEN DE LA FLOR: Visible solo en ordenadores grandes, colocada de forma natural al lado del texto -->
                    <div class="hidden lg:block w-20 shrink-0">
                        <img src="../../imagenes/imagenes_clima/nci-cp-illustration1-countryp.png" alt="Decoración lateral" 
                        class="w-full h-auto object-contain">
                    </div>
                    <!-- Contenedor interno para el texto del título y su línea beige inferior -->
                    <div class="flex flex-col items-center md:items-start w-full">
                        <h2 class="text-3xl font-normal text-[rgb(72,81,79)] w-full">Programas Destacados</h2>
                        <!-- Imagen de la línea debajo del título -->
                        <img src="../../imagenes/imagenes_clima/linea_beige.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                    </div>
                </div>

                <!-- Botón a la derecha -->
                <a href="#" class="mt-4 md:mt-0 bg-[rgb(72,81,79)] text-white px-6 py-3 rounded-full hover:bg-[rgb(31,72,34)] 
                font-medium text-sm transition shrink-0 md:mr-28"> 
                    Explora todos los programas
                </a>
            </div>

            <!-- Contenedor de las Tarjetas Adaptable -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 w-full">
                <!-- Tarjeta 1 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_clima/tarjeta1.webp" alt="Programa 2" class="w-full h-96 object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_clima/ubicacion.JPG" 
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

                <!-- Tarjeta 2 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_clima/tarjeta2.webp" alt="Programa 2" class="w-full h-96 object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1"><img src="../../imagenes/imagenes_clima/ubicacion.JPG" 
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

        <!-- Contenedor SOLUCIONES CLIMÁTICAS BASADAS EN LA NATURALEZA -->
        <section class="w-full max-w-5xl mx-auto py-12 md:py-7 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor principal con grid responsive -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-start text-center md:text-left">
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-4 items-center md:items-start w-full">
                    <!-- Título principal verde -->
                    <h2 class="text-3xl font-normal text-[rgb(15,125,63)] leading-tight w-full">
                        Las Soluciones Basadas en la Naturaleza
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Los bosques tropicales se encuentran entre las soluciones climáticas más poderosas del planeta
                    </h3>
                    <!-- Párrafo descriptivo -->
                    <p class="leading-relaxed text-[16px] w-full text-[rgb(72,81,79)]">
                        Almacenan cantidades masivas de carbono en los árboles y el suelo, ayudando a mantener los gases de efecto 
                        invernadero fuera de la atmósfera. Cuando los bosques son talados o degradados, el carbono se libera a la atmósfera, 
                        acelerando el cambio climático.
                    </p>
                    <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="inline-flex items-center gap-2 text-[rgb(15,125,63)] font-bold text-base hover:underline mt-4">
                        Conoce nuestro trabajo 
                        <i class="fa-solid fa-arrow-right-long text-[rgb(15,125,63)]"></i>
                    </a>
                </div>      
                
                <!-- COLUMNA DERECHA: Vídeo con un logo, título y subtítulo -->
                <div class="relative w-full max-w-7xl mx-auto overflow-hidden">
                    <!-- Capa superior flotante (Logo y Textos) -->
                    <div id="capa-texto" class="absolute top-0 left-0 w-full pt-2 pr-2 pb-2 pl-2 flex items-start gap-4 z-10
                        transition-opacity duration-500 opacity-100">
                        <!-- Logo pequeño y circular -->
                        <img src="../../logo/channels4_profile.jpg" alt="Logo" class="w-9 h-9 rounded-full object-cover shrink-0">
                        
                        <!-- Bloque de texto (alineación vertical automática a la izquierda) -->
                        <div class="flex flex-col m-0 p-0">
                        <!-- Título principal -->
                        <h1 class="text-white font-sans text-sm font-bold m-0 mb-1 leading-tight">
                            Para combatir el cambio climático, salvemos Wil...
                        </h1>
                        <!-- Subtítulo pequeño alineado (la N perfectamente bajo la P) -->
                        <p class="text-white font-sans font-bold text-xs m-0 p-0">
                            Naturaleza y Cultura Internacional
                        </p>
                        </div>
                    </div>

                    <!-- Video -->
                    <video id="mi-video" controls preload="metadata" playsinline class="w-full h-auto block">
                        <source src="../../video/Para_Combatir_El_Cambio_Climático_Debemos_Proteger_Los_Bosques.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                </div>
            </div>
        </section>

        <!-- Contenedor Alianzas con comunidades indígenas y locales para la acción climática -->
        <section class="w-full bg-[rgb(244,244,237)] py-10">
            <!-- Contenedor principal con grid adaptable -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center 
                md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full">
                        Alianzas con comunidades indígenas y locales para la acción climática
                    </h2>
                    <!-- Párrafo descriptivo -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Las comunidades indígenas y locales han salvaguardado los bosques durante mucho tiempo a través de sus conocimientos,
                        gobernanza y gestión sostenible del territorio. Apoyar el liderazgo comunitario fortalece la protección a largo plazo 
                        y garantiza que los beneficios de la conservación perduren.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        El cambio en los patrones de lluvia, el aumento de las temperaturas, el riesgo de incendios forestales, las 
                        inundaciones y las sequías ya están afectando a muchas comunidades. La conservación debe apoyar tanto a los 
                        ecosistemas como a las personas que dependen de ellos.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/imagenes_clima/custom-image-web-5-600x600.png" alt="Señora en su país natal" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor PROTECCIÓN DE LOS BOSQUES -->
        <section class="w-full max-w-5xl mx-auto py-8 md:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(15,125,63)] w-full leading-tight">
                        La Protección de los Bosques
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Paisajes conectados: Mayor resiliencia frente al cambio climático
                    </h3>
                    <!-- Párrafo descriptivo -->
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-ful">
                        Los paisajes extensos y conectados son más resilientes ante el estrés y las perturbaciones climáticas. Los bosques 
                        intactos almacenan significativamente más carbono que los bosques fragmentados y tienen una mayor capacidad para 
                        regular las lluvias y los patrones climáticos locales a lo largo del tiempo.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/imagenes_clima/custom-image-web-4-600x600.png" alt="Caucho de un río" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor La Deforestación Acelera el Cambio Climático -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/imagenes_clima/Featured-image-1.png')] 
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 min-h-112 md:h-112.5">
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/65 md:bg-black/35"></div>
                <!-- EJE PRINCIPAL -->
                <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10">
                    <!-- Bloque de textos -->
                    <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start">
                        <!-- Título principal -->
                        <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                            La Deforestación Acelera el Cambio <br class="hidden md:block">Climático
                        </h2>
                        <!-- Párrafos descriptivos -->
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Los bosques tropicales se encuentran entre las soluciones <br class="hidden sm:block">climáticas naturales
                            más poderosas del planeta.
                        </p>
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Almacenan cantidades masivas de carbono en los árboles y el suelo, <br class="hidden md:block">ayudando a mantener 
                            los gases de efecto invernadero fuera de la <br class="hidden md:block">atmósfera. Cuando los bosques son talados o 
                            degradados, ese <br class="hidden md:block">carbono almacenado se libera a la atmósfera. Al mismo tiempo, se
                            <br class="hidden md:block">pierde la capacidad del bosque para absorber carbono en el futuro. 
                        </p>
                        <p class="text-[16px] leading-relaxed w-full">
                            Los bosques tropicales están siendo deforestados más 
                            <br class="hidden md:block">rápido que cualquier otro ecosistema, y desempeñan un
                            <br class="hidden md:block">papel crucial en la regulación y estabilización de los
                            <br class="hidden md:block">patrones climáticos globales.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo puedes ayudar a proteger los bosques y el clima -->
        <section class="w-full max-w-5xl mx-auto py-8 px-5 sm:px-6 md:px-8 lg:px-12 box-border">
            <!-- Contenedor con grid responsive e inversión de orden -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-3 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full leading-tight">
                        Cómo contribuir a la protección de la biodiversidad
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full">
                        Proteger la biodiversidad requiere compromiso y soluciones pensadas para el largo plazo. En Naturaleza y Cultura 
                        Internacional trabajamos junto a aliados, gobiernos y comunidades locales para proteger bosques, conservar hábitats 
                        conectados y salvaguardar las especies que dependen de ellos.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        A través de estas alianzas, impulsamos esfuerzos de conservación que trascienden los ciclos de proyecto y 
                        contribuyen a mantener ecosistemas saludables y resilientes en el tiempo.
                    </p>
                    <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="inline-flex items-center gap-2 text-[rgb(15,125,63)] font-bold text-base hover:underline mt-4">
                        Conoce más sobre nuestro trabajo 
                        <i class="fa-solid fa-arrow-right-long text-[rgb(15,125,63)]"></i>
                    </a>
                </div>      

                <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
                <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/imagenes_clima/Horizontal-Web-Image-3.png" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>