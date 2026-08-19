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
    <title>Nuestro enfoque y visión</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/enfoque/NCI-Landscape1.webp)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[90vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide md:whitespace-nowrap">
                        Nuestro enfoque y visión
                    </h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/30_años/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>
        
        <!-- Contenedor Proteger paisajes saludables y conectados -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 
            text-center md:text-left">  
            <!-- Título -->
            <h2 class="text-3xl md:text-4xl text-[rgb(72,81,79)] tracking-wider w-full">Proteger paisajes saludables y conectados</h2>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                Naturaleza y Cultura Internacional trabaja junto a pueblos indígenas, comunidades locales, gobiernos y aliados para 
                proteger algunos de los paisajes con mayor biodiversidad de América Latina. Estos territorios vivos albergan una 
                biodiversidad extraordinaria. Al mismo tiempo, almacenan carbono, resguardan fuentes de agua dulce y sostienen culturas y 
                medios de vida.
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                Durante más de 30 años, este enfoque liderado desde lo local y basado en la conservación a escala de paisaje ha permitido 
                proteger millones de hectáreas.
            </p>
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                <b>Hoy sigue guiando nuestra visión:</b> fortalecer la gobernanza y el cuidado de estos territorios para que permanezcan 
                protegidos y saludables para las generaciones futuras. 
            </p>
            <p class="text-[17px] text-[rgb(15,125,63)] w-full font-semibold">
                Más de 30 años protegiendo la naturaleza | 11.9 millones de hectáreas protegidas| 14 millones de hectáreas para 2030
            </p>
            <!-- Enlace adaptativo centrado en móvil / a la izquierda en escritorio -->
            <a href="#" class="inline-flex items-center gap-2 text-[rgb(15,125,63)] font-bold text-base hover:underline mt-4">
                Explora nuestro trabajo 
                <i class="fa-solid fa-arrow-right-long text-[rgb(15,125,63)]"></i>
            </a>
        </section>

        <!-- Contenedor Nuestra visión para 2030   -->
        <section class="w-full max-w-4xl mx-auto py-8 md:py-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 text-[rgb(72,81,79)] w-full leading-tight">
                        Nuestra visión para 2030 
                    </h2>
                    
                    <!-- Párrafos descriptivos -->
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        La próxima década será decisiva para la biodiversidad y la resiliencia climática en América Latina. Sobre la base 
                        de más de tres décadas de trabajo en conservación, nos enfocamos en asegurar que los paisajes se mantengan 
                        protegidos y se gestionen de manera efectiva a gran escala. 
                    </p>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Esta visión busca fortalecer la conservación de la biodiversidad ampliando la protección de bosques dentro de 
                        paisajes conectados donde la naturaleza y las personas puedan prosperar juntas. 
                    </p>

                    <!-- Subtítulos + Títulos pequeños + párrafos-->
                    <h3 class="text-[rgb(15,125,63)] tracking-wider text-2xl w-full">
                        PAISAJES SALUDABLES
                    </h3>
                    <h4 class="text-[rgb(72,81,79)] tracking-wider text-xl w-full">
                        14 MILLIONES DE HECTÁREAS PROTEGIDAS
                    </h4>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Proteger más de <b>14 millones de hectáreas de paisajes saludables y conectados</b> en América Latina. 
                    </p>

                    <h3 class="text-[rgb(15,125,63)] tracking-wider text-2xl w-full">
                        ESTABILIDAD CLIMÁTICA 
                    </h3>
                    <h4 class="text-[rgb(72,81,79)] tracking-wider text-xl w-full">
                        MIL MILLIONES DE TONELADAS DE CO₂e ALMACENADAS
                    </h4>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Proteger bosques que almacenan mil millones de toneladas de carbono y ayudan a evitar emisiones a gran escala.
                    </p>

                    <h3 class="text-[rgb(15,125,63)] tracking-wider text-2xl w-full">
                        BIODIVERSIDAD
                    </h3>
                    <h4 class="text-[rgb(72,81,79)] tracking-wider text-xl w-full">
                        500+ ESPECIES AMENAZADAS PROTEGIDAS
                    </h4>
                    <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px] w-full px-4 md:px-0">
                        Garantizar hábitat para cientos de especies amenazadas en ecosistemas conectados..
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-start mt-6 md:mt-0 px-4 md:px-0">
                    <img src="../../imagenes/enfoque/custom-image-web-600x600.png" alt="Oso negro" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor GOBERNANZA REGIONAL -->
        <section class="w-full bg-[rgb(234,232,211)] py-10 px-6">
            <!-- Contenedor principal con grid adaptable -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-4xl text-center md:text-left">
                <!-- COLUMNA DERECHA (Texto): Se renderiza PRIMERO en móvil (order-1) y SEGUNDO en pantallas grandes (md:order-2) -->
                <div class="flex flex-col space-y-4 order-1 md:order-2 items-center md:items-start w-full ">
                    <!-- Título principal -->
                    <h2 class=" tracking-wider text-3xl w-full text-[rgb(15,125,63)]">
                        GOBERNANZA REGIONAL
                    </h2>
                    <!-- Párrafos descriptivos -->
                    <h3 class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)] font-semibold">
                        7 COALICIONES DE CONSERVACIÓN
                    </h3>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)]">
                        Fortalecer estructuras regionales de gobernanza que gestionan paisajes a gran escala.
                    </p>
                    <h2 class="ftracking-wider text-3xl w-full text-[rgb(15,125,63)]">
                        PROTECCIÓN A LARGO PLAZO
                    </h2>
                    <h3 class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)] font-semibold">
                        41 % DE LOS PAISAJES CON FINANCIAMIENTO SOSTENIBLE
                    </h3>
                    <p class="leading-relaxed text-[16px] font-Avenir Book w-full text-[rgb(72,81,79)]">
                        Lograr que casi la mitad de los paisajes protegidos cuenten con mecanismos duraderos de financiamiento para su 
                        conservación.
                    </p>
                </div>

                <!-- COLUMNA IZQUIERDA (Imagen): Se renderiza SEGUNDO en móvil (order-2) y PRIMERO en pantallas grandes (md:order-1) -->
                <div class="w-full order-2 md:order-1 flex justify-center mt-4 md:mt-0">
                    <img src="../../imagenes/enfoque/custom-image-web-11-600x600.png" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Por qué este trabajo es importante -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/enfoque/Featured-image.png')] 
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 px-6 md:px-12 lg:px-48 min-h-112 md:h-112.5">
                
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/60 md:bg-black/45"></div>
                
                <!-- Bloque de textos -->
                <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10 
                    [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">

                    <!-- Título principal -->
                    <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                        Por qué este trabajo es importante
                    </h2>

                    <!-- Párrafos descriptivos -->
                    <p class="mb-4 text-[16px] leading-relaxed w-full">
                        Los bosques saludables y conectados se encuentran entre las
                        <br class="hidden sm:block">defensas naturales más poderosas frente a la pérdida de
                        <br class="hidden sm:block">biodiversidad y el cambio climático. Proveen hábitat para
                        <br class="hidden sm:block">innumerables especies, mantienen procesos ecológicos esenciales,
                        <br class="hidden sm:block">protegen los sistemas de agua dulce y sostienen a las comunidades
                        <br class="hidden sm:block">que dependen de ellos.
                    </p>
                    <p class="mb-4 text-[16px] leading-relaxed w-full">
                        Sin embargo, estos ecosistemas enfrentan una fragmentación
                        <br class="hidden md:block">creciente causada por la deforestación, el desarrollo no planificado y
                        <br class="hidden md:block">el uso insostenible de los recursos naturales. Proteger sitios aislados
                        <br class="hidden md:block">no es suficiente.
                    </p>
                    <p class="text-[16px] leading-relaxed w-full">
                        La conservación debe mantener la conectividad entre paisajes para
                        <br class="hidden md:block">que las especies puedan desplazarse, los ecosistemas puedan
                        <br class="hidden md:block">adaptarse y las personas sigan beneficiándose de sistemas naturales
                        <br class="hidden md:block">saludables.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contenedor Cómo funciona nuestro modelo de conservación  -->
        <section class="max-w-4xl mx-auto py-8 px-6">
            <h2 class="text-3xl text-[rgb(15,125,63)] mb-4 text-center md:text-left"> 
                Cómo funciona nuestro modelo de conservación
            </h2>
            <h3 class="text-2xl text-[rgb(72,81,79)] mb-4 text-center md:text-left"> 
                Proteger paisajes, fortalecer alianzas y asegurar la conservación a largo plazo 
            </h3>
            <p class="text-[16px] text-[rgb(72,81,79)] mb-4 text-center md:text-left">
                Nuestro enfoque se basa en tres prioridades interconectadas: 
            </p>

            <div class="flex flex-col items-center gap-6">
                <!-- Fila: 3 tarjetas -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 w-full">

                    <!-- Tarjeta 1 -->
                    <div class="relative group h-80 flex flex-col justify-end p-6 overflow-hidden rounded">
                        <img src="../../imagenes/enfoque/custom-image-web-10-600x600.png" alt="" 
                        class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/60 group-hover:opacity-0 transition-opacity duration-300 z-10"></div>
                        
                        <!-- Contenedor de texto flexible para forzar la alineación -->
                        <div class="relative z-10 flex flex-col h-full justify-end">
                            <!-- Título (con altura mínima para evitar saltos de línea excesivos en los cortos) -->
                            <div class="min-h-16 flex items-end">
                                <h3 class="text-white text-xl leading-tight">Proteger paisajes clave</h3>
                            </div>
                            <!-- Descripción (se alinea abajo) -->
                            <p class="text-base text-white mt-2">Apoyamos la creación y el fortalecimiento de áreas protegidas en paisajes de alta biodiversidad que enfrentan...</p>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full h-1.5 bg-amber-500 opacity-0 group-hover:opacity-100"></div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="relative group h-80 flex flex-col justify-end p-6 overflow-hidden rounded">
                        <img src="../../imagenes/enfoque/Untitled-design-2022-07-28T003307.746-620x465.webp" alt="" 
                        class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/60 group-hover:opacity-0 transition-opacity duration-300 z-10"></div>
                        
                        <!-- Contenedor de texto flexible para forzar la alineación -->
                        <div class="relative z-10 flex flex-col h-full justify-end">
                            <!-- Título (este ocupa 3 líneas, pero el min-h y flex items-end lo mantienen alineado con los demás) -->
                            <div class="min-h-16 flex items-end">
                                <h3 class="text-white text-xl leading-tight">Fortalecer el liderazgo y las coaliciones regionales</h3>
                            </div>
                            <!-- Descripción (se alinea abajo) -->
                            <p class="text-base text-white mt-2">Más del 90% de nuestro equipo vive y trabaja en los territorios donde desarrollamos nuestras acciones.</p>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full h-1.5 bg-amber-500 opacity-0 group-hover:opacity-100"></div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="relative group h-80 flex flex-col justify-end p-6 overflow-hidden rounded">
                        <img src="../../imagenes/enfoque/Banner-Amazonian-Fund-Page-Banner-Desktop-600x338.webp" alt="" 
                        class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/60 group-hover:opacity-0 transition-opacity duration-300 z-10"></div>
                        
                        <!-- Contenedor de texto flexible para forzar la alineación -->
                        <div class="relative z-10 flex flex-col h-full justify-end">
                            <!-- Título (altura mínima para alinear) -->
                            <div class="min-h-16 flex items-end">
                                <h3 class="text-white text-xl leading-tight">Asegurar la gestión a largo plazo</h3>
                            </div>
                            <!-- Descripción (se alinea abajo) -->
                            <p class="text-base text-white mt-2">Promovemos mecanismos de financiamiento y herramientas de gestión que ayudan a garantizar la protección de estos paisajes...</p>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full h-1 bg-amber-500 opacity-0 group-hover:opacity-100"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor CLAVE PARA LA BIODIVERSIDAD -->
        <section class="w-full max-w-4xl mx-auto mt-4 mb-6 md:py-12">
            <!-- Contenedor con grid responsive sin alterar el orden original -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6 items-center md:items-stretch text-center md:text-left">
                
                <!-- COLUMNA IZQUIERDA: Textos -->
                <div class="flex flex-col space-y-3 items-center md:items-start w-full text-[rgb(72,81,79)]">
                    <!-- Título corregido para evitar desbordes en portátiles -->
                    <h2 class="text-3xl font-normal tracking-wide mb-2.5 w-full leading-tight">
                        Liderazgo local a escala de paisaje 
                    </h2>

                    <!-- Párrafos descriptivos -->
                     <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                        Naturaleza y Cultura Internacional nació de una idea sencilla: la conservación funciona mejor cuando surge de 
                        relaciones sólidas con las personas que viven en los territorios. 
                     </p>
                    <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                        Hoy contamos con una red de más de <b>150 profesionales de la conservación en América Latina:</b> científicos, 
                        especialistas legales, facilitadores comunitarios y expertos en cartografía, que trabajan junto a aliados locales 
                        en los paisajes que protegen. 
                    </p>
                    <p class="leading-relaxed text-[16px] w-full px-4 md:px-0">
                        Este enfoque, arraigado en lo local, permite proteger paisajes de gran biodiversidad mientras se respeta la cultura 
                        y se fortalecen los medios de vida sostenibles y la resiliencia de las comunidades. 
                    </p>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0 px-4 md:px-0">
                    <img src="../../imagenes/enfoque/Ecuador-768x575.jpg" alt="" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>

        <!-- Contenedor Proteger paisajes saludables y conectados -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-8 px-6 
            text-center md:text-left text-[rgb(72,81,79)] ">  
            <!-- Título -->
            <h2 class="text-3xl md:text-4xl tracking-wider w-full">Mirando hacia el futuro</h2>
            
            <!-- Párrafos descriptivos -->
            <p class="text-[16px] w-full">
                La próxima década será decisiva para la biodiversidad y la estabilidad climática. A medida que aumentan las presiones 
                ambientales, los enfoques de conservación que combinan la protección de bosques saludables, la conectividad ecológica y el 
                liderazgo local serán más necesarios que nunca.
            </p>
            <p class="text-[16px] w-full">
                Naturaleza y Cultura Internacional mantiene su compromiso de proteger paisajes vivos que sostienen la biodiversidad, los 
                sistemas de agua dulce, la resiliencia climática y el bienestar humano en toda América Latina.
            </p>
            <a href="#" class="mt-4 md:mt-0 bg-[rgb(72,81,79)] text-white px-6 py-3 rounded-full hover:bg-[rgb(31,72,34)] 
                font-medium text-sm transition shrink-0 md:mr-64"> 
                    30 años
                </a>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>