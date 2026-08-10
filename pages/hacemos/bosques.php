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
        <div class="container mx-auto px-24 mt-6 max-w-5xl">
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
    <section class="container mx-auto flex flex-col justify-start items-start my-6 space-y-4 mt-20 px-6 max-w-4xl text-left">  
        <!-- Título verde pequeño -->
        <h2 class="text-4xl text-[rgb(15,125,63)] tracking-wider uppercase">NUESTRO TRABAJO</h2>
        <!-- Subtítulo grande -->
        <h3 class="text-3xl text-[rgb(72,81,79)] font-normal leading-tight">Protección de bosques saludables y conectados</h3>
        <!-- Párrafo destacado (más grande) -->
        <p class="font-light text-[16px]">Naturaleza y Cultura trabaja por proteger grandes extensiones de bosques. 
            Ecosistemas críticos que sustentan la biodiversidad, regulan el clima, proveen agua limpia y apoyan a las comunidades 
            indígenas y locales.</p>
        <!-- Párrafo normal -->
        <p class="text-[16px] text-gray-600">Al conservar paisajes extensos, salvaguardamos corredores biológicos esenciales, 
            prevenimos la deforestación y fortalecemos la resiliencia de los ecosistemas, garantizando que la naturaleza prospere para las 
            generaciones futuras.</p>
        <!-- Último párrafo en verde destacado -->
        <p class="text-xl text-[rgb(15,125,63)] font-medium">Trabajamos junto a comunidades locales, pueblos indígenas y 
            gobiernos para fortalecer la conservación de bosques en América Latina.</p>
    </section>

    <!-- Contenedor Programas Destacados -->
     <section class="container mx-auto">

     </section>

    <!-- Contenedor Creando y Fortaleciendo Áreas Protegidas -->
    <section class="container mx-auto py-12 px-6 max-w-4xl">
        <!-- Contenido a la derecha -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <!-- COLUMNA IZQUIERDA: Textos -->
            <div class="flex flex-col text-[rgb(72,81,79)] space-y-3">
                <h2 class="text-3xl font-normal tracking-wide md:whitespace-nowrap mb-2.5">Creando y Fortaleciendo Áreas Protegidas </h2>
                <p class="leading-relaxed text-[16px]">
                    Ayudamos a establecer nuevas áreas protegidas y a fortalecer las existentes en lugares que enfrentan amenazas urgentes. 
                    <b>las áreas protegidas, territorios comunitarios y otras formas de conservación forman redes interconectadas,</b> 
                    los bosques son más resilientes y la biodiversidad tiene espacio para desplazarse y adaptarse.
                </p>
                <p class="leading-relaxed text-[16px]">
                    Los bosques no siguen fronteras políticas. Al apoyar la planificación y colaboración a <b>escala de paisaje,</b> 
                    ayudamos a proteger ecosistemas conectados a través de diversas regiones.
                </p>
                <p class="leading-relaxed text-[16px]">
                    En un mundo cada vez más fragmentado, muchas especies tienen menos espacio para migrar, dispersarse, alimentarse y 
                    prosperar. Al vincular áreas protegidas nacionales, regionales y locales, creamos <b>corredores biológicos vitales</b> 
                    que permiten que especies clave <b>como el jaguar, el cóndor andino y el oso de anteojos,</b> se desplacen libremente 
                    en busca de alimento, agua, refugio y sitios de reproducción.
                </p>
            </div>      
            <!-- Imagen a la derecha -->
            <div class="w-full mt-16">
                <img src="../../imagenes/imagenes_bosque/Rio-Yaupi-001-Foto-Naturaleza-y-Cultura-Internacional.jpg" alt="Bosque y río" 
                class="w-full h-auto block">
            </div>
        </div>
    </section>

    <!-- Contenedor Conservación liderada por las personas -->
    <section class="w-full bg-[rgb(244,244,237)] py-8 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-4xl ">
            <!-- COLUMNA IZQUIERDA: Imagen -->
            <div class="w-full">
                <img src="../../imagenes/imagenes_bosque/custom-image-web-8-600x600.png" alt="Conservación liderada por personas" 
                lass="w-full h-auto ">
            </div>
            <!-- COLUMNA DERECHA: Textos -->
            <div class="flex flex-col text-left space-y-4">
                <!-- Título principal verde-->
                <h2 class="text-3xl font-normal text-[rgb(15,125,63)] leading-tight">Conservación liderada por las personas</h2>
                <!-- Título pequeño -->
                <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl">Una solución de conservación que perdura</h3>
                <!-- Párrafo descriptivo -->
                <p class="text-[rgb(72,81,79)] leading-relaxed text-[16px] font-Avenir Book">
                    Proteger los bosques no es un logro de una sola vez. La conservación duradera depende de la custodia del territorio, 
                    un liderazgo local sólido y los recursos a largo plazo necesarios para mantener la protección frente a los cambios políticos, 
                    económicos y climáticos.
                </p>
            </div>
        </div>
    </section>

    <!-- Contenedor Bosques Conectados -->
    <section class="container mx-auto py-12 px-6 max-w-4xl">
        <!-- Contenido a la derecha -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
            <!-- COLUMNA IZQUIERDA: Textos -->
            <div class="flex flex-col space-y-3">
                <!-- Título principal verde-->
                <h2 class="text-3xl font-normal tracking-wide md:whitespace-nowrap mb-2.5
                text-[rgb(15,125,63)]">Bosques Conectados</h2>
                <!-- Título pequeño -->
                <h3 class="text-[rgb(72,81,79)] font-medium tracking-wider text-2xl">Conservación a Escala de Paisaje</h3>
                <!-- Párrafos descriptivos -->
                <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px]">
                    Cuando los bosques se fragmentan, los ecosistemas se vuelven menos resilientes. Los <b>corredores biológicos</b> se 
                    interrumpen,las cuencas hidrográficas se alteran y los bosques se vuelven más vulnerables a los incendios, las actividades 
                    ilegales y el cambio de uso de suelo. <b>Conectar bosques protegidos</b> ayuda a mantener el funcionamiento de paisajes 
                    enteros, ahora y en el futuro.
                </p>
                <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px]">
                    Esto es válido independientemente de si las piezas individuales son parques nacionales, territorios indígenas, áreas 
                    subnacionales protegidas o una combinación de todas las anteriores.
                </p>
            </div>      
            <!-- Imagen a la derecha -->
            <div class="w-full h-full">
                <img src="../../imagenes/imagenes_bosque/custom-image-web-6-600x600.png" alt="Escala de Paisaje" class="w-full h-auto block">
            </div>
        </div>
    </section>

    <!-- Contenedor Trabajamos en los ecosistemas más biodiversos -->
    <section class="container mx-auto flex flex-col justify-start items-start my-6 space-y-4 mt-20 px-6 max-w-4xl text-left">  
        <!-- Título verde pequeño -->
        <h2 class="text-3xl text-[rgb(72,81,79)] tracking-wider uppercase">Ecosistemas que protegemos</h2>
        <!-- Subtítulo grande -->
        <h3 class="text-2xl font-normal leading-tight text-[rgb(15,125,63)]">Trabajamos en los ecosistemas más biodiversos, pero también 
            más amenazados del planeta.</h3>
        <!-- Párrafo destacado (más grande) -->
        <p class="leading-relaxed text-[16px] text-[rgb(72,81,79)]">Un ecosistema está compuesto por todos los seres vivos que comparten un 
            entorno, desde plantas y animales hasta organismos microscópicos. Garantizar la integridad y la salud de ecosistemas completos 
            proporciona hábitat para la vida silvestre y servicios ecosistémicos vitales para toda forma de vida.
        </p>
    </section>

    <!-- Contenedor Previniendo pérdidas irreemplazables -->
    <section class="container mx-auto relative z-0 pt-10">
        <!-- La línea con el color de fondo colocada encima y solapada con un margen inferior negativo -->
        <img src="../../imagenes/imagenes_bosque/linea01.png" alt="Línea divisoria" class="block w-full h-auto relative z-20" 
        style="margin-bottom: -10px;"> 
        <div class="p-16 bg-[url('../../imagenes/imagenes_bosque/Zamora-Municipal-Conservation-and-Sustainable-Use-Area_Forest.webp')] 
            bg-cover bg-no-repeat flex items-center relative z-10 " 
            style="height: 450px;">
            <!-- CAPA DE OSCURECIDO DIFUMINADO: Usa CSS nativo para crear un degradado perfecto e inmune a las versiones de Tailwind -->
            <div class="absolute inset-0 z-0" 
                style="background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 40%, rgba(0,0,0,0) 70%);">
            </div>
            <div class="w-full max-w-2xl flex flex-col text-white  relative z-10 [text-shadow:0_2px_4px_rgba(0,0,0,0.8)]">
                <!-- Contenedor del h2 con un dibujo de la línea debajo -->
                    <!-- Título principal -->
                    <h2 class="text-3xl font-semibold mb-2.5 ">Previniendo pérdidas irreemplazables</h2>
                    <!-- Título pequeño -->
                    <h3 class="font-semibold tracking-wider text-2xl mb-2.5">Amenazas a los bosques y lo que la <br>protección previene</h3>
                <p class="mb-2.5 text-[16px]">
                    Los bosques intactos enfrentan una presión creciente debido a la <br>deforestación, la degradación y la fragmentación. 
                    Estas amenazas <br>pueden provenir del cambio de uso de suelo, la extracción <br>insostenible, las carreteras que 
                    abren áreas remotas a actividades <br>ilegales y los incendios cada vez más intensos impulsados por el <br>clima.
                </p>
                <p class="text-[16px]">
                    Proteger los bosques a tiempo, antes de que sufran una degradación <br>severa, puede prevenir pérdidas irreversibles. 
                    Cuando los bosques <br>permanecen intactos, continúan sustentando la biodiversidad, <br>almacenando carbono, manteniendo los ciclos 
                    del agua y <br>proporcionando una base para comunidades resilientes.
                </p>
            </div>
        </div>
        <!-- Línea divisoria inferior aplicada exactamente con tu ajuste -->
        <img src="../../imagenes/imagenes_bosque/linea02.png" alt="Línea divisoria" class="absolute bottom-0 left-0 z-10 block w-full h-auto">
    </section>

    <!-- Contenedor Cómo puedes ayudar -->
    <section class="container mx-auto py-12 px-6 max-w-6xl">
        <!-- Contenido a la derecha -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
            <!-- COLUMNA IZQUIERDA: Imagen -->
            <div class="w-full h-full">
                <img src="../../imagenes/imagenes_bosque/Team-Gift-Explain-Forest-Biodiversity.webp" alt="Proteger los bosques" 
                class="w-full h-auto block">
            </div>
            <!-- COLUMNA DERECHA: Textos y un botón -->
            <div class="flex flex-col space-y-3">
                <!-- Título principal -->
                <h2 class="text-[rgb(72,81,79)] font-medium tracking-wider text-3xl">Cómo puedes ayudar a proteger los bosques</h2>
                <!-- Párrafos descriptivos -->
                <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px]">
                    Proteger los bosques a gran escala requiere colaboración, compromiso y una visión de largo plazo. En Naturaleza y Cultura 
                    Internacional trabajamos junto a pueblos indígenas, comunidades locales, gobiernos y aliados para fortalecer la gestión 
                    territorial, ampliar las áreas de conservación y mantener los bosques en pie donde más se necesitan.
                </p>
                <p class="leading-relaxed text-[rgb(72,81,79)] text-[16px]">
                    Conocer, valorar y apoyar estos esfuerzos es fundamental para asegurar que los paisajes más biodiversos del planeta sigan 
                    siendo fuente de vida para las generaciones presentes y futuras.
                </p>
                <a href="#" class="self-start mt-6 bg-[rgb(15,125,63)] text-white inline-block px-6 py-3 rounded-full 
                font-bold hover:bg-[rgb(31,72,34)] transition-colors "><span class="text-sm">Conoce más sobre nuestro trabajo</span></a>
            </div>      
        </div>
    </section>

    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../../components/footer.php"; ?>

</body>
</html>