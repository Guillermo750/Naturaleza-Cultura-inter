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
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 text-center 
            md:text-left">  
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

                    <!-- Título pequeño -->
                    <h3 class="text-[rgb(15,125,63)] font-medium tracking-wider text-2xl w-full">
                        Paisajes conectados: Mayor resiliencia frente al cambio climático
                    </h3>
                </div>      
                
                <!-- COLUMNA DERECHA: Imagen -->
                <div class="w-full h-full flex justify-center items-center mt-6 md:mt-0 px-4 md:px-0">
                    <img src="../../imagenes/enfoque/custom-image-web-600x600.png" alt="Oso negro" 
                    class="w-full h-auto block object-cover max-w-sm md:max-w-full rounded-md">
                </div>
            </div>
        </section>












        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>