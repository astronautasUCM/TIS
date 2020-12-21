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
    <!--                                    Body area                                                      -->
    <div class="grad2">
        <div class='container web-body'>
            <?php
                $persons = array(
                    'pab' => array('Pablo', 'Jefe de Equipo', 'Esta a tope'),
                    'ped' => array('Pedro', 'Pesao profesional', 'Maquinote con movidas web'));
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
