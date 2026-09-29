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
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-10 md:mt-40 mt-36 mb-12 flex justify-center  
                md:justify-start">
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
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 py-8 text-sm text-[rgb(31,72,34)]">
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

        <!-- Contenedor Blog -->
        <section class="w-full max-w-5xl mx-auto md:py-8 relative">
            <!-- Cabecera de la sección: Contenedor de la línea alineado con el ancho de las tarjetas -->
            <div class="relative w-full mb-10 px-5 sm:px-6 md:px-8 lg:px-12">
                <!-- IMAGEN DEL GUACAMAYO: Absoluta a la izquierda, fuera del contenedor pero pegada al inicio de la línea -->
                <div class="hidden sm:block absolute -left-12 top-1/2 -translate-y-1/2 w-24 shrink-0 z-10">
                    <img src="../../imagenes/historias/nci-left-illustration1-blog-newsp.png" alt="Decoración lateral" 
                    class="w-full h-auto object-contain">
                </div>
                <!-- CONTENEDOR DE LA LÍNEA -->
                <div class="w-full h-4 bg-contain bg-repeat-x bg-left-center" 
                    style="background-image: url('../../imagenes/historias/nci-directory-green-brush_separator.png');">
                </div>
            </div>
            <!-- Contenedor de los blog -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 w-full justify-items-center px-5 sm:px-6 md:px-8 lg:px-12">
                <!-- Blog 1  -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/PARQUE-NACIONAL-YACURI-1-NCI-768x512.png" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Conocer para conservar: monitoreo en el Corredor de 
                            Conectividad Podocarpus Yacuri</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">septiembre 17, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Guardaparques y guardabosques del <br>Corredor de Conectividad Podocarpus Yacuri 
                        <br>fortalecieron sus capacidades para monitorear <br>la fauna silvestre mediante el...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 2  -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/SalidaOrellana2024_32-253x190.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">
                            Una carrera para descubrir y conservar el territorio de Orellana
                        </h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">septiembre 1, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Orellana se extiende en el corazón de la 
                            <br>Amazonía ecuatoriana, entre bosques, ríos y <br>una diversidad de paisajes que...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 3  -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Foto-principal-253x169.jpg" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Las comunidades de los Andes del Norte se unen</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">agosto 16, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">En el VIII Encuentro de la Red de Áreas de 
                            <br>Conservación de los Andes del Norte, <br>representantes de 13... </p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 4 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Foto-de-potada_-Krisia-Espinoza-253x169.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">El compromiso comunitario en la ACP Cujillo se renueva</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">agosto 11, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Con el compromiso de seguir protegiendo
                            <br>uno de los bosques secos interandinos de
                            <br>Cajamarca, se realizó la renovación de...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 5 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Featured-image.jpg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Un paso adelante para una Amazonía conectada</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">agosto 4, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">El reconocimiento del territorio indígena
                            <br>Tsapuni marca un nuevo paso hacia una
                            <br>Amazonía mejor conectada y conservada.
                            <br>Después de...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 6 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Cascada-2-APH-CORAZON-DE-LA-AMAZONIA-2-1536x1024.jpeg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Miel por Bosque fortalece la conservación en Zamora 
                            Chinchipe</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">agosto 3, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Las abejas sin aguijón son mucho más que
                            <br>productoras de miel. Dependen de bosques y
                            <br>paisajes agroforestales conservados para
                            <br>encontrar...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 7 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Panoramica-San-Andres.jpeg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">San Andrés: la comunidad que luchó 16 años para proteger 
                            el agua y los bosques</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">julio 29, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">En el sur de Ecuador, en la provincia de
                            <br>Zamora Chinchipe, cantón Chinchipe,
                            <br>parroquia San Andrés, se ha establecido...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 8 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Limite-PACR-Yanajanca-350x247.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Ocho regiones del Perú se unen en Huánuco</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">julio 7, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Con el firme objetivo de consolidar la gestión
                            <br>territorial y proteger la biodiversidad del país,
                            <br>representantes de ocho gobiernos...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">EVENTO</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 9 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/IMG_8489-1536x864.jpg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Ecosistemas y especies únicas de El Oro y Loja</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">junio 22, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Donde el Chocó, los Andes y la región
                            <br>Tumbesina se encuentran Por: Manuel V.
                            <br>Sánchez-Nivicela y Juan C. Sánchez-Nivicela
                            <br>Las...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 10 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Foto-principal_-350x214.jpg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Perú y Ecuador definen acciones para el Plan Estratégico 
                            del Corredor de Conservación Transfronterizo Andino Amazónico</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">junio 16, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Con el objetivo de consolidar una agenda
                            <br>binacional de conservación y gestión
                            <br>sostenible del territorio, representantes de
                            <br>instituciones ambientales...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">NOTICIAS</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">ECUADOR</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 11 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/20250904_103537-Wilmer-Ortiz-Herrera-Naturaleza-y-Cultura-Internacional-350x263.jpg.webp"
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">Área de Conservación Regional Yanajanca: la mayor 
                            apuesta de conservación en los Andes peruanos</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">junio 10, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">El Área de Conservación Regional Yanajanca
                            <br>(Huánuco, Perú) es un territorio donde los
                            <br>Páramos abrazan a las Yungas Peruanas....</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
                <!-- Blog 12 -->
                <div class="flex flex-col items-center w-full max-w-sm mx-auto">
                    <div class="relative w-full">
                        <img src="../../imagenes/historias/Foto-principal-de-paisaje-350x263.jpg.webp" alt="" 
                        class="w-full h-72 object-cover">
                    </div>
                    <div class="p-4 space-y-4">
                        <h3 class="font-medium text-[rgb(31,72,34)] text-[22px]">La Libertad: Bolívar avanza hacia su protección</h3>
                        <p class="text-[16px] text-[rgb(72,81,79)] mb-1">mayo 19, 2026</p>
                        <p class="text-16px text-[rgb(72,81,79)] mb-1">Los bosques secos del Marañón, es un
                            <br>bosque único que hoy busca asegurar su
                            <br>futuro. El proceso para el establecimiento del
                            <br>Área...</p>
                        <!-- Para poder poner el 3º span debajo y centrado ponemos 'flex-wrap' en este div -->
                        <div class="flex gap-4 mb-2 uppercase"> 
                            <span class="bg-[rgb(211,228,218)] text-[rgb(15,125,63)] text-[10px] px-2 py-1">Blog</span>
                            <p class="text-[10px] text-[rgb(31,72,34)]">PERÚ</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ILUSTRACIÓN DE LA CURVA Y EL COLIBRÍ (CORREGIDA) -->
            <!-- -right-20 la empuja hacia afuera de las tarjetas para situarse justo en tu trazo rojo -->
            <!-- h-full obliga a la imagen a medir exactamente lo mismo de alto que toda la sección -->
            <div class="hidden sm:block absolute -right-20 top-0 h-full w-24 z-0 pointer-events-none">
                <img src="../../imagenes/historias/nci-right-illustration1-blog-newsp.png" alt="Decoración lateral derecha" 
                class="w-full h-full object-fill object-right opacity-90">
            </div>
            <!-- Inserta esto justo debajo del grid donde terminan tus tarjetas de blog, pero antes de cerrar el </section> -->
            <div class="mt-12 max-w-6xl mx-auto px-4">
                <!-- Línea divisoria muy sutil -->
                <hr class="border-[rgb(225,234,237)]/60 mb-8" />
                <!-- Contenedor de la paginación -->
                <nav class="flex items-center justify-center gap-1 text-sm font-semibold text-[rgb(72,81,79)]" aria-label="Paginación">
                    <!-- Página Activa (con la línea verde debajo) -->
                    <div class="relative flex flex-col items-center">
                    <a href="#" class="px-3 py-2 text-[rgb(15,125,63)] transition-colors" aria-current="page">1</a>
                    <span class="absolute bottom-0 w-4 h-0.5 bg-[rgb(15,125,63)] rounded-full"></span>
                    </div>
                    <!-- Páginas Siguientes -->
                    <a href="#" class="px-3 py-2">2</a>
                    <a href="#" class="px-3 py-2">3</a>
                    <!-- Elipsis (...) -->
                    <span class="px-2 py-2 font-normal">...</span>
                    <!-- Páginas Siguientes -->
                    <a href="#" class="px-3 py-2">19</a>
                    <a href="#" class="px-3 py-2">20</a>
                    <a href="#" class="px-3 py-2">21</a>
                    <!-- Botón Siguiente -->
                    <a href="#" class="ml-4 px-3 py-2 hover:text-[rgb(15,125,63)] transition-colors flex items-center 
                    font-bold">Next</a>
                </nav>
            </div>
        </section>

        <!-- Contenedor NATURALEZA Y CULTURA EN LAS NOTICIAS -->
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
            <div class="w-full max-w-5xl mx-auto px-5 sm:px-6 md:px-8 lg:px-12 relative z-20 flex flex-col md:flex-row items-center md:items-start 
                justify-center gap-8 md:gap-16 text-center md:text-left md:pt-36">
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
                        In the media
                    </a>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>
    </div>

</body>
</html>