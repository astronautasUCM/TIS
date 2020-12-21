<html>
    <?php
        require 'fragments/imports.php';
    ?> 
    <title>TIS - Inicio</title>

<body>
    <!--                                    Header area                                                    -->
    <?php
        require 'fragments/header.php';
    ?> 
    <!--                                    End Header area                                                -->
    <!--                                    Body area                                                      -->
    <div class='container grad1'>
        <div class='mb-5'></div>
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
    <!--                                    End body area                                                  -->
    <!--                                    Footer area                                                    -->
    <?php
        require 'fragments/footer.php';
    ?> 
    <!--                                    End footer area                                                -->
</body>
</html>

<!--                                        Scripts                                                        -->
