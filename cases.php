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
        <div class="carousel">
            <?php
                require 'fragments/casesCarousel.php';
            ?> 
        </div>
        <div name="title">
            <h2>Casos más importantes</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <?php
                    $cases = array(
                        'case1' => array('Caso 1', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'link1'),
                        'case2' => array('Caso 2', 'asdfasdfadsf', 'ESP4567466/342', 'Juzgado de Madrid', 'link2'),
                        'case3' => array('Caso 3', 'Hola hola!!!!', 'ESP456/3434534532', 'Juzgado de Pais Basco', 'link3'),
                        'case4' => array('Caso 4', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'link4'),
                        'case5' => array('Caso 5', 'El caso mas importante de la carrera politica de barcenas', 'ESP456/342', 'Juzgado de Barcelona', 'link5')
                    );
                    foreach ($cases as $case) {
                        $title = $case[0];
                        $description = $case[1];
                        $casenumber = $case[2];
                        $location = $case[3];
                        $link = $case[4];
                        echo '<div class="col-sm">';
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
