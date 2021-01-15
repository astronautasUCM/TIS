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
                        'case1' => array('Sentencia: SAP VA 440/2020', "La Audiencia Provincial de Valladolid ha condenado a dos años de cárcel a un becario de la Universidad de Valladolid que dañó 20 ordenadores del Instituto de Biología y Genética Molecular, en el que realizaba su doctorado, utilizando un usb-killer que atacó la placa base de los aparatos",
                        'cases/noticia1.php', 'img/news/1.jpg'),
                        'case2' => array('Sentencia: SAP M 10009/2020', 'El sentido del art. 11.1 de LOPJ implica no sólo que no es posible valorar las pruebas obtenidas directamente con la vulneración del derecho fundamental, sino también que no pueden ser utilizados legítimamente como medios de investigación, o como datos para iniciar u orientar una investigación penal, aquellos que hayan sido obtenidos violentando los derechos o libertades fundamentales.', 'cases/noticia2.php', 'img/news/2.jpg'),
                        'case3' => array('Una sentencia pionera absuelve a una persona por compartir cine en la Red', 'El juzgado número 1 de lo Mercantil de San Sebastián ha tomado una polémica decisión que podría suponer un punto de inflexión en el debate sobre la piratería en internet.', 'pages/noticias/noticia3.php', 'img/news/3.jpg'),
                        'case4' => array('Caso 4', 'El caso mas importante de la carrera politica de barcenas', 'pages/noticias/noticia4.php', 'img/news/4.jpg'),
                        'case5' => array('Caso 5', 'El caso mas importante de la carrera politica de barcenas', 'pages/noticias/noticia5.php', 'img/news/5.jpg')
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
