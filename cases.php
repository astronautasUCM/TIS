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
    <div class="grad1 web-body">
        <div name="title">
            <h2>Casos más importantes</h2>
        </div>
        <div class="cases-carousel">
            <?php
                require 'fragments/casesCarousel.php';
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
