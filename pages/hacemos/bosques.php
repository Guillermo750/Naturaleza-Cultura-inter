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
    <title>Bosques</title>
</head>

<body>
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../../components/header.php"; ?>

    <!-- Contenedor principal Imagen de fondo + título encima encima -->
    <section class="relative w-full h-screen bg-[url(../../imagenes/imagenes_bosque/forest.jpg)] bg-cover bg-center 
             bg-no-repeat flex items-center">
        <!-- Contenedor centrado y alineado (ocupa todo el ancho máximo según la pantalla) -->
        <div class="container mx-auto px-24 mt-6">
            <!-- Bloque con fondo negro translúcido [bg-black/30] -->
            <div class="inline-block bg-black/30 p-6 max-w-xl rounded-lg ">
                <!-- TÍTULO -->
                <h1 class="text-white text-5xl font-semibold tracking-wide text-left">Bosques</h1>
            </div>
        </div>
    </section>
    <!-- Línea divisoria inferior aplicada exactamente con tu ajuste -->
    <img src="../../imagenes/imagenes_principal/linea13_debajo_video.png" alt="Línea divisoria" class="block w-full h-auto relative z-10" 
    style="margin-top: -10px;"> 

    <!-- Contenedor Nuestro Trabajo -->
    <section class="container mx-auto flex flex-col justify-start items-start my-6 space-y-6 mt-20 px-6 max-w-4xl text-left">  
        <!-- Título verde pequeño -->
        <h2 class="text-4xl text-[rgb(15,125,63)] tracking-wider uppercase">NUESTRO TRABAJO</h2>
        <!-- Subtítulo grande -->
        <h3 class="text-3xl text-[rgb(72,81,79)] font-normal leading-tight">Protección de bosques saludables y conectados</h3>
        <!-- Párrafo destacado (más grande) -->
        <p class="font-light text-[17px]">Naturaleza y Cultura trabaja por proteger grandes extensiones de bosques. 
            Ecosistemas críticos que sustentan la biodiversidad, regulan el clima, proveen agua limpia y apoyan a las comunidades 
            indígenas y locales.</p>
        <!-- Párrafo normal -->
        <p class="text-[17px] text-gray-600">Al conservar paisajes extensos, salvaguardamos corredores biológicos esenciales, 
            prevenimos la deforestación y fortalecemos la resiliencia de los ecosistemas, garantizando que la naturaleza prospere para las 
            generaciones futuras.</p>
        <!-- Último párrafo en verde destacado -->
        <p class="text-xl text-[rgb(15,125,63)] font-medium">Trabajamos junto a comunidades locales, pueblos indígenas y 
            gobiernos para fortalecer la conservación de bosques en América Latina.</p>
    </section>

    <!-- Contenedor de Creando y Fortaleciendo Áreas Protegidas -->
    <section class="container mx-auto p-4 my-12">
        <div class="flex flex-row justify-start items-start max-w-4xl">
            <!-- Contenido a la derecha -->
            <div class="w-full md:w-1/2 flex flex-col justify-between">
                <div class="mt-6"> <!-- Añadido margen superior aquí -->
                    <h2 class="text-3xl font-bold mb-2">Creando y Fortaleciendo Áreas Protegidas</h2>
                    <p class="">
                        Ayudamos a establecer nuevas áreas protegidas y a fortalecer las existentes en lugares que enfrentan amenazas urgentes. 
                        <b>las áreas protegidas, territorios comunitarios y otras formas de conservación forman redes interconectadas,</b> 
                        los bosques son más resilientes y la biodiversidad tiene espacio para desplazarse y adaptarse.
                    </p>
                    <p class="">
                        Los bosques no siguen fronteras políticas. Al apoyar la planificación y colaboración a <b>escala de paisaje,</b> 
                        ayudamos a proteger ecosistemas conectados a través de diversas regiones.
                    </p>
                    <p class="">
                        En un mundo cada vez más fragmentado, muchas especies tienen menos espacio para migrar, dispersarse, alimentarse y 
                        prosperar. Al vincular áreas protegidas nacionales, regionales y locales, creamos <b>corredores biológicos vitales</b> 
                        que permiten que especies clave <b>como el jaguar, el cóndor andino y el oso de anteojos,</b> se desplacen libremente 
                        en busca de alimento, agua, refugio y sitios de reproducción.
                    </p>
                </div>
            </div>         
            <!-- Imagen a la derecha -->
            <div class="w-full md:w-1/2 pr-8">
                <img src="../../imagenes/imagenes_bosque/Rio-Yaupi-001-Foto-Naturaleza-y-Cultura-Internacional.jpg" alt="" class="w-full h-full">
            </div>
        </div>
    </section>













    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../../components/footer.php"; ?>

</body>
</html>