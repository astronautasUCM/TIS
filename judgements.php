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
                require 'fragments/judgementsCarousel.php';
            ?> 
        </div>

        <div class="album py-5">  
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 g-3">
                <?php
                    $judgements = array(
                        'case1' => array('Sentencia: SAP VA 440/2020', "La Audiencia Provincial de Valladolid ha condenado a dos años de cárcel a un becario de la Universidad de Valladolid que dañó 20 ordenadores del Instituto de Biología y Genética Molecular, en el que realizaba su doctorado, utilizando un usb-killer que atacó la placa base de los aparatos",
                        'judgements/judgement1.php', 'img/judgements/1.jpg'),
                        'case2' => array('Sentencia: SAP M 10009/2020', 'En un juicio previo se condenó a prisión al dueño de un locutorio y al pago de indemnizaciones a Microsoft por el valor de las licencias que no poseía.', 'judgements/judgement2.php', 'img/judgements/2.jpg'),
                        'case3' => array('Sentencia: STS 4287/2019', 'Entre enero de 2011 y mayo de 2012 una serie de personas se dedicaron a la obtención, intermediación, comercialización y distribución a gran escala de datos reservados de carácter personal y laboral de cientos de personas.', 'judgements/judgement3.php', 'img/judgements/3.jpg'),
                    );
                    foreach ($judgements as $judgement) {
                        $title = $judgement[0];
                        $description = $judgement[1];
                        $link = $judgement[2];
                        $image = $judgement[3];
                        echo '<div class="col p-2">';
                        require 'fragments/card-judgement.php';
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
