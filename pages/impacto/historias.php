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
    <title>Noticias e Historias</title>
</head>

<body>
    <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/historias/fondo.jpg)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide py-6">Noticias e Historias</h1>
                    <!-- Texto -->
                    <p class="text-white text-lg md:text-xl font-medium">Encuentra todas nuestras últimas actualizaciones, incluidas las 
                        principales historias, noticias y eventos de nuestro trabajo en campo junto a nuestros socios locales.
                    </p>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/historias/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor FILTERS -->
        <section class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-8 lg:px-12 text-sm text-[rgb(31,72,34)]">
                <form id="filters" class="flex flex-col gap-8">
                    
                    <!-- FILA 1: EXPLORAR (Búsqueda) -->
                    <!-- flex-row e items-center alinean la etiqueta al lado del input en el móvil -->
                    <div class="flex flex-row items-center gap-3 md:gap-12 w-full">
                        <!-- Columna Izquierda: Etiqueta principal (Alineada al centro del input con md:mt-7) -->
                        <div class="w-20 md:w-24 shrink-0 font-medium md:mt-7 text-left">
                            <span>Explorar:</span>
                        </div>
                        <!-- Columna Derecha: Input y botón -->
                        <div class="flex-1 max-w-lg flex flex-col items-start">
                            <div class="flex flex-col gap-2 w-full">
                                <label for="search" class="text-[rgb(31,72,34)] text-[15px]">Búsqueda</label>
                                <div class="relative">
                                    <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-[rgb(31,72,34)]/80" 
                                        viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.5" />
                                        <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <input id="search" type="search" placeholder="Buscar palabra(s) clave(s)" class="h-14 w-full border
                                    border-black/15 bg-white pl-12 pr-5 text-sm text-[rgb(31,72,34)] outline-none transition 
                                    placeholder:text-[rgb(31,72,34)]/80 focus:border-[rgb(31,72,34)]">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FILA 2: FILTRAR POR (Selectores y Resetear) -->
                    <!-- flex-row mantiene la etiqueta al lado de todo el bloque de filtros -->
                    <div class="flex flex-row items-start gap-3 md:gap-12 w-full">
                        <!-- Columna Izquierda: Etiqueta principal -->
                        <div class="w-20 md:w-24 shrink-0 font-medium pt-9 md:pt-0 md:mt-7 text-left">
                            <span>Filtrar por:</span>
                        </div>
                        
                        <!-- Columna Derecha: Selects y botón reset -->
                        <!-- En móviles se apilan en columna (flex-col), pero se alinean a la izquierda (items-start) -->
                        <div class="flex-1 flex flex-col sm:flex-row items-start sm:items-end gap-4 w-full justify-start">
                            <!-- Área -->
                            <div class="flex flex-col gap-2 w-full max-w-xs">
                                <label for="area" class="text-[rgb(31,72,34)] text-[15px]">Área estratégica</label>
                                <div class="relative w-full">
                                    <select id="area" class="h-14 w-full appearance-none border border-black/15 bg-white px-5 pr-10 
                                    text-[12px] text-[rgb(31,72,34)] outline-none">
                                        <option value="">Búsqueda por Área Estratégica</option>
                                        <option value="agua">Agua</option>
                                        <option value="biodiversidad">Biodiversidad</option>
                                        <option value="bosques">Bosques</option>
                                        <option value="clima">Clima</option>
                                        <option value="comunidades">Comunidades Locales</option>
                                    </select>
                                    <i class="fa-solid fa-angle-down absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none 
                                    text-[rgb(31,72,34)]/80 text-[12px]"></i>
                                </div>
                            </div>

                            <!-- Línea Vertical de separación (Solo visible desde pantallas sm en adelante) -->
                            <div class="h-14 w-px bg-[rgb(135,190,159)] hidden sm:block mx-4"></div>

                            <!-- País -->
                            <div class="flex flex-col gap-2 w-full max-w-xs">
                                <label for="country" class="text-[rgb(31,72,34)] text-[15px]">País</label>
                                <div class="relative w-full">
                                    <select id="country" class="h-14 w-full appearance-none border border-black/15 bg-white px-5 pr-10 
                                    text-[12px] text-[rgb(31,72,34)] outline-none">
                                        <option value="">Búsqueda por País</option>
                                        <option value="bolivia">Bolivia</option>
                                        <option value="colombia">Colombia</option>
                                        <option value="ecuador">Ecuador</option>
                                        <option value="mexico">México</option>
                                        <option value="peru">Perú</option>
                                    </select>
                                    <i class="fa-solid fa-angle-down absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none 
                                    text-[rgb(31,72,34)]/80 text-[12px]"></i>
                                </div>
                            </div>

                            <!-- Línea Vertical de separación (Solo visible desde pantallas sm en adelante) -->
                            <div class="h-14 w-px bg-[rgb(135,190,159)] hidden sm:block mx-4"></div>

                            <!-- Tipo de contenido -->
                            <div class="flex flex-col gap-2 w-full max-w-xs">
                                <label for="country" class="text-[rgb(31,72,34)] text-[15px]">Tipo de contenido</label>
                                <div class="relative w-full">
                                    <select id="country" class="h-14 w-full appearance-none border border-black/15 bg-white px-5 pr-10 
                                    text-[12px] text-[rgb(31,72,34)] outline-none">
                                        <option value="">Búsqueda por Tipo de Contenido</option>
                                        <option value="bolivia">Blog</option>
                                        <option value="colombia">Evento</option>
                                        <option value="ecuador">Noticias</option>
                                    </select>
                                    <i class="fa-solid fa-angle-down absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none 
                                    text-[rgb(31,72,34)]/80 text-[12px]"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-full text-left pl-1 mt-2">
                        <button type="reset" class="font-bold text-[rgb(31,72,34)] hover:underline cursor-pointer text-[14px]">
                            Resetear filtros
                        </button>
                    </div>
                </form>
            </div>
        </section>

                <!-- Contenedor Mantente al día con Naturaleza y Cultura Internacional -->
        <section class="w-full bg-cover bg-center bg-no-repeat relative py-16 md:py-36 overflow-hidden 
            bg-[url('../../imagenes/historias/nci-option-a-news_curve-background.png')] 
            md:bg-[url('../../imagenes/historias/nci-option-a-news_curve-background-desktop-xl.png')]">
            <!-- 1. ILUSTRACIÓN IZQUIERDA -->
            <div class="hidden sm:block absolute left-4 bottom-4 md:left-10 md:bottom-6 w-24 md:w-36 pointer-events-none z-10">
                <img src="../../imagenes/historias/nci-option-a-news_illustration-left-desktop-s.png" alt="Cactus izquierdo" class="w-full h-auto object-contain">
            </div>
            <!-- 2. ILUSTRACIÓN DERECHA -->
            <div class="hidden sm:block absolute right-0 bottom-0 w-48 md:w-72 lg:w-96 pointer-events-none z-10">
                <img src="../../imagenes/historias/nci-option-a-news_illustration-right-desktop-s.png" alt="Paisaje derecho" 
                class="w-full h-auto object-contain object-bottom-right">
            </div>
            <!-- CONTENEDOR CENTRAL DEL CONTENIDO -->
            <div class="mx-auto max-w-5xl px-6 relative z-20 flex flex-col md:flex-row items-center md:items-start justify-center gap-8 
                md:gap-16 text-center md:text-left md:pt-36">
                <!-- Bloque Izquierdo: Título con el megáfono -->
                <div class="flex flex-col md:flex-row items-center md:items-start gap-4 max-w-sm">
                    <!-- Icono de Megáfono -->
                    <div class="w-12 h-12 shrink-0 flex items-center justify-center md:mt-1">
                        <img src="../../imagenes/historias/nci-option-a_news_icon.png" alt="Megáfono" 
                        class="w-full h-full object-contain">
                    </div>
                    <!-- Texto Principal -->
                    <div class="relative flex flex-col items-center md:items-start">
                        <h3 class="text-[rgb(31,72,34)] text-lg md:text-xl leading-snug">
                            NATURALEZA Y CULTURA EN LAS NOTICIAS
                        </h3>
                        <!-- Línea naranja decorativa debajo del texto -->
                        <img src="../../imagenes/historias/nci-orange-brush-short.png" alt="Línea decorativa" 
                        class="w-32 h-auto mt-2 mx-auto md:mx-0">
                    </div>
                </div>

                <!-- Bloque Derecho: Texto secundario y Botón -->
                <div class="flex flex-col items-center md:items-start gap-4 max-w-xs md:pt-2">
                    <p class="text-[rgb(72,81,79)] text-[16px] leading-relaxed">
                        Echa un vistazo a lo que los medios dicen sobre nosotros.
                    </p>
                    <!-- Botón verde redondeado -->
                    <a href="blog.php" class="inline-block bg-[rgb(15,125,63)] hover:bg-[rgb(31,72,34)] text-white font-bold 
                    text-xs px-6 py-3 rounded-full transition duration-300 whitespace-nowrap shadow-sm">
                        Blog y Noticias
                    </a>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>