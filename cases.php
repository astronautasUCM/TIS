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
                        'case1' => array('Noticia 1', 'Un juzgado donostiarra absuelve en una sentencia pionera a un internauta por compartir una película.', 'pages/noticias/noticia1.php'),
                        'case2' => array('Caso 2', 'asdfasdfadsf', 'pages/noticias/noticia2.php'),
                        'case3' => array('Caso 3', 'Hola hola!!!!', 'pages/noticias/noticia3.php'),
                        'case4' => array('Caso 4', 'El caso mas importante de la carrera politica de barcenas', 'pages/noticias/noticia4.php'),
                        'case5' => array('Caso 5', 'El caso mas importante de la carrera politica de barcenas', 'pages/noticias/noticia5.php')
                    );
                    foreach ($cases as $case) {
                        $title = $case[0];
                        $description = $case[1];
                        $link = $case[2];
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
