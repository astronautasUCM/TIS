<html>
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>TIS - Juego</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/w3.css"/>
    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>


<body>
    <!--                                    Header area                                                    -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary header">
        <div class="container">
        <a class="navbar-brand" href="#">ELP - TIS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
              <li class="nav-item"> <a class="nav-link" href="index.html">Inicio </a> </li>
              <li class="nav-item"><a class="nav-link" href="documentation.html"> Documentacion </a></li>
              <li class="nav-item active"><a class="nav-link" href="game.html"> Juego </a></li>	
              <li class="nav-item"><a class="nav-link" href="about-us.html"> Sobre nosotros </a></li>	
        </div> <!-- navbar-collapse.// -->
      </div><!-- container //  -->
      </nav>
    <!--                                    End Header area                                                -->
    <?php
        require 'fragments/header.php';
    ?> 
    <!--                                    Body area                                                      -->
    <div class="grad1">

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
