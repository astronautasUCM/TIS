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
    <div class="grad1">
      <div class="content1 row">
        <div class="left carousel-margin">
          <?php require 'fragments/mainCarousel.php' ?>
        </div>
        <div class="right textContainer">
          <div class="text">
            <h3>Recolectamos noticias</h3>
            <p>Nos dedicamos a recolectar noticias relacionadas con delitos informáticos, las cuales 
              han recibido sentencias firmes. Tras esto las analizamos e incluimos los enlaces
              a las noticias originales y a las sentencias para que puedan ser leídas.</p>
            </p>
          </div>
        </div>
      </div>
      <div class="content2 fixed-bg row">
        <div class="text-center-content" style="margin-top:5%">
          <h3>¿Cómo puedo reportar un delito informático?</h3>
          <p>En esta página hemos dedicado una sección a explicarte cómo y a quién debes reportar un delito
            informático para que así lo puedas hacer fácilmente.
          </p>
        </div>
      </div>
      <div class="content3 row">
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
