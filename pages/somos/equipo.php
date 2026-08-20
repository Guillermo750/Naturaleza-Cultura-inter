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
    <title>Nuestro equipo</title>
</head>

<body>
        <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/nuestro_equipo/interior-banner.jpg)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[90vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide md:whitespace-nowrap">
                        Nuestro equipo
                    </h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/nuestro_equipo/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Conoce al equipo de Naturaleza y Cultura Internacional -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 
            text-center md:text-left">  
            <!-- Título -->
            <h2 class="text-3xl md:text-4xl text-[rgb(15,125,63)] tracking-wider w-full">
                Conoce al equipo de Naturaleza y Cultura Internacional
            </h2>
            
            <!-- Línea naranja -->
            <img src="../../imagenes/nuestro_equipo/linea01.png" class="h-17 w-32 mt-4">

            <!-- Párrafo descriptivo -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                Naturaleza y Cultura Internacional trabaja junto a pueblos indígenas, comunidades locales, gobiernos y aliados para 
                proteger algunos de los paisajes con mayor biodiversidad de América Latina. Estos territorios vivos albergan una 
                biodiversidad extraordinaria. Al mismo tiempo, almacenan carbono, resguardan fuentes de agua dulce y sostienen culturas y 
                medios de vida.
            </p>
        </section>

        <!-- Contenedor Equipo Internacional -->
        <section class="max-w-4xl mx-auto">
            <h2 class="text-3xl  text-[rgb(15,125,63)] mb-8">
                Equipo Internacional
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <!-- Miembro 1 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Karina-Copen1.webp" alt="Karina Copen" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Karina Copen</h3>
                        <p class="text-xs">Subdirectora</p>
                    </div>
                </div>

                <!-- Miembro 2 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Keryn-Leger.webp" alt="Keryn Leger" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Keryn Leger</h3>
                        <p class="text-xs">Directora Financiera</p>
                    </div>
                </div>

                <!-- Miembro 3 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Renzo_Paladines_NCI_Team_Internacional.webp" alt="Renzo Paladines" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Renzo Paladines</h3>
                        <p class="text-xs">Director de Conservación</p>
                    </div>
                </div>

                <!-- Miembro 4 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Laureen-Photo-Square-v1-600x600.webp" alt="Lauren Alvarez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Lauren Alvarez</h3>
                        <p class="text-xs">Gerente de Alianzas Estratégicas</p>
                    </div>
                </div>

                <!-- Miembro 5 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Kristen-Heard.webp" alt="Kristen Heard" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Kristen Heard</h3>
                        <p class="text-xs">Directora de Marketing y Comunicaciones</p>
                    </div>
                </div>

                <!-- Miembro 6 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Headshot-Nora-e1674845675886-400x400.webp" alt="Nora Sánchez Luzardo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Nora Sánchez Luzardo</h3>
                        <p class="text-xs">Coordinadora Senior de Comunicación para América Latina</p>
                    </div>
                </div>

                <!-- Miembro 7 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Simon-Quintero-528x600.webp" alt="Simón Quintero" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Simón Quintero</h3>
                        <p class="text-xs">Coordinador de Monitoreo y Evaluación para América Latina</p>
                    </div>
                </div>

                <!-- Miembro 8 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Daniel-Ruvalcabal.webp" alt="Daniel Ruvalcaba" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 inset-x-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Daniel Ruvalcaba</h3>
                        <p class="text-xs text-gray-200">Administrador de Oficina</p>
                    </div>
                </div>

                <!-- Miembro 9 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/DSC_1290-557x400.webp" alt="Mireya Serrano" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Mireya Serrano</h3>
                        <p class="text-xs">Coordinadora de Monitoreo y Evaluación para América Latina</p>
                    </div>
                </div>

                <!-- Miembro 10 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Heather-Thomas.webp" alt="Heather Thomas" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Heather Thomas</h3>
                        <p class="text-xs">Gerente Senior de Marketing y Comunicaciones</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Equipo en Ecuador -->
        <section class="max-w-4xl mx-auto py-12">
            <h2 class="text-3xl text-[rgb(15,125,63)] mb-8">
                Equipo en Ecuador
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-7 lg:grid-cols-4 gap-4">

                <!-- Miembro 1 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Felipe-Serrano_NCI_Team_Ecuador-400x400.webp" alt="Felipe Serrano" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Felipe Serrano</h3>
                        <p class="text-xs">Director Ejecutivo, Ecuador</p>
                    </div>
                </div>

                <!-- Miembro 2 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Jose-Acaro_NCI_Team_Ecuador-400x400.webp" alt="José Acaror" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">José Acaro</h3>
                        <p class="text-xs">Directora Financiera</p>
                    </div>
                </div>

                <!-- Miembro 3 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Cesar-Aguirre.webp" alt="César Aguirre" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">César Aguirre</h3>
                        <p class="text-xs">Asesor Jurídico</p>
                    </div>
                </div>

                <!-- Miembro 4 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Angel-Andrade.webp" alt="Ángel Andrade" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Ángel Andrade</h3>
                        <p class="text-xs">Guardabosques</p>
                    </div>
                </div>

                <!-- Miembro 5 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Angel-Andrade.webp" alt="Luis Chalán" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Luis Chalán</h3>
                        <p class="text-xs">Coordinador SIG Loja</p>
                    </div>
                </div>


                <!-- Miembro 6 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Roberto-Chamba2.webp" alt="Roberto Chamba" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Roberto Chamba</h3>
                        <p class="text-xs">Guardabosques</p>
                    </div>
                </div>

                <!-- Miembro 7 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Priscila_Davila_NCI_Team_Ecuador-400x400.webp" alt="Priscila Dávila" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Priscila Dávila</h3>
                        <p class="text-xs">Directora Administrativa Financiera</p>
                    </div>
                </div>

                <!-- Miembro 8 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Camilo_Granda_NCI_Team_Ecuador-400x400.webp" alt="Camilo Granda" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 inset-x-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Camilo Granda</h3>
                        <p class="text-xs">Técnico Conservación de Fuentes de Agua</p>
                    </div>
                </div>

                <!-- Miembro 9 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/DSC_1693-600x400.webp" alt="Pablo Idrobo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Pablo Idrobo</h3>
                        <p class="text-xs">Asesor Jurídico</p>
                    </div>
                </div>

                <!-- Miembro 10 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Angel_Jaramillo-NCI-Team-Ecuador-400x400.webp" alt="Ángel Jaramillo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Ángel Jaramillo</h3>
                        <p class="text-xs">Técnico Corredor de Conservación Transfronterizo Andino Amazónico</p>
                    </div>
                </div>

                <!-- Miembro 11 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Patricio_Jaramillo_NCI_Team_Ecuador-400x400.webp" alt="Patricio Jaramillo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Patricio Jaramillo</h3>
                        <p class="text-xs">Técnico Conservación de Fuentes de Agua</p>
                    </div>
                </div>

                <!-- Miembro 12 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Luis_Lopez_NCI_Team_Ecuador-400x400.webp" alt="Luis López" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Luis López</h3>
                        <p class="text-xs">Técnico Conservación de Fuentes de Agua</p>
                    </div>
                </div>

                <!-- Miembro 13 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Aida-Maldonado-NCI-Team-Ecuador-400x400.webp" alt="Aida Maldonado" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Aida Maldonado</h3>
                        <p class="text-xs">Especialista de Comunicación Ecuador</p>
                    </div>
                </div>

                <!-- Miembro 14 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Paulina_Moreno_NCI_Team_Ecuador-400x400.webp" alt="Paulina Moreno" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Paulina Moreno</h3>
                        <p class="text-xs">Contadora</p>
                    </div>
                </div>

                <!-- Miembro 15 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Guilbert-Olaya-450x600.webp" alt="Gilbert Olaya" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Gilbert Olaya</h3>
                        <p class="text-xs">Promotor Comunitario Reserva Natural Cazaderos</p>
                    </div>
                </div>

                <!-- Miembro 16 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Bruno_Paladines-NCI-Team-Ecuador-400x400.webp" alt="Bruno Paladines" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Bruno Paladines</h3>
                        <p class="text-xs">Coordinador Plataforma Amazónica</p>
                    </div>
                </div>

                <!-- Miembro 17 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Pedro_Paladines_NCI_Team_Ecuador-400x400.webp" alt="Pedro Paladines" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Pedro Paladines</h3>
                        <p class="text-xs">Administrador Reservas</p>
                    </div>
                </div>

                <!-- Miembro 18 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Monica-Pesantez1.webp" alt="Mónica Pesantez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Mónica Pesantez</h3>
                        <p class="text-xs">Técnica de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 19 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Trotsky-Riera2.webp" alt="Trotsky Riera" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Trotsky Riera</h3>
                        <p class="text-xs">Técnico Plataforma Amazónica</p>
                    </div>
                </div>

                <!-- Miembro 21 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Fabian-Rodas2.webp" alt="Fabián Rodas" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Fabián Rodas</h3>
                        <p class="text-xs">Coordinador Corredor de Conservación Transfronterizo Andino Amazónico</p>
                    </div>
                </div>

                <!-- Miembro 22 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Jose-Romero_NCI_Ecuador-400x400.webp" alt="José Romero" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">José Romero</h3>
                        <p class="text-xs">Coordinador Conservación de Fuentes de Agua</p>
                    </div>
                </div>

                <!-- Miembro 23 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Carlos-Rosales_NCI_Team_Ecuador-400x400.webp" alt="Carlos Rosales" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Carlos Rosales</h3>
                        <p class="text-xs">Tecnico de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 24 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Felipe-Sanchez_NCI_Team_Ecuador.webp" alt="Felipe Sánchez Puertas" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Felipe Sánchez Puertas</h3>
                        <p class="text-xs">Técnico TIC</p>
                    </div>
                </div>

                <!-- Miembro 25 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Sofia_Toledo_NCI_Team_Ecuador-400x400.webp" alt="Sofía Toledo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Sofía Toledo</h3>
                        <p class="text-xs">Técnica Información y Seguimiento de Proyectos, Ecuador</p>
                    </div>
                </div>

                <!-- Miembro 26 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Jaime-Toro1.webp" alt="Jaime Toro" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Jaime Toro</h3>
                        <p class="text-xs">Coordinador Plataforma Amazónica</p>
                    </div>
                </div>
                
                <!-- Miembro 27 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Cecilia-Zolorzano_NCI_Team_Ecuador-400x400.webp" alt="Cecilia Solórzano" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Cecilia Solórzano</h3>
                        <p class="text-xs">Asistente del Departamento de Contabilidad</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Equipo en Perú -->
        <section class="max-w-4xl mx-auto pb-12">
            <h2 class="text-3xl  text-[rgb(15,125,63)] mb-8">
                Equipo en Perú
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-8 lg:grid-cols-4 gap-4">

                <!-- Miembro 1 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Guilermo-Maravi-442x400.jpeg.webp" alt="Guillermo Maraví" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Guillermo Maraví</h3>
                        <p class="text-xs">Director Ejecutivo, Perú</p>
                    </div>
                </div>

                <!-- Miembro 2 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Elvis-Allauja.webp" alt="Elvis Allauja" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Elvis Allauja</h3>
                        <p class="text-xs">Bosques Secos del Marañon Jefe de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 3 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Bernardino-Astuhuaman-Abad_Conductor-del-Mosaico-Carpish-Rio-Abiseo-400x400.webp" 
                        alt="Bernardino Astuhuamán" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Bernardino Astuhuamán</h3>
                        <p class="text-xs">Conductor</p>
                    </div>
                </div>

                <!-- Miembro 4 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Nathalie-Calderon-Coordinadora-Contable-Administrativo--450x600.webp" 
                        alt="Nathalie Calderón" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Nathalie Calderón</h3>
                        <p class="text-xs">Coordinadora Contable Administrativa</p>
                    </div>
                </div>

                <!-- Miembro 5 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Abel-Calle-400x400.webp" alt="Abel Calle" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Abel Calle</h3>
                        <p class="text-xs">Andes del Norte Jefe de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 6 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Katty-Carillo.webp" alt="Katty Carillo" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Katty Carillo</h3>
                        <p class="text-xs">Andes del Norte Jefe de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 7 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/LEYLA-CLEMENTE-450x600.webp" alt="Leyla Clemente" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Leyla Clemente</h3>
                        <p class="text-xs">Asistente Administrativa</p>
                    </div>
                </div>

                <!-- Miembro 8 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Sharon-Cruz.webp" alt="Sharon Cruz" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 inset-x-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Sharon Cruz</h3>
                        <p class="text-xs">Asistente Administrativa</p>
                    </div>
                </div>

                <!-- Miembro 9 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Claudia-Del-Aguila-Jefa-de-proyectos-400x400.webp" alt="Claudia Del Águila" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Claudia Del Águila</h3>
                        <p class="text-xs">Responsable de Control Vigilancia y Bionegocios</p>
                    </div>
                </div>

                <!-- Miembro 10 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Cristy-Diaz.webp" alt="Cristy Diaz" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Cristy Diaz</h3>
                        <p class="text-xs">Jefe de Proyectos – Programa Especial Ucayali</p>
                    </div>
                </div>

                <!-- Miembro 11 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Carolina-Flores-Mormontoy_Comunicadora-en-el-Mosaico-Carpish-Rio-Abiseo-400x400.webp" 
                        alt="Carolina Flores" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Carolina Flores</h3>
                        <p class="text-xs">Comunicadora Carpish Rio Abiseo</p>
                    </div>
                </div>

                <!-- Miembro 12 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/LIDEIMER-FLORES-scaled-e1674151502713-480x600.webp" alt="Lideimer Flores" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Lideimer Flores</h3>
                        <p class="text-xs">Andes del Norte Tecnico de Campo</p>
                    </div>
                </div>

                <!-- Miembro 13 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Mayra-451x600.webp" alt="Mayra Flores" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Mayra Flores</h3>
                        <p class="text-xs">Nanay Tigre Coordinador de Campo</p>
                    </div>
                </div>

                <!-- Miembro 14 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Estela-Garcia-Huayama-467x600.webp" alt="Estela García" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Estela García</h3>
                        <p class="text-xs">Asistente Administrativa, Jaen</p>
                    </div>
                </div>

                <!-- Miembro 15 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Gabriela-Gives-442x600.webp" alt="Gabriela Gives" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Gabriela Gives</h3>
                        <p class="text-xs">Especialista de Comunicación Perú</p>
                    </div>
                </div>

                <!-- Miembro 16 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Alexa-400x400.webp" alt="Alexa Guerrero" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Alexa Guerrero</h3>
                        <p class="text-xs">Andes del Norte Coordinador de Campo</p>
                    </div>
                </div>

                <!-- Miembro 17 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Joshua-Hernandez-581x600.webp" alt="Joshua Hernandez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Joshua Hernandez</h3>
                        <p class="text-xs">Tecnico de Apoyo Informacional y Asistente de Proyecto</p>
                    </div>
                </div>

                <!-- Miembro 18 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Carolina-Herrera-Huayhua-Asistente-de-Proyectos-2-400x400.webp" 
                        alt="Carolina Herrera Huayhua" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Carolina Herrera Huayhua</h3>
                        <p class="text-xs">Asistente de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 19 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Felix-Honorio-2-401x400.webp" alt="Félix Honorio" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Félix Honorio</h3>
                        <p class="text-xs">Especialista Contable Administrativo</p>
                    </div>
                </div>

                <!-- Miembro 20 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Ivan-Mejia.webp" alt="Iván Mejía" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Iván Mejía</h3>
                        <p class="text-xs">Andes del Norte Jefe de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 21 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Wilmer-Ortiz-_-Carpish-Rio-Abiseo_Coordinador-de-Proyecto-Yanajanca-480x600.webp" 
                        alt="Wilmer Ortiz" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Wilmer Ortiz</h3>
                        <p class="text-xs">Carpish Río Abiseo Coordinador de Campo</p>
                    </div>
                </div>

                <!-- Miembro 22 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Fernando-Perez-529x600.webp" alt="Fernando Pérez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Fernando Pérez</h3>
                        <p class="text-xs">Coordinador de Proyectos</p>
                    </div>
                </div>

                <!-- Miembro 23 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Pilar-Quiroz-_-Asistente-administrativa-450x600.webp" alt="Pilar Quiroz" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Pilar Quiroz</h3>
                        <p class="text-xs">Asistente administrativa</p>
                    </div>
                </div>

                <!-- Miembro 24 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Alin-Ramirez.webp" alt="Alin Ramirez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Alin Ramirez</h3>
                        <p class="text-xs">Especialista SIG Peru</p>
                    </div>
                </div>

                <!-- Miembro 25 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Xiomy-Reategui1.webp" alt="Xiomy Reategui" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Xiomy Reategui</h3>
                        <p class="text-xs">Administradora Peru</p>
                    </div>
                </div>

                <!-- Miembro 26 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Ricardo-Rivera.webp" alt="Ricardo Rivera" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Ricardo Rivera</h3>
                        <p class="text-xs">Coordinador Mosaico Nanay Tigre</p>
                    </div>
                </div>

                <!-- Miembro 27 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Jean-Carla-Rojas-Jefa-de-proyectos-400x400.webp" alt="Jean Carla Rojas" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Jean Carla Rojas</h3>
                        <p class="text-xs">Responsable de Gobernanza y Territorio</p>
                    </div>
                </div>

                <!-- Miembro 28 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Alan-Sanchez1.webp" alt="Alán Sánchez" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Alán Sánchez</h3>
                        <p class="text-xs">Coordinador Legal Ambiental Peru</p>
                    </div>
                </div>

                <!-- Miembro 29 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Magnolia-Vela.webp" alt="Magnolia Vela" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Magnolia Vela</h3>
                        <p class="text-xs">Nanay Tigre Coordinador de Campo</p>
                    </div>
                </div>

                <!-- Miembro 30 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Edrey-Santisteban-Vilca_Tecnico-de-campo-del-Mosaico-Carpish-Rio-Abiseo-400x400.webp" 
                        alt="Edrey Santisteban Vilca" class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Edrey Santisteban Vilca</h3>
                        <p class="text-xs">Carpish Río Abiseo Tecnico de Campo</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Equipo en México -->
        <section class="max-w-4xl mx-auto pb-12">
            <h2 class="text-3xl  text-[rgb(15,125,63)] mb-8">
                Equipo en México
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-4 gap-4">

                <!-- Miembro 1 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Miguel-Angel-Ayala-Mata.webp" alt="Miguel Angel Ayala Mata" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Miguel Angel Ayala Mata</h3>
                        <p class="text-xs">Director Ejecutivo en México</p>
                    </div>
                </div>

                <!-- Miembro 2 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/P90603-164332-450x600.webp" alt="Alejandro Grajeda" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Alejandro Grajeda</h3>
                        <p class="text-xs">Guardaparque</p>
                    </div>
                </div>

                <!-- Miembro 3 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/Eduardo-Salazar-450x600.webp" alt="Eduardo Salazar Ayala" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Eduardo Salazar Ayala</h3>
                        <p class="text-xs">Técnico Operativo</p>
                    </div>
                </div>

                <!-- Miembro 4 -->
                <div class="relative">
                    <img src="../../imagenes/nuestro_equipo/P90603-164401-450x600.webp" alt="Alejandro Sauceda" 
                        class="w-full h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-4 py-1.5">
                        <h3 class="font-bold text-lg">Alejandro Sauceda</h3>
                        <p class="text-xs">Guardaparque</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contenedor Equipo en Colombia (Instituto Humboldt) -->
        <section class="max-w-4xl mx-auto pb-12">
            <h2 class="text-3xl  text-[rgb(15,125,63)] mb-8">
                Equipo en Colombia (Instituto Humboldt)
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">

                <!-- Único Miembro -->
                <div class="relative w-80">
                    <img src="../../imagenes/nuestro_equipo/Juliana_Cortes-600x400.webp" alt="Juliana Cortés R" 
                        class="w-80 h-80 object-cover">
                    <div class="absolute bottom-4 left-0 p-4 bg-linear-to-t text-white bg-black/60 w-fit box-decoration-clone 
                        pl-3 py-1.5 max-w-[90%]">
                        <h3 class="font-bold text-lg">Juliana Cortés R</h3>
                        <p class="text-xs">Investigadora adjunto del Centro de Soluciones basadas en la Naturaleza</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>