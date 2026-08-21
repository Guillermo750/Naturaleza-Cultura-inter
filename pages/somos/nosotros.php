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
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 
            text-center md:text-left text-[rgb(72,81,79)]">  
            <!-- Título -->
            <h2 class="text-3xl md:text-4xl font-bold tracking-wider w-full">
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

        <!-- Contenedor ¿Por qué trabajar con nosotros? -->

        <!-- Contenedor Nuestros Valores -->

        <!-- Contenedor Acordeón -->
        <section class="w-full md:max-w-4xl mx-auto p-0 sm:p-4 space-y-2.5">

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

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>