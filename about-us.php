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
                    'pab' => array('Pablo', 'Jefe de Equipo', 'Esta a tope'),
                    'ped' => array('Pedro', 'Pesao profesional', 'Maquinote con movidas web'),
                    'fre' => array('Freeman', 'Twittero en su tiempo ocupado', 'K pasa, hacemos la etica o k pasa'),
                    'lui' => array('Luis', 'Luisito Comunica', 'Dibuja de vez en cuando paginas web'),
                    'fra' => array('Fran', 'Futbolero Instagramer', 'GOOOOOOOOOOOOOOOOOOOOOOOOOOOOOL del bicho, vaya maquina el madrid como pilotaba el bicho')
                );
                $r = true;
                foreach ($persons as $person) {
                    $r = $r xor true;
                    $name = $person[0];
                    $title = $person[1];
                    $description = $person[2];
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
