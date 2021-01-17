<html>
    <?php
        require 'fragments/imports.php';
    ?> 
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <title>TIS - Inicio</title>
       



<body>
    <!--                                    Header area                                                    -->             
    <?php
        require 'fragments/header.php';
    ?> 
    <!--                                    Body area                                                      -->
    <div class="carousel-custom carousel">
            <?php
                require 'fragments/homeCarrousel.php';
            ?> 
        </div>
      </div>
    <div class="grad1">
      
      <div class="content2 fixed-bg row">
        <div class="text-center-content" style="margin-top:5%">
          <h3>¿Cómo puedo reportar un delito informático?</h3>
          <p>En esta página hemos dedicado una sección a explicarte cómo y a quién debes reportar un delito
            informático para que así lo puedas hacer fácilmente.
          </p>
        </div>
      </div>
      <div class="content3 row" style="color: black;">
        <div class="left">
          <h1>Test</h1>
          <p>También hemos habilitado una pagina con un test que nos permitira inferir la situación social actual en lo referente a la legislacion vigente en cuestiones de delitos informaticos más basicos. ¿Nos ayudas?</p>
        </div>
        <div class="right">
            <img src="img/index/checklist.jpg" width="500" height="300"></img>
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
<script>
  alert('Esta página ha sido diseñada para google chrome');
</script>