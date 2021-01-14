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
                        'case1' => array('Caso 1', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'pages/noticias/noticia1.php', 'img/news/1.jpg'),
                        'case2' => array('Caso 2', 'asdfasdfadsf', 'ESP4567466/342', 'Juzgado de Madrid', 'pages/noticias/noticia2.php', 'img/news/2.jpg'),
                        'case3' => array('Caso 3', 'Hola hola!!!!', 'ESP456/3434534532', 'Juzgado de Pais Basco', 'pages/noticias/noticia3.php', 'img/news/3.jpg'),
                        'case4' => array('Caso 4', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'pages/noticias/noticia4.php', 'img/news/4.jpg'),
                        'case5' => array('Caso 5', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'pages/noticias/noticia5.php', 'img/news/5.jpg')
                    );
                    foreach ($cases as $case) {
                        $title = $case[0];
                        $description = $case[1];
                        $casenumber = $case[2];
                        $location = $case[3];
                        $link = $case[4];
                        $image = $case[5];
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
