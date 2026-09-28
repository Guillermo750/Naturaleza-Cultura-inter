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
    <title>Biodiversidad</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/imagenes_biodiversidad/imagen-fondo.jpg)] bg-cover bg-center bg-no-repeat 
            flex items-center min-h-[50vh] md:h-[80vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 mt-6 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide">Biodiversidad</h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/imagenes_biodiversidad/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Nuestro Trabajo -->
        <section class="w-full max-w-5xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-5 sm:px-6 
            md:px-8 lg:px-12 text-center md:text-left">  
            <!-- Título verde -->
            <h2 class="text-3xl text-[rgb(15,125,63)] tracking-wider w-full">Nuestro Trabajo</h2>
            
            <!-- Subtítulo -->
            <h3 class="text-2xl text-[rgb(72,81,79)] font-normal leading-tight w-full">Protegemos la Biodiversidad conectando 
                Paisajes Naturales
            </h3>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Las especies dependen de su hábitat. Cuando los bosques están 
                sanos y conectados, los animales pueden desplazarse, encontrar alimento y reproducirse. Cuando el hábitat se fragmenta o se 
                pierde, las poblaciones de las especies están en riesgo y el equilibrio del ecosistema comienza a quebrarse.</p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Naturaleza y Cultura Internacional ayuda a proteger la biodiversidad 
                conservando grandes paisajes en toda América Latina. Nuestro trabajo sostiene el hábitat de <b>222 especies amenazadas,</b>
                incluyendo especies emblemáticas como el <b>Jaguar <em>(Panthera Onca)</em>, el Oso de Anteojos <em>(Tremarctos ornatus),
                </em></b> y <b>el Cóndor Andino <em>(Vultur gryphus),</em></b> junto con otras especies que son igualmente esenciales para 
                la salud del ecosistema.
            </p>
            <p class="text-lg md:text-xl text-[rgb(15,125,63)] font-medium w-full">La protección de la biodiversidad comienza con la 
                conservación de los bosques conectados que las especies necesitan para prosperar.</p>
        </section>

        <!-- Contenedor Programas Destacados -->
        <section class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 md:py-8">
            <!-- Cabecera de la sección: Título + Línea, Botón a la derecha -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 text-center md:text-left gap-4">
                <!-- Bloque del título estructurado en fila (Flex) en ordenadores grandes -->
                <div class="flex flex-col items-center md:items-start lg:flex-row lg:items-center gap-4 w-full">
                    <!-- IMAGEN DE LA FLOR: Visible solo en ordenadores grandes, colocada de forma natural al lado del texto -->
                    <div class="hidden lg:block w-20 shrink-0">
                        <img src="../../imagenes/imagenes_biodiversidad/nci-cp-illustration1-countryp.png" alt="Decoración lateral" 
                        class="w-full h-auto object-contain">
                    </div>
                    <!-- Contenedor interno para el texto del título y su línea beige inferior -->
                    <div class="flex flex-col items-center md:items-start w-full">
                        <h2 class="text-3xl font-normal text-[rgb(72,81,79)] w-full">Programas Destacados</h2>
                        <!-- Imagen de la línea debajo del título -->
                        <img src="../../imagenes/imagenes_biodiversidad/linea_beige.png" alt="Línea decorativa" class="h-17 w-32 mt-3">
                    </div>
                </div>

                <!-- Botón a la derecha alineado al final -->
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
                        <img src="../../imagenes/imagenes_biodiversidad/tarjeta1.webp" alt="Programa 1" class="w-full h-96 object-cover 
                        rounded-t-md">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] px-2 py-0.5">URGENT</span>
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/imagenes_biodiversidad/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
                            ECUADOR, PERÚ
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 mb-2 py-4 uppercase">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] leading-snug">Corredor de Conservación Transfronterizo 
                            Andino Amazónico</h3>
                    </div>
                </div>
                   
                <!-- Tarjeta 2 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/imagenes_biodiversidad/tarjeta2.webp" alt="Programa 3" class="w-full h-96 object-cover 
                        rounded-t-md">
                    </div>
                    <div class="p-4 text-center w-full">
                        <p class="text-xs text-[rgb(31,72,34)] mb-1 flex items-center justify-center gap-1">
                            <img src="../../imagenes/imagenes_biodiversidad/ubicacion.jpg" alt="Ubicación" class="w-5 h-6 inline-block"> 
                            PERÚ
                        </p>
                        <div class="flex flex-wrap justify-center gap-2 mb-2 py-4 uppercase">
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BIODIVERSIDAD</span>
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">BOSQUES</span>
                        </div>
                        <h3 class="font-medium text-[rgb(72,81,79)] text-[22px] leading-snug">Bosques Secos del Marañón</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Conectividad -->
        <section class="w-full max-w-5xl mx-auto py-12 md:py-7 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor principal con grid responsive -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-start text-center md:text-left">
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-4 items-center md:items-start w-full">
                    <!-- Título principal verde -->
                    <h2 class="text-3xl font-normal text-[rgb(15,125,63)] leading-tight w-full">
                        Conectividad
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Protegiendo y Conectando Hábitats Esenciales
                    </h3>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full text-[rgb(72,81,79)]">
                        En un mundo cada vez más fragmentado, muchas especies cuentan con menos espacio para migrar, dispersarse, alimentarse 
                        y prosperar. Por ello, <b>Naturaleza y Cultura Internacional</b> se enfoca en proteger los hábitats a la escala que 
                        la naturaleza requiere.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full text-[rgb(72,81,79)]">
                        Ayudamos a conectar ecosistemas más allá de fronteras, para que los animales puedan desplazarse por 
                        <b>corredores de bosques saludables</b> en busca de alimento, agua, refugio y zonas de reproducción. Al vincular 
                        áreas protegidas nacionales, subnacionales y locales, ayudamos a crear corredores de hábitat vitales para especies 
                        amenazadas y de amplio rango de distribución.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full text-[rgb(72,81,79)]">
                        Los paisajes conectados permiten que la fauna y flora se adapte a condiciones cambiantes, mantenga poblaciones 
                        saludables y reduzca los riesgos asociados con el aislamiento y la pérdida de hábitat. <b>Proteger «islas» de bosque 
                        no es suficiente.</b> La conservación es más efectiva cuando los paisajes permanecen sanos y conectados a lo largo del 
                        tiempo.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen con margen corregido -->
                <div class="w-full mt-4 md:mt-16 flex justify-center">
                    <img src="../../imagenes/imagenes_biodiversidad/oso.png" alt="Oso" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Una Solución Duradera para la Biodiversidad -->
        <section class="w-full bg-[rgb(244,244,237)] py-10">
            <!-- Contenedor principal con grid adaptable -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center 
                md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full">
                        Una Solución Duradera para la Biodiversidad
                    </h2>
                    <!-- Párrafo descriptivo -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Proteger la biodiversidad requiere una gestión responsable a largo plazo. Naturaleza y Cultura Internacional trabaja 
                        para garantizar que la protección de las especies sea sostenible en el tiempo, combinando la conservación del 
                        hábitat con alianzas estratégicas, investigación y liderazgo local sostenido.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Estas alianzas respaldan una protección a largo plazo que beneficia tanto a las personas como a la naturaleza, 
                        ayudando a gestionar estos paisajes. Al integrar el conocimiento local y el liderazgo comunitario, la protección de 
                        las especies se vuelve más duradera y efectiva.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/imagenes_biodiversidad/cientifica.png" alt="Científica ayudando a la Biodiversidad" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor TRANSFORMANDO LA INVESTIGACIÓN EN ACCIÓN -->
        <section class="w-full max-w-5xl mx-auto py-8 md:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(15,125,63)] w-full leading-tight">
                        Transformar la investigación en acción
                    </h2>
                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl w-full">
                        Monitoreo de especies amenazadas
                    </h3>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        <b>Naturaleza y Cultura Internacional</b> brinda apoyo técnico y logístico a universidades locales e internacionales, 
                        instituciones de investigación y ONG para monitorear y estudiar especies clave y amenazadas. Esta investigación nos 
                        ayuda a comprender qué necesitan las especies para prosperar y fortalece las estrategias de conservación que protegen
                        la biodiversidad a largo plazo.
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full">
                        El monitoreo y la investigación no son solo ejercicios académicos. Ayudan a orientar decisiones en el mundo real 
                        sobre dónde proteger, cómo fortalecer la <b>gestión responsable</b> y cómo reducir las amenazas a las especies antes 
                        de que sea irreversible.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/imagenes_biodiversidad/biologo.png" alt="Biologo protegiendo a la fauna" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor La Importancia de Proteger la Biodiversidad -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/imagenes_biodiversidad/gepardo.png')]  
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 min-h-112 md:h-112.5">
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/65 md:bg-black/35"></div>
                <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10">
                    <!-- Bloque de textos -->
                    <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10 
                        [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">
                        <!-- Título principal -->
                        <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                            La Importancia de Proteger la <br class="hidden sm:block">Biodiversidad
                        </h2>
                        <!-- Párrafos descriptivos -->
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Las poblaciones de las especies han disminuido un 73% <br class="hidden sm:block">en los últimos 50 años.
                        </p>
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            El monitoreo global muestra que las poblaciones de las especies han <br class="hidden md:block">disminuido de manera 
                            marcada en las últimas décadas, debido <br class="hidden md:block">principalmente a la pérdida de hábitat. América 
                            Latina, y <br class="hidden md:block">particularmente la Amazonía, han experimentado algunos de los
                            <br class="hidden md:block">mayores impactos a medida que la deforestación y la fragmentación 
                            <br class="hidden md:block">se aceleran.
                        </p>
                        <p class="text-[16px] leading-relaxed w-full">
                            La protección y conectividad del hábitat de las especies <br class="hidden md:block">en peligro es clave para 
                            revertir estas tendencias.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo contribuir a la protección de la biodiversidad -->
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
                    <img src="../../imagenes/imagenes_biodiversidad/rana.png" alt="Rana" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>