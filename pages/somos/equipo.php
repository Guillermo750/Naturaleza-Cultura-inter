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

        <!--  -->
        <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-semibold text-emerald-800 mb-8">
            Equipo Internacional
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Miembro 1 -->
            <div class="relative bg-black">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Karina Copen" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Karina Copen</h3>
                    <p class="text-xs text-gray-200">Subdirectora</p>
                </div>
            </div>

            <!-- Miembro 2 -->
            <div class="relative bg-black">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=600" alt="Keryn Leger" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Keryn Leger</h3>
                    <p class="text-xs text-gray-200">Directora Financiera</p>
                </div>
            </div>

            <!-- Miembro 3 -->
            <div class="relative bg-black">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=600" alt="Renzo Paladines" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Renzo Paladines</h3>
                    <p class="text-xs text-gray-200">Director de Conservación</p>
                </div>
            </div>

            <!-- Miembro 4 -->
            <div class="relative bg-black">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=600" alt="Lauren Alvarez" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Lauren Alvarez</h3>
                    <p class="text-xs text-gray-200">Gerente de Alianzas Estratégicas</p>
                </div>
            </div>

            <!-- Miembro 5 -->
            <div class="relative bg-black">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=600" alt="Kristen Heard" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Kristen Heard</h3>
                    <p class="text-xs text-gray-200">Directora de Marketing y Comunicaciones</p>
                </div>
            </div>

            <!-- Miembro 6 -->
            <div class="relative bg-black">
                <img src="" alt="Nora Sánchez Luzardo" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Nora Sánchez Luzardo</h3>
                    <p class="text-xs text-gray-200">Coordinadora Senior de Comunicación para América Latina</p>
                </div>
            </div>

            <!-- Miembro 7 -->
            <div class="relative bg-black">
                <img src="" alt="Simón Quintero" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-linear-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Simón Quintero</h3>
                    <p class="text-xs text-gray-200">Coordinador de Monitoreo y Evaluación para América Latina</p>
                </div>
            </div>

            <!-- Miembro 8 -->
            <div class="relative bg-black">
                <img src="" alt="Daniel Ruvalcaba" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-linear-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Daniel Ruvalcaba</h3>
                    <p class="text-xs text-gray-200">Administrador de Oficina</p>
                </div>
            </div>

            <!-- Miembro 9 -->
            <div class="relative bg-black">
                <img src="" alt="Mireya Serrano" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-linear-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Mireya Serrano</h3>
                    <p class="text-xs text-gray-200">Coordinadora de Monitoreo y Evaluación para América Latina</p>
                </div>
            </div>

            <!-- Miembro 10 -->
            <div class="relative bg-black">
                <img src="" alt="Heather Thomas" class="w-full h-80 object-cover">
                <div class="absolute bottom-0 inset-x-0 p-4 bg-linear-to-t from-black text-white">
                    <h3 class="font-bold text-lg">Heather Thomas</h3>
                    <p class="text-xs text-gray-200">Gerente Senior de Marketing y Comunicaciones</p>
                </div>
            </div>
        </div>
    </div>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>