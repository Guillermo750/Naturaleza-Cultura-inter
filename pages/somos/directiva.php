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
    <title>Nuestra Junta Directiva</title>
</head>

<body>
        <div class="overflow-x-hidden w-full">
        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/header.php"; ?>

        <!-- Contenedor principal Imagen de fondo + título encima encima -->
        <section class="w-full relative bg-[url(../../imagenes/junta_directiva/interior-banner.jpg)] bg-cover bg-center 
            bg-no-repeat flex items-center min-h-[50vh] md:h-[70vh] pt-6 pb-12">

            <!-- Contenedor del título (Centrado en móvil, alineado a la izquierda en portátiles) -->
            <div class="w-full mx-auto px-6 md:px-12 lg:px-24 max-w-5xl relative z-10 md:mt-40 mt-36 mb-12 flex justify-center 
                md:justify-start">
                <!-- Bloque con fondo negro translúcido -->
                <div class="inline-block p-6 w-full max-w-xs sm:max-w-xl rounded-lg text-center md:text-left">
                    <!-- TÍTULO -->
                    <h1 class="text-white text-4xl sm:text-5xl font-semibold tracking-wide md:whitespace-nowrap">
                        Nuestra Junta Directiva
                    </h1>
                </div>
            </div>

            <!-- LÍNEA INFERIOR: Clavada exactamente en el borde inferior de la imagen de fondo -->
            <img src="../../imagenes/junta_directiva/linea02.png" alt="Línea divisoria inferior" 
            class="absolute bottom-0 inset-x-0 block w-full h-auto z-20">
        </section>

        <!-- Contenedor Conoce al equipo de Naturaleza y Cultura Internacional -->
        <section class="w-full max-w-4xl mx-auto flex flex-col justify-start items-center md:items-start my-6 space-y-4 py-10 px-6 
            text-center md:text-left">  

            <!-- Párrafo descriptivo -->
            <p class="text-[16px] text-[rgb(72,81,79)] w-full">
                Nuestra junta directiva está compuesta por empresarios, científicos y académicos que aportan un alto nivel de compromiso y 
                pasión por conservar la diversidad biológica y cultural de nuestro planeta.
            </p>
        </section>

        <!-- Contenedor Acordeón -->
        <section class="w-full md:max-w-4xl mx-auto p-0 sm:p-4 space-y-2.5">

            <!-- ACORDEÓN 01 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)]
                 select-none text-left">
                <h2 class="text-2xl font-medium">Charles Smith</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <!-- Contenedor del contenido con animación de altura controlada por JS -->
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Presidente</h3>
                        <p class="text-base leading-relaxed">
                        Charles ha iniciado cinco empresas y una fundación. Es conocido por inventar el modelo de entrega de imágenes libres
                        de regalías en Digital Stock Inc., uno de los primeros modelos de transacciones habilitados para Internet del mundo,
                        luego adquirido por Bill Gates. Charles también desarrolló el modelo de aprendizaje basado en la confianza en 
                        <span class="underline">Amplifire</span>, la plataforma de aprendizaje líder basada en psicología cognitiva con más 
                        de 3 mil millones de interacciones de estudiantes hasta la fecha, y recientemente vendida a 
                        <span class="underline">Polaris Partners</span>. Es co-fundador y miembro de la junta directiva de la 
                        <span class="underline">E.O. Wilson Biodiversity Foundation</span>, y anteriormente se desempeñó en el Gabinete del 
                        Director en la <span class="underline">Institución Scripps de Oceanografía.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 02 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)]
                    select-none text-left">
                <h2 class="text-2xl font-medium">Marcia Angle</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Vicepresidenta de la Junta Directiva</h3>
                        <p class="text-base leading-relaxed">
                        Marcia es médica de medicina preventiva. Durante dos décadas fue directora médica de IntraHealth.org, enfocándose en 
                        África subsahariana. En Carolina del Norte, fue directora médica del departamento de salud de un condado, enseñó 
                        salud internacional en la Universidad de Carolina del Norte en Chapel Hill (UNC-CH) y enseñó epidemiología 
                        ambiental en la Escuela de Medio Ambiente de la Universidad de Duke. Marcia tiene un título de la Universidad de 
                        Harvard, un MD de la Universidad de Duke y un MPH de UNC-CH. Es miembro de las juntas directivas de la E.O. Wilson 
                        Biodiversity Foundation y Southern Environmental Law Center, así como varios consejos asesores. En casa es una 
                        entusiasta jardinera orgánica.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 03 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Adriana Casas</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">En Memoria, Miembro Honorario de la Junta</h3>
                        <p class="text-base leading-relaxed">
                        Adriana fue una abogada ambientalista colombiana, profundamente comprometida con la protección del patrimonio 
                        natural de su país. Trabajó en temas de legislación y política ambiental en América Latina, centrándose en la 
                        sostenibilidad, las soluciones basadas en la naturaleza y las estrategias de mitigación y adaptación al cambio 
                        climático. A Adriana le apasionaba especialmente avanzar en la transición hacia sistemas de energía libre de 
                        carbono, promover los bosques urbanos y explorar la intersección entre la conservación de la biodiversidad y el 
                        desarrollo de infraestructuras.
                        </p>
                        <p class="text-base leading-relaxed">
                        El legado de cuidado de Adriana por su tierra natal se extendió más allá de su labor profesional. Junto con su 
                        esposo, apoyó un fondo de becas en Colombia, impulsando a la próxima generación de gestores ambientales mediante el 
                        financiamiento de tesis de pregrado y posgrado centradas en la conservación y el uso sostenible de la extraordinaria
                        biodiversidad de Colombia. Su impacto perdura a través de las vidas que tocó y las causas que defendió.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 04 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Andrew Currie</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro</h3>
                        <p class="text-base leading-relaxed">
                        Andrew es un empresario y defensor de la conservación. Se desempeñó como copresidente del equipo de transición del 
                        gobernador de Colorado, Jared Polis, para Energía, Recursos Naturales y Agricultura en 2019. Su trabajo incluye la 
                        defensa de políticas legislativas, regulatorias y de medidas electorales, liderando iniciativas en inversión de 
                        impacto para la conservación del hábitat de la vida silvestre y esfuerzos electorales pro naturaleza. Andrew llevó 
                        a compradores de conservación a asociarse con una fundación de tierras para crear una reserva de vida silvestre de 
                        pradera de 5,000 acres y ayudó a apoyar a otra fundación de tierras en la protección de una propiedad en el James 
                        Peak Wilderness. Está interesado en utilizar los medios de comunicación y la narración de historias para generar 
                        conciencia y acción, incluyendo una charla <span class="underline">TEDxBoulder sobre especies en peligro de 
                        extinción</span>. Es fundador y exdirector de <span class="underline">Environmental Entrepreneurs Rocky Mountains</span>.
                        Andrew fue un exitoso fundador y CEO de dos startups de software y tiene un título de licenciatura en Ciencias de la 
                        Computación de la Universidad del Sur de Mississippi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 05 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">John Evey</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro</h3>
                        <p class="text-base leading-relaxed">
                            John pasó 36 años liderando programas de desarrollo en el sector caritativo y educativo, incluso en tres 
                            universidades importantes, un instituto de investigación genómica líder y el quirófano continuo más antiguo 
                            del hemisferio occidental. Hace una década, comenzó a ayudar a empresas a innovar con tecnologías que pueden 
                            mejorar el futuro de las personas en todo el mundo. Hoy es socio general y director gerente de un fondo de 
                            impacto con una cartera de veinte empresas en múltiples sectores que pueden hacer que el mundo sea más positivo 
                            para toda la vida en el planeta. Él y su esposa disfrutan de las caminatas al aire libre.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 06 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Ivan Gayler</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Fundador</h3>
                        <p class="text-base leading-relaxed">
                            Ivan fundó Naturaleza y Cultura Internacional en 1996 y ha liderado nuestros esfuerzos para proteger millones 
                            de hectáreas de ecosistemas tropicales. Es cofundador de Del Mar Partnership, uno de los primeros 
                            desarrolladores de laboratorios de biotecnología en San Diego, así como de proyectos prestigiosos como Del Mar 
                            Plaza. Su firma ha ganado el Premio Nacional a la Excelencia del Urban Land Institute. Ivan se ha desempeñado 
                            en numerosas juntas en San Diego, incluido el Museo del Hombre y el Gabinete del Director en la Institución 
                            Scripps de Oceanografía. En 2010, Ivan ganó la Medalla de Conservación de la Sociedad Zoológica de San Diego, 
                            anteriormente otorgada a íconos de la conservación como E.O. Wilson y Jane Goodall.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 07 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Bob Keefe</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Secretario</h3>
                        <p class="text-base leading-relaxed">
                        Bob es el director ejecutivo de E2, una organización nacional y apartidista compuesta por propietarios de empresas, 
                        inversionistas y profesionales que aprovechan la investigación económica y su perspectiva empresarial para impulsar 
                        políticas que beneficien tanto al medio ambiente como a la economía. La red nacional de E2 incluye a más de once 
                        mil líderes empresariales distribuidos en nueve capítulos, desde Nueva York hasta Los Ángeles, así como un equipo 
                        de defensores que trabajan en políticas de clima y energía limpia a nivel federal y estatal.
                        </p>
                        <p class="text-base leading-relaxed">
                        Como afiliada del Consejo para la Defensa de los Recursos Naturales (NRDC), E2 es la voz empresarial más importante 
                        en temas donde convergen el medio ambiente y la economía, y es la autoridad líder en empleos de energía limpia en 
                        los Estados Unidos. Anteriormente, Bob trabajó durante casi veinticinco años como periodista cubriendo negocios y 
                        tecnología para organizaciones como el St. Petersburg Times, el Austin American-Statesman y la cadena Cox 
                        Newspapers. En 2008, se mudó a Washington, D.C., para cubrir el Congreso y la Casa Blanca para el Atlanta 
                        Journal-Constitution, antes de unirse a E2 en 2011.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 08 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Renzo Paladines</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Fundador y Director de Conservación</h3>
                        <p class="text-base leading-relaxed">
                        Renzo es uno de los fundadores de Naturaleza y Cultura Internacional. En 1996, él e Ivan Gayler establecieron la 
                        Estación Científica de San Francisco, hogar del programa de investigación de ecología de bosque montañoso más 
                        grande del mundo.
                        </p>
                        <p class="text-base leading-relaxed">
                        Bajo la dirección de Renzo, los primeros proyectos de conservación de NCI se desarrollaron en Ecuador. Renzo tiene 
                        una amplia experiencia en el campo de la conservación. Se desempeñó como coordinador del informe Geo-Loja de 
                        Naciones Unidas y fue presidente del Consejo Regional de la Cuenca del Río Catamayo-Chira. En reconocimiento a sus 
                        esfuerzos, Renzo recibió el Premio Podocarpus del Consejo Provincial de Loja por sus esfuerzos de conservación y 
                        gestión ambiental. Tiene una Maestría en Zootecnia de la Universidad de la Amistad de los Pueblos en Moscú.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 09 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Diana Richey</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Tesorera</h3>
                        <p class="text-base leading-relaxed">
                        Diana Richey es asesora de inversiones, abogada fiscal y escritora, cuyo trabajo tiende un puente entre la práctica 
                        financiera disciplinada y una exploración más amplia de cómo la creación de recursos financieros puede sustentar 
                        una vida con propósito. Diana cree que los recursos financieros son más poderosos cuando están alineados con las 
                        convicciones personales y los objetivos de vida.
                        </p>
                        <p class="text-base leading-relaxed">
                        Con más de dos décadas de experiencia en derecho y finanzas, comenzó su carrera como abogada de impuestos 
                        internacionales, asesorando a individuos, fondos privados y corporaciones multinacionales en planificación 
                        transfronteriza, estructuras caritativas y estrategia de capital a largo plazo.
                        </p>
                        <p class="text-base leading-relaxed">
                        Hoy en día, gestiona carteras de clientes con énfasis en la conciencia del riesgo y la toma de decisiones basada en 
                        procesos. A través de su <span class="underline">Substack</span>, enseña los fundamentos de la inversión con un enfoque en la 
                        generación de ingresos y capital a largo plazo. Comparte su propia cartera como una referencia transparente, 
                        detallando sus operaciones a medida que las realiza para que los lectores puedan aprender y crecer junto a ella.
                        </p>
                        <p class="text-base leading-relaxed">
                        Diana es licenciada por la Universidad de Chicago, doctora en derecho por la Facultad de Derecho de la Universidad 
                        de Boston y cuenta con la certificación de Planificadora Financiera Certificada (CFP®). Vive en Jackson Hole con su 
                        esposo, su hijo y su perro.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 10 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Daniela Uribe</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro</h3>
                        <p class="text-base leading-relaxed">
                        Daniela es una activista ambiental de Pereira, Colombia que actualmente vive en Boulder, CO. Durante la última 
                        década, Daniela ha trabajado en la intersección de problemas sociales y desafíos ambientales a través de 
                        organizaciones sin fines de lucro, filantropía, consultoría y negocios, incluso como cofundadora de el Fondo 
                        Legado Torres del Paine en la Patagonia Chilena. Es una fan entusiasta y partidaria del modelo de conservación de 
                        Naturaleza y Cultura Internacional, lo que la llevó a unirse a la Junta Directiva de la organización en 2021. 
                        Daniela obtuvo una licenciatura de la Universidad de Stanford, un Certificado en Conservación de Bosques Tropicales 
                        de la Escuela de Yale del Medio Ambiente, y una Maestría en Política Ambiental y de Recursos Naturales de CU Boulder.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 11 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Stewart Winkler</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro</h3>
                        <p class="text-base leading-relaxed">
                        El interés de Stewart por la conservación comenzó en la escuela secundaria, donde trabajó en la defensa del medio 
                        ambiente. Se graduó del Claremont McKenna College con una triple licenciatura en Estudios Ambientales, Economía y 
                        Política, realizando pasantías en Washington D.C. para los USPIRG y River Conservation International. Al graduarse, 
                        se mudó a Montevideo, Uruguay, como voluntario del Cuerpo de Paz, trabajando a nivel nacional en capacitación sobre 
                        evaluación de impacto ambiental, transferencia de tecnologías de producción limpia en la industria del cuero, 
                        tecnología de rellenos sanitarios limpios en la gestión de residuos sólidos municipales y apicultura.
                        </p>
                        <p class="text-base leading-relaxed">
                        Posteriormente, su carrera dio un giro hacia el sector inmobiliario en Boston, donde trabajó para una empresa 
                        pública en el desarrollo de viviendas asequibles financiadas mediante créditos fiscales. Regresó al sur de 
                        California al ser reclutado por una organización sin fines de lucro para construir viviendas asequibles. Con el 
                        tiempo, se independizó creando su propia empresa de bienes raíces residenciales y comerciales, Urban West Ventures.
                        </p>
                        <p class="text-base leading-relaxed">
                        A lo largo de su trayectoria, ha continuado siendo un defensor del medio ambiente como miembro de la junta y del 
                        consejo de diversas organizaciones, incluyendo Wildcoast a nivel local y Earthjustice a nivel nacional. También 
                        recibió capacitación como parte del programa Climate Reality de Al Gore y ha brindado charlas sobre el cambio 
                        climático. Actualmente, continúa como voluntario en juntas relacionadas con el sector inmobiliario y el medio 
                        ambiente. Durante más de 10 años, ha sido donante de NCI y ha colaborado en proyectos ocasionales. Recientemente, 
                        sus hijos han dejado el hogar: su hijo Lucas trabaja en Boston y su hija Charlotte estudia arte en Florida. 
                        En su tiempo libre, disfruta viajar, hacer senderismo, jugar al pickleball y siempre está en busca de nuevos retos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 12 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Sanford (Sandy) Keziah</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Asesor del Directorio</h3>
                        <p class="text-base leading-relaxed">
                        La carrera de Sandy se ha centrado en la creación, gestión, supervisión e inversión en empresas de pequeña 
                        capitalización. Fundó su primera empresa siendo estudiante de primer año en la universidad y, para su segundo año, 
                        ya contaba con 60 empleados. A principios de los años 90, se convirtió en uno de los primeros planificadores 
                        estratégicos en la industria publicitaria de los Estados Unidos y cofundó una de las primeras y más importantes 
                        firmas de estrategia de marca del país, la cual prestó servicios a marcas líderes en su categoría como Coca-Cola, 
                        P&G, IBM y GM.
                        </p>
                        <p class="text-base leading-relaxed">
                        A mediados de la década de 2000, vendió la firma y se unió a Last Software como director independiente de la junta 
                        directiva hasta la adquisición de la empresa por parte de Google. Tras esta operación, cofundó Lacuna Gap Capital, 
                        que proporciona capital complementario (Gap Capital) a empresas emergentes en los mercados públicos y privados. 
                        Sandy ha formado parte de las juntas directivas de siete empresas tecnológicas y tres de servicios. Fue presidente 
                        de la Asociación de Exalumnos de la Harvard Divinity School y formó parte del Consejo del Decano de dicha 
                        institución durante 11 años. Se licenció en Filología Inglesa por la Universidad de Duke y obtuvo una Maestría en 
                        Estudios Teológicos en la Universidad de Harvard, donde estudió historia y filosofía de las religiones del mundo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 13 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Sheldon Engelhorn</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">En Memoria, Miembro Honorario de la Junta</h3>
                        <p class="text-base leading-relaxed">
                        Sheldon es un empresario que cofundó una empresa de herramientas de ciencias de la vida (ahora parte de Thermo 
                        Fisher Scientific). Es ex alumno de la Universidad de California y fideicomisario emérito de la Fundación UC San 
                        Diego. Un ávido surfista, Sheldon está activo en el Gabinete del Director en la Institución Scripps de Oceanografía 
                        y recibió la Medalla del Canciller en 2011.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 14 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Jane Goodall</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">En Memoria, Miembro Honorario de la Junta</h3>
                        <p class="text-base leading-relaxed">
                        Jane Goodall es una reconocida primatóloga, etóloga, antropóloga y Mensajera de la Paz de la ONU. Es la fundadora 
                        del Instituto Jane Goodall y Roots and Shoots. Su trabajo comenzó en Tanzania, donde estudió los comportamientos 
                        sociales y familiares de los chimpancés. Es considerada la mayor experta mundial en chimpancés. Su trabajo ha sido 
                        fundamental para los esfuerzos de conservación y bienestar animal.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 15 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">David Neill</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">En Memoria, Miembro Honorario de la Junta</h3>
                        <p class="text-base leading-relaxed">
                        David Neill vive en Ecuador desde 1985, donde ha estado realizando proyectos florísticos, brindando capacitación a 
                        botánicos ecuatorianos y asistiendo en el desarrollo del Herbario Nacional de Ecuador. En el pasado se desempeñó 
                        como director de la Fundación Jatun Sacha, una organización ecuatoriana sin fines de lucro dedicada a la 
                        conservación, la educación y la investigación. Actualmente es profesor universitario en Quito.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 16 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">Byron Swift</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro honorario</h3>
                        <p class="text-base leading-relaxed">
                        Byron Swift es abogado ambientalista y ha trabajado durante las últimas cuatro décadas para conservar la 
                        biodiversidad y los ecosistemas naturales en la mayoría de los países del hemisferio occidental. Se ha desempeñado 
                        como presidente de Naturaleza y Cultura Internacional, fundador y presidente de Rainforest Trust y director de la 
                        oficina de Estados Unidos de UICN. Un ávido observador de aves, se graduó en la Facultad de Derecho de Columbia y 
                        la Universidad de Stanford.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACORDEÓN 17 -->
            <div class="acordeon-item group border-b border-transparent transition-all duration-300 text-[rgb(15,125,63)]">
                <button class="acordeon-trigger flex w-full justify-between items-center p-4 sm:p-6 cursor-pointer bg-[rgb(244,244,237)] 
                    select-none text-left">
                <h2 class="text-2xl font-medium">E.O. Wilson (En memoria)</h2>
                <i class="fa-solid fa-arrow-down-long acordeon-icon transition-transform duration-300 text-lg sm:text-xl shrink-0 ml-4
                    text-[rgb(48,86,50)]"></i>
                </button>
                <div class="acordeon-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-[rgb(244,244,237)]
                    text-[rgb(15,125,63)]">
                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-xl">Miembro honorario</h3>
                        <p class="text-base leading-relaxed">
                        Ed Wilson es un reconocido biólogo, autor y profesor emérito de la Universidad de Harvard. Se le considera el 
                        principal experto mundial en mirmecología, o el estudio de las hormigas. Dos veces ganador del Premio Pulitzer, 
                        conocido por sus libros que van desde la biología hasta la defensa del medio ambiente y sus ideas humanistas 
                        seculares sobre la interacción entre la religión, la ética y la conservación.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <?php include_once "../../components/footer.php"; ?>

    </div>

</body>
</html>