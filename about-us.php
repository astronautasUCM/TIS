<html>
    <?php
        require 'fragments/imports.php';
    ?> 
    <title>TIS - Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/about-us.css"/>

<body>
    <!--                                    Header area                                                    -->
    <?php
        require 'fragments/header.php';
    ?> 
    <!--                                    End Header area                                                -->
<!--                                         Body area                                                      -->
    <div class='grad2 text-center p-5'>
        <div class='container'>
        <h1>¿Quienes somos?</h1>
        <p style="font-size: large">Somos unos estudiantes de la asignatura de Etica, Legislacion y Profesion en la facultad de Informatica de la UCM, los cuales hemos implementado este pequeño proyecto social para ayudar a desarrolladores y 
            cualquier persona del publico general a encontrar sentencias en el mundo de la informatica. </p>
            <img src='img/about/informatica_UCM.png' width="300" height="300" class='p-5'></img>
        </div>
        <h2>Informe</h2>
        <div class="text">
            
            <p>A medida que pasan los años, tanto los ciberdelitos como las personas afectadas por ellos crece exponencialmente. A esto se suma, la dificultad de que las leyes se 
            actualicen con la misma velocidad con la que surgen nuevas tecnologías y por lo tanto nuevos tipos de ataques. Pero, ¿cómo de informada está la gente sobre los delitos 
            menores en internet?
            </p>
            <p>Con delitos menores entendemos que la mayoría de las personas no tienen pensado crear un malware o lanzar un ataque cibernético a gran escala, pero sí que puede que
            descarguen películas de internet para verlas los viernes por la noche. Creemos que los ciudadanos deberían tener unos conocimientos mínimos de estos delitos y cuáles son 
            sus consecuencias.
            </p>
            <p>Todos los miembros del grupo que ha creado esta página web somos estudiantes de ingeniería informática y vemos como un problema la falta de información o mejor dicho, 
            la poca gente que se ha informado sobre posibles delitos que pueden cometer online. Además creemos que si eres un estudiante, o has estudiado una carrera similar, es de 
            mayor importancia que conozcas algunos de estos casos si no lo has hecho hasta ahora.
            </p>
            <p>Esta página web es una recopilación de datos e información de diferentes fuentes encontradas en internet, desde noticias publicadas en periódicos hasta sentencias 
            judiciales. Pretende ser un centro de información donde encontrar una diversidad de contenido redactado de forma objetiva en un solo lugar, y poder leer y comprender los 
            posibles delitos que han cometido otras personas para que con suerte no te ocurra lo mismo. Todas las imágenes de esta web han sido obtenidas de pixabay, un banco de imágenes
            libres de derechos de autor. Todos los contenidos se publican bajo la Licencia Pixabay, que los hace seguros para usar sin pedir permiso o dar crédito al artista, incluso con fines comerciales.
            <a style="color:white; text-decoration: underline;" href="https://pixabay.com/es/">enlace</a>.
            </p>
            <p>También se encuentra en esta página un link a una encuesta (estimación de 2 minutos en completar) si deseas compartir de forma anónima cuáles eran tus conocimientos 
            sobre los delitos informáticos que ocurren en internet antes de leer el contenido de esta página.</p>
            <p>Además de las noticias y sentencias, se encuentra en esta página una sección llamada “cómo reportar”. Durante el proceso de investigación, consideramos que era 
            importante hacer saber al usuario qué métodos existen para reportar un ataque cibernético. En este caso, si eres testigo o víctima de un delito informático, con el link 
            que encontrarás en esa sección podrás reportarlo en la página oficial de la Guardia Civil del grupo de delitos telemáticos. </p>
            <p>Esperamos poder concienciar a la gente de algunos de los posibles delitos que se han cometido en internet, y de qué manera pueden protegerse ante las autoridades si 
            sufren algún tipo de delito informático.</p>
        </div>
    </div>
    <div class='grey'>
    <div class='container pt-5'>
        <h2 class="featurette-heading text-center mb-5">El Equipo</h2>
            <?php
                $persons = array(
                    'fre' => array('Alex Díaz', 'Redaccion', 'Redactor e investigador de la sección de Sentencias', 'img/about/alex.jpg'),
                    'lui' => array('Luis', 'Redaccion', 'Redactor e investigador de la sección de Noticias', 'img/about/luis.jpeg'),
                    'fra' => array('Fran', 'Redaccion', 'Redactor e investigador de la sección de Noticias', 'img/about/fran.jpeg'),
                    'ped' => array('Pedro Martínez', 'Desarrollo Web', 'Encargado del desarrollo de la pagina web', 'img/about/pedro.jpg'),
                    'pab' => array('Pablo Vázquez', 'Desarrollo Web', 'Encargado del desarrollo de la pagina web', 'img/about/pablo.PNG')
                );
                $r = true;
                foreach ($persons as $person) {
                    $r = $r xor true;
                    $name = $person[0];
                    $title = $person[1];
                    $description = $person[2];
                    $photo = $person[3];
                    require 'fragments/person.php';
                }
            ?>
        </div>
    </div> 
    <!--                                    End body area                                                  -->
    <!--                                    Footer area                                                    -->
    <?php
        require 'fragments/footer.php';
    ?> 
    <!--                                    End footer area                                                -->
</body>
</html>

<!--                                        Scripts                                                        -->
