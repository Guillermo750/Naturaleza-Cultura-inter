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
    <title>Comunidades Locales</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/comunidades_locales/fondo.jpg)] bg-cover bg-center bg-no-repeat 
            flex items-center min-h-[50vh] md:h-[80vh] pt-6 pb-12">
            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide">Comunidades locales</h1>
                </div>
            </div>
            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/comunidades_locales/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Nuestro Trabajo -->
        <section class="w-full max-w-5xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-5 sm:px-6 
            md:px-8 lg:px-12 text-center md:text-left">  
            <!-- Título principal -->
            <h2 class="text-3xl md:text-4xl text-[rgb(72,81,79)] tracking-wider w-full">La conservación que nace en el territorio</h2>
            
            <!-- Título pequeño verde -->
            <h3 class="text-2xl  text-[rgb(15,125,63)] font-normal leading-tight w-full">Naturaleza y Cultura Internacional se 
                fundó sobre una convicción fundamental: proteger la naturaleza y fortalecer las culturas vinculadas a estos territorios 
                son esfuerzos inseparables.
            </h3>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">En toda América Latina, los pueblos indígenas y las comunidades locales han 
                cuidado durante generaciones los bosques, ríos y paisajes que consideran su hogar. Sus conocimientos, tradiciones culturales 
                y profunda relación con el territorio orientan la forma en que los ecosistemas son protegidos y gestionados de manera 
                sostenible.
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Al trabajar junto a las comunidades y respaldar las prioridades de 
                conservación que ellas mismas identifican para sus territorios, contribuimos a construir soluciones arraigadas en el 
                contexto local y pensadas para perdurar.
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">Nuestro papel es acompañar estos procesos con herramientas, recursos y 
                espacios de colaboración que fortalezcan la capacidad de las comunidades para cuidar sus territorios, preservar sus 
                tradiciones culturales y mantener los ecosistemas de los que dependen.
            </p>
        </section>

        <!-- Contenedor El liderazgo local fortalece la conservación -->
        <section class="w-full max-w-5xl mx-auto py-8 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-semibold tracking-wide mb-2.5 w-full leading-tight">
                        El liderazgo local fortalece la conservación
                    </h2>

                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full">
                        Naturaleza y Cultura Internacional colabora con comunidades, gobiernos locales y organizaciones indígenas para 
                        identificar prioridades de conservación y diseñar soluciones que respondan a las realidades de cada territorio. 
                        Estas alianzas se construyen sobre la base de la confianza, el respeto y un compromiso compartido con la protección 
                        de los paisajes de los que dependen las comunidades. 
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        Al trabajar de manera conjunta para establecer áreas de conservación, proteger cuencas hidrográficas, restaurar 
                        bosques degradados y resguardar la biodiversidad, impulsamos soluciones que cuentan con respaldo local y generan 
                        beneficios reales para los ecosistemas. 
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        Cuando las comunidades participan directamente en la protección de los territorios de los que dependen, la 
                        conservación se vuelve más sólida, resiliente y duradera. 
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/comunidades_locales/custom-image-web-13-600x600.png" alt="Indígena" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Donde se encuentran la cultura y la conservación -->
        <section class="w-full bg-[rgb(244,244,237)] py-10">
            <!-- Contenedor principal con grid adaptable -->
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center 
                md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full">
                        Donde se encuentran la cultura y la conservación
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Naturaleza y Cultura Internacional reconoce que proteger la naturaleza también implica respetar a las culturas y 
                        comunidades que han cuidado estos territorios durante generaciones. La diversidad cultural, además, contribuye a la 
                        conservación de la diversidad biológica.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        En las regiones donde trabajamos, los pueblos indígenas y las comunidades locales poseen un conocimiento acumulado 
                        durante generaciones sobre bosques, ríos, fauna y ciclos naturales. Este conocimiento ecológico ofrece valiosas 
                        orientaciones para la gestión sostenible de bosques, cuencas hidrográficas, fauna silvestre y suelos.
                    </p>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full">
                        Nuestras alianzas se basan en los principios de <b>Consentimiento Libre, Previo e Informado (CLPI),</b> un estándar 
                        internacional de derechos humanos reconocido por las Naciones Unidas. Este principio garantiza que los pueblos 
                        indígenas tengan el derecho de tomar decisiones informadas sobre las actividades que puedan afectar sus tierras, 
                        territorios y recursos.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/comunidades_locales/custom-image-web-14-600x600.png" alt="Señora en su país natal" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Fortalecer capacidades locales y liderazgo para la conservación -->
        <section class="w-full max-w-5xl mx-auto py-8 md:py-12 px-5 sm:px-6 md:px-8 lg:px-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-semibold tracking-wide mb-2.5 w-full leading-tight">
                        Fortalecer capacidades locales y liderazgo para la conservación
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full">
                        La conservación a largo plazo requiere más que áreas protegidas. También necesita personas con las capacidades, 
                        el conocimiento y los recursos necesarios para gestionar y cuidar sus territorios en el tiempo.
                    </p>
                     <p class="leading-relaxed text-[16px] w-full">
                        Naturaleza y Cultura trabaja junto a las comunidades para fortalecer sus capacidades locales mediante procesos de 
                        formación, acompañamiento técnico y gestión colaborativa de los recursos naturales. Estas alianzas permiten 
                        monitorear la biodiversidad, restaurar ecosistemas, gestionar áreas de conservación y desarrollar iniciativas que 
                        benefician tanto a la naturaleza como a los medios de vida locales. 
                    </p>
                     <p class="leading-relaxed text-[16px] w-full">
                        Al invertir en liderazgo y capacidades locales, la conservación se convierte en un proceso impulsado por las 
                        propias comunidades, y no en una iniciativa impuesta desde fuera.
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/comunidades_locales/custom-image-web-15-600x600.png" alt="Conservadores" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Por qué funciona la conservación liderada desde lo local -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/comunidades_locales/Featured-image-5.png')]  
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 min-h-112 md:h-112.5">
                
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/65 md:bg-black/65"></div>
                <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10">
                    <!-- Bloque de textos -->
                    <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10">

                        <!-- Título principal -->
                        <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                            Por qué funciona la conservación <br class="hidden sm:block">liderada desde lo local 
                        </h2>

                        <!-- Párrafos descriptivos -->
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Los esfuerzos de conservación son más efectivos cuando <br class="hidden sm:block">quienes en el territorio 
                            participan activamente en su <br class="hidden sm:block">protección.
                        </p>
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            Los pueblos indígenas y las comunidades locales gestionan o tienen
                            <br class="hidden md:block">derechos de tenencia sobre aproximadamente una cuarta parte de la
                            <br class="hidden md:block">superficie terrestre del planeta. Diversos estudios muestran que
                            <br class="hidden md:block">muchos de estos territorios albergan algunos de los ecosistemas
                            <br class="hidden md:block">mejor conservados del mundo. También se ha encontrado que los 
                            <br class="hidden md:block">niveles de biodiversidad en territorios gestionados por pueblos
                            <br class="hidden md:block">indígenas suelen ser iguales o incluso superiores a los registrados 
                            <br class="hidden md:block">en muchas áreas protegidas.
                        </p>
                        <p class="text-[16px] leading-relaxed w-full">
                            El enfoque de Naturaleza y Cultura se basa en esta evidencia. Al
                            <br class="hidden md:block">trabajar en alianza con las comunidades y fortalecer su rol como
                            <br class="hidden md:block">guardianes de la naturaleza, las soluciones de conservación se
                            <br class="hidden md:block">vuelven más pertinentes, resilientes y sostenibles en el tiempo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo fortalecer la conservación liderada desde lo local -->
        <section class="w-full max-w-5xl mx-auto py-8 px-5 sm:px-6 md:px-8 lg:px-12 box-border">
            <!-- Contenedor con grid responsive e inversión de orden -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA DERECHA (Textos y botón): Primero en móvil (order-1), segundo en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título principal -->
                    <h2 class="font-medium tracking-wider text-3xl w-full leading-tight">
                        Cómo fortalecer la conservación liderada desde lo local
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[16px] w-full">
                        La conservación es más efectiva cuando las comunidades lideran la protección de los territorios y las fuentes de 
                        vida que consideran su hogar.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        En Naturaleza y Cultura Internacional trabajamos para visibilizar y fortalecer el papel de los pueblos indígenas y 
                        las comunidades locales en el cuidado de los ecosistemas. A través de alianzas de largo plazo, acompañamiento técnico
                        y colaboración con actores locales, impulsamos procesos de conservación que nacen desde los territorios y se 
                        sostienen en el tiempo.
                    </p>
                    <p class="leading-relaxed text-[16px] w-full">
                        Al reconocer y apoyar el liderazgo comunitario, contribuimos a proteger algunos de los paisajes con mayor 
                        biodiversidad del planeta y a asegurar que la conservación beneficie tanto a la naturaleza como a las personas que 
                        dependen de ella.
                    </p>
                    <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
                    <a href="#" class="mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-2.5 rounded-full font-bold 
                    hover:bg-[rgb(31,72,34)] transition-colors self-center md:self-start shrink-0">
                        <span class="text-sm">Conoce más sobre nuestro trabajo</span>
                    </a>
                </div>      

                <!-- COLUMNA IZQUIERDA (Imagen): Segundo en móvil (order-2), primero en pantallas grandes (md:order-1) -->
                <div class="w-full h-full order-2 md:order-1 flex justify-center items-center mt-6 md:mt-0">
                    <img src="../../imagenes/comunidades_locales/Horizontal-Web-Image-5.png" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>