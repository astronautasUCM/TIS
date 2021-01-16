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
        <p>Somos unos estudiantes de la asignatura de Etica, Legislacion y Profesion en la facultad de Informatica de la UCM, los cuales hemos implementado este pequeño proyecto social para ayudar a desarrolladores y 
            cualquier persona del publico general a encontrar sentencias en el mundo de la informatica. </p>
            <img src='img/about/informatica_UCM.png' width="300" height="300" class='p-5'></img>
        </div>
    </div>
    <div class='grey'>
    <div class='container pt-5'>
        <h2 class="featurette-heading text-center mb-5">El Equipo</h2>
            <?php
                $persons = array(
                    'fre' => array('Alex Díaz', 'Redaccion', 'Redactor e investigador de la sección de Sentencias', 'img/about/alex.jpg'),
                    'lui' => array('Luis', 'Redaccion', 'Redactor e investigador de la sección de Noticias', 'img/about/luis.jpeg'),
                    'fra' => array('Fran', 'Redaccion', 'Redactor e investigador de la sección de Noticias', 'img/about/fran'),
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
