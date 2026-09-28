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
    <title>Fuentes de Agua y Seguridad Hídrica</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/fuentes_de_agua/fondo.png)] bg-cover bg-center bg-no-repeat 
            flex items-center min-h-[50vh] md:h-[80vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide md:whitespace-nowrap">
                        Fuentes de agua y seguridad hídrica</h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/fuentes_de_agua/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Nuestro Trabajo -->
        <section class="w-full max-w-5xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-5 sm:px-6 
            md:px-8 lg:px-12 text-center md:text-left">  
            <!-- Título verde -->
            <h2 class="text-3xl md:text-4xl text-[rgb(15,125,63)] tracking-wider w-full">Nuestro Trabajo</h2>
            
            <!-- Subtítulo grande -->
            <h3 class="text-2xl md:text-3xl text-[rgb(72,81,79)] font-normal leading-tight w-full">
                Proteger el agua para proteger la vida
            </h3>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Naturaleza y Cultura Internacional ayuda a garantizar agua limpia y segura 
                mediante la protección estratégica, a gran escala, de bosques, humedales y ecosistemas de alta montaña. Al conservar cuencas
                hidrográficas y establecer áreas de conservación en cabeceras clave, contribuimos a salvaguardar tanto a las personas como 
                a la biodiversidad. 
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                El agua conecta los ecosistemas. Sustenta bosques, humedales, ríos y planicies de inundación que brindan hábitat a miles de 
                especies. <b>Cuando protegemos el agua desde su origen, protegemos redes ecológicas completas. </b>
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Nuestras áreas de conservación protegen cabeceras 
                vitales que albergan importantes focos de biodiversidad y benefician a las comunidades aledañas. 
            </p>
        </section>

        <!-- Contenedor CLAVE PARA LA BIODIVERSIDAD -->
        <section class="w-full max-w-5xl mx-auto mt-4 mb-6 md:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(15,125,63)] w-full leading-tight">
                        Clave para la Biodiversidad
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        El agua impulsa la conservación 
                    </h3>
                    <!-- Párrafos descriptivos -->
                     <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Los ecosistemas de agua dulce cubren menos del 1 % de la superficie de la Tierra, pero albergan una proporción 
                        extraordinaria de la biodiversidad global. Ríos, humedales y bosques nublados ofrecen zonas de reproducción, rutas 
                        migratorias y refugio para innumerables especies.  
                     </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Los bosques saludables ayudan a regular los ciclos del agua que sostienen a la biodiversidad. Cuando los bosques se 
                        degradan, los arroyos se secan, la temperatura del agua aumenta y las poblaciones de las especies se ven afectadas. 
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Proteger las fuentes de agua contribuye a mantener los hábitats naturales de las especies, los flujos estacionales 
                        y los procesos ecológicos de los que dependen. 
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/fuentes_de_agua/custom-image-web-10-600x600.png" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Países ricos en agua, conservación estratégica -->
        <section class="w-full bg-[rgb(244,244,237)] py-10">
            <!-- Contenedor principal con grid adaptable -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center 
                md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full">
                        Países ricos en agua, conservación estratégica
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        <b>Los países donde trabajamos albergan algunas de las reservas de agua dulce más importantes de las Américas.</b>
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Naturaleza y Cultura Internacional trabaja en algunos de los paisajes más ricos en agua y ecológicamente 
                        significativos de América Latina. Desde páramos y bosques nublados de gran altitud hasta extensas cabeceras amazónicas, 
                        estos ecosistemas funcionan como verdaderas reservas de agua para el continente.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Estos paisajes capturan la lluvia, regulan el caudal de los ríos, recargan acuíferos y sostienen algunos de los 
                        sistemas de agua dulce más biodiversos del planeta.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Al proteger los ecosistemas donde nace el agua, ampliamos el impacto de la conservación, fortaleciendo los bosques y
                        beneficiando a las comunidades que dependen de ellos.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/fuentes_de_agua/custom-image-web-9-600x600.png" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Programas Destacados -->
        <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 py-8">
            <!-- Cabecera de la sección: Título + Línea, Botón a la derecha -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 text-center md:text-left gap-4">
                <!-- Bloque del título estructurado en fila (Flex) en ordenadores grandes -->
                <div class="flex flex-col items-center md:items-start lg:flex-row lg:items-center gap-4 w-full">
                    <!-- IMAGEN DE LA FLOR: Visible solo en ordenadores grandes, colocada de forma natural al lado del texto -->
                    <div class="hidden lg:block w-20 shrink-0">
                        <img src="../../imagenes/fuentes_de_agua/nci-cp-illustration1-countryp.png" alt="Decoración lateral" 
                        class="w-full h-auto object-contain">
                    </div>
                    <!-- Contenedor interno para el texto del título y su línea beige inferior -->
                    <div class="flex flex-col items-center md:items-start w-full">
                        <h2 class="text-3xl font-normal text-[rgb(72,81,79)] w-full">Programas Destacados</h2>
                        <!-- Imagen de la línea debajo del título -->
                        <img src="../../imagenes/fuentes_de_agua/linea_beige.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                    </div>
                </div>

                <!-- Botón a la derecha -->
                <a href="#" class="mt-4 md:mt-0 bg-[rgb(72,81,79)] text-white px-6 py-3 rounded-full hover:bg-[rgb(31,72,34)] 
                font-medium text-sm transition shrink-0 md:mr-64"> 
                    Explora todos los programas
                </a>
            </div>

            <!-- Contenedor de las Tarjetas Adaptable -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 w-full">
                <!-- Tarjeta 1 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/fuentes_de_agua/Feature-Image-Conservacion-Fuentes-de-Agua-600x338.jpg" alt="Programa 1" 
                        class="w-full h-96 object-cover rounded-t-md">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/fuentes_de_agua/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
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
            </div>
        </section>

        <!-- Contenedor PROTEGER CUENCAS A GRAN ESCALA -->
        <section class="w-full max-w-5xl mx-auto py-8 md:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(15,125,63)] w-full leading-tight">
                        Proteger cuencas a gran escala
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Paisajes conectados que sostienen la vida
                    </h3>
                    <!-- Párrafos descriptivos -->
                     <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        El agua fluye a través de los paisajes, conectando bosques de alta montaña con ríos y humedales. 
                     </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        Proteger territorios amplios y conectados garantiza que las especies puedan migrar, reproducirse y adaptarse a 
                        condiciones cambiantes. Estos paisajes proporcionan alimento, refugio y rutas seguras para mamíferos, aves, 
                        anfibios, peces e insectos. 
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/fuentes_de_agua/custom-image-web-11-600x600.png" alt="" 
                    class="w-full md:h-80 block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Aliándonos con comunidades locales para proteger la vida -->
        <section class="w-full bg-[rgb(244,244,237)] py-10">
            <!-- Contenedor principal con grid adaptable -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center 
                md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full">
                        Aliándonos con comunidades locales para proteger la vida
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Con frecuencia, <b>el agua es lo primero que convoca a las comunidades a la conservación.</b>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Cuando los manantiales comienzan a secarse, los ríos se contaminan o los flujos estacionales se vuelven 
                        impredecibles, los impactos son inmediatos. La seguridad hídrica afecta el acceso al agua potable, la agricultura, 
                        los medios de vida y la identidad cultural.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        <b>Proteger las fuentes de agua crea un incentivo compartido para la conservación.</b> Cuando las comunidades 
                        protegen las cabeceras y los bosques circundantes, no solo aseguran agua para hoy: también protegen el mañana.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        En los paisajes donde trabajamos, el liderazgo local es esencial para la protección a largo plazo de las cuencas. 
                        La conservación impulsada por las comunidades ayuda a garantizar que los bosques permanezcan intactos, que los ríos 
                        sigan fluyendo y que la biodiversidad prospere junto con el bienestar humano.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/fuentes_de_agua/Fuentes-De-Agua-3-Seccion-Mano-Planta.jpg" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor La escasez de agua amenaza la biodiversidad -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/fuentes_de_agua/Fuentes-de-Agua-Escacez-Biodiversidad.jpg')]  
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 min-h-112 md:h-112.5">
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/55 md:bg-black/45"></div>
                <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10">
                    <!-- Bloque de textos -->
                    <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10">
                        <!-- Título principal -->
                        <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                            La escasez de agua amenaza la <br class="hidden sm:block">biodiversidad 
                        </h2>
                        <!-- Párrafos descriptivos -->
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Cuando las cuencas hidrográficas se degradan, los impactos se 
                            <br class="hidden sm:block">expanden hacia todo el paisaje.
                        </p>
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            La reducción del caudal afecta el equilibrio de los ecosistemas. Los
                            <br class="hidden md:block">humedales se reducen, disminuyendo las áreas de reproducción para
                            <br class="hidden md:block">las especies.
                        </p>
                        <p class="text-[16px] leading-relaxed w-full">
                            La deforestación y el cambio de uso del suelo alteran los ciclos
                            <br class="hidden md:block">hidrológicos naturales, debilitando tanto la biodiversidad de agua
                            <br class="hidden md:block">dulce como la terrestre.
                        </p>
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            <br>Por ello, proteger el agua es una inversión directa en la supervivencia
                            <br class="hidden sm:block">de las especies y en la integridad de los ecosistemas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo puedes ayudar a proteger el agua y la vida -->
        <section class="w-full max-w-5xl mx-auto py-8 px-5 sm:px-6 md:px-8 lg:px-12 box-border">
            <!-- Contenedor con grid responsive e inversión de orden -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full leading-tight">
                        Cómo puedes ayudar a proteger el agua y la vida 
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full">
                        Proteger el agua desde su origen fortalece los bosques, sostiene a las comunidades y protege la biodiversidad.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        En Naturaleza y Cultura Internacional trabajamos junto a comunidades, gobiernos locales y aliados estratégicos para 
                        conservar fuentes de agua, restaurar cuencas degradadas y asegurar la gestión a largo plazo de ecosistemas que 
                        sostienen la vida. 
                    </p>
                    <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                    hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="text-sm">Conoce más sobre nuestro trabajo</span>
                    </a>
                </div>      
                <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
                <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/fuentes_de_agua/Fuentes-De-Agua-Biodiversidad-Colibris-Especies-600x400.jpg" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>