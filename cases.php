<html>
<link rel="stylesheet" type="text/css" href="css/cases.css"/>

    <?php
        require 'fragments/imports.php';
    ?> 
     
    <title>TIS - Casos</title>
<body>
    <!--                                    Header area                                                    -->
    <?php
        require 'fragments/header.php';
    ?> 
    <!--                                    End Header area                                                -->
    
    <!--                                    Body area                                                      -->
    <div class="grad1">
        <div class="carousel-custom carousel">
            <?php
                require 'fragments/casesCarousel.php';
            ?> 
        </div>

        <div class="album py-5">  
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 g-3">
                <?php
                    $cases = array(
                        'case1' => array('Denuncian al informático que encontró una brecha de datos en la app de metro de Valencia', "Ferrocarrils de la Generalitat Valenciana (FGV) denunció al ingeniero informático que encontró una vulnerabilidad en la aplicación de Metrovalencia y TRAM.", 'cases/noticia1.php', 'img/news/1.jpg'),
                        'case2' => array('Prisión y multa a dos alumnos por ‘hackear’ ordenadores de profesores', 'Un juzgado de la localidad pontevedresa de A Estrada condenó a cuatro meses de cárcel y multa de 480 euros a dos alumnos de un instituto por hackear ordenadores de varios profesores. Instalaron un software que daba acceso a las contraseñas de ', 'cases/noticia2.php', 'img/news/2.jpg'),
                        'case3' => array('Una sentencia pionera absuelve a una persona por compartir cine en la Red', 'El juzgado número 1 de lo Mercantil de San Sebastián ha tomado una polémica decisión que podría suponer un punto de inflexión en el debate sobre la piratería en internet.', 'cases/noticia3.php', 'img/news/3.jpg'),
                        'case4' => array('Caso 4', 'El caso mas importante de la carrera politica de barcenas', 'cases/noticia4.php', 'img/news/4.jpg'),
                        'case5' => array('Caso 5', 'El caso mas importante de la carrera politica de barcenas', 'cases/noticia5.php', 'img/news/5.jpg')
                    );
                    foreach ($cases as $case) {
                        $title = $case[0];
                        $description = $case[1];
                        $link = $case[2];
                        $image = $case[3];
                        echo '<div class="col p-2">';
                            require 'fragments/card-case.php';
                        echo "</div>";
                    }
                ?>
            </div>
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
