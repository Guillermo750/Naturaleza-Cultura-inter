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
    <title>Trabaja con nosotros</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/trabajamos/Featured-image-2.png)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[90vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide md:whitespace-nowrap">
                        Trabaja con nosotros
                    </h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/trabajamos/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Únete a un equipo que impulsa la conservación desde lo local. -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-4 px-6 
            text-center md:text-left text-[rgb(72,81,79)]">  
            <!-- Título -->
            <h2 class="text-2xl font-semibold tracking-wider w-full">
                Únete a un equipo que impulsa la conservación desde lo local
            </h2>

            <!-- Párrafos descriptivos -->
            <p class="text-[16px] w-full">
                En Naturaleza y Cultura Internacional trabajamos junto a comunidades y aliados locales para proteger algunos de los 
                paisajes más biodiversos del planeta.
            </p>
            <p class="text-[16px] w-full">
                Si te mueve esta misión, el trabajo en equipo y aportar desde el territorio, este puede ser tu lugar.
            </p>
        </section>

        <!-- Contenedor Última actualización: abril 2026 -->
        <section class="w-full md:max-w-4xl mx-auto p-4 sm:p-6 space-y-4">

            <!-- Título del puesto (H2 o H3 según la jerarquía de tu página) -->
            <h2 class="text-2xl font-semibold text-[rgb(72,81,79)] tracking-tight">
                Secretario/a técnico/a Fondo Futuro Amazónico
            </h2>

            <!-- Fecha de última actualización (SEO: Importante mantener la fecha visible) -->
            <p class="text-base text-[rgb(31,72,54)]">
                Última actualización: abril de 2026
            </p>

            <!-- BLOQUES DE INFORMACIÓN (Ubicación y Fechas) -->
            <div class="space-y-4 text-[rgb(72,81,79)]">
                <!-- Bloque 1: Ubicación -->
                <p class="w-full p-5 bg-[rgb(231,235,231)] font-medium text-base">
                Ecuador (remoto)
                </p>

                <!-- Bloque 2: Fecha límite de aplicación -->
                <p class="w-full p-5 bg-[rgb(231,235,231)] text-base">
                Aplicaciones abiertas hasta el 15 de abril de 2026
                </p>
            </div>

            <!-- BOTONES DE ACCIÓN -->
            <!-- flex-wrap y space-y/space-x aseguran que si la pantalla es muy pequeña, los botones se apilen suavemente sin romperse -->
            <div class="flex flex-wrap items-center gap-3 pt-2">
                <!-- Botón Términos de Referencia -->
                <a href="../../docs/TdR Secretario Técnico Fondo Futuro.pdf" download="Terminos_de_Referencia_Amazonico.pdf"
                    class="inline-block px-5 py-3 bg-[rgb(15,125,63)] hover:bg-[rgb(12,100,50)] text-white font-semibold 
                    text-base rounded-full transition-colors duration-200 text-center">
                    Términos de Referencia
                </a>

                <!-- Botón Aplica Aquí -->
                <button onclick="alert('Hola :) Este formulario ya está cerrado')" class="inline-block px-6 py-3 bg-[rgb(74,85,78)]
                    hover:bg-[rgb(31,72,34)] text-white font-semibold text-base rounded-full transition-colors duration-200 text-center">
                    Aplica Aquí
                </button >
            </div>
        </section>

        <!-- Contenedor ¿Por qué trabajar con nosotros? -->
        <section class="w-full relative z-0 pt-4 pb-6">
            <!-- Contenedor con la imagen de fondo (Se ajustó el margen superior mt-4 para que coincida perfectamente con la línea) -->
            <div class="w-full bg-[url('../../imagenes/trabajamos/Untitled-design-7.png')] 
                bg-cover bg-center bg-no-repeat flex items-center relative z-10 mt-4 py-16 min-h-112 md:h-112.5">
                
                <!-- CAPA DE OSCURECIDO DIFUMINADO -->
                <div class="absolute inset-0 z-0 bg-black/60 md:bg-black/45"></div>
                <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10">
                    <!-- Bloque de textos -->
                    <div class="w-full max-w-2xl flex flex-col text-white text-center md:text-left items-center md:items-start relative z-10">

                        <!-- Título principal -->
                        <h2 class="text-3xl font-semibold mb-2.5 w-full leading-tight">
                            ¿Por qué trabajar con nosotros?
                        </h2>

                        <!-- Párrafo descriptivo -->
                        <p class="mb-4 text-[16px] leading-relaxed w-full">
                            En Naturaleza y Cultura Internacional, nuestros valores son la base de
                            <br class="hidden sm:block">todo lo que hacemos. Definen quiénes somos como organización y
                            <br class="hidden sm:block">guían nuestro trabajo día a día.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Acordeón -->
        <section class="w-full md:max-w-4xl mx-auto p-0 sm:p-4 space-y-2.5">
            <!-- TÍTULO DE LA SECCIÓN -->
            <!-- px-4 asegura que en móviles el título no toque los bordes de la pantalla -->
            <h2 class="text-2xl font-medium text-[rgb(72,81,79)] px-4 pt-4 mb-4 text-center md:text-left">
                Nuestros Valores
            </h2>

            <!-- ACORDEÓN 01 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)]
                 select-none text-left">
                <h3 class="text-xl">Conservación desde lo local.</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <!-- Contenedor del contenido con animación de altura controlada por JS -->
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                            Impulsamos una conservación liderada desde el territorio, junto a comunidades indígenas y rurales, y gobiernos 
                            subnacionales, a quienes consideramos socios en igualdad de condiciones. Esto implica escuchar activamente y 
                            promover una cultura organizacional donde todas las voces sean valoradas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 02 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)]
                    select-none text-left">
                <h3 class="text-xl">Recursos manejados desde el territorio.</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                        Reconocemos que una gestión sólida es clave para nuestro trabajo. Al mismo tiempo, priorizamos la eficiencia para 
                        destinar la mayor parte de nuestros recursos directamente al territorio, donde ocurre la conservación.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 03 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h3 class="text-xl">Compromiso a largo plazo.</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                        Diseñamos e implementamos programas con una visión de largo plazo, asegurando resultados de conservación 
                        sostenibles en el tiempo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 04 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h3 class="text-xl">Agilidad, innovación y espíritu emprendedor.</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                        Nos adaptamos a contextos cambiantes, respondemos a desafíos y aprovechamos nuevas oportunidades con creatividad y 
                        flexibilidad.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 05 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h3 class="text-xl">Diversidad e inclusión.</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                        Trabajamos junto a comunidades y culturas diversas como socios en igualdad de condiciones. Valoramos y promovemos 
                        la diversidad dentro de nuestro equipo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 06 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h3 class="text-xl">Aprender y compartir</h3>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <p class="text-base leading-relaxed">
                        Durante 30 años, hemos aprendido de nuestros logros y desafíos. Compartimos ese aprendizaje y mantenemos una 
                        actitud abierta para seguir aprendiendo de otros.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor ¿Cómo aplicar? -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-4 px-6 
            text-center md:text-left text-[rgb(72,81,79)]">  
            <!-- Título -->
            <h2 class="text-2xl font-semibold tracking-wider w-full">
                ¿Cómo aplicar?
            </h2>

            <!-- Párrafos descriptivos -->
            <p class="text-[16px] w-full">
                Para aplicar, revisa los términos de referencia de cada vacante y envía tu postulación a través del link de Jotform. Solo 
                contactaremos a las personas preseleccionadas.
            </p>
        </section>
        
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>