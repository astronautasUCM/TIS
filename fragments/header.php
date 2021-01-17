<?php   
  
    $uri = $_SERVER['REQUEST_URI'];      
?> 

<nav class="navbar navbar-expand-lg navbar-dark sticky-top header">
        <div class="container container-x">
        <a class="navbar-brand title" href="./">ELP - TIS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/judgements.php") {echo 'active';}?>" href="judgements.php">Sentencias</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/cases.php") {echo 'active';}?>" href="cases.php">Noticias</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/report.php") {echo 'active';}?>" href="report.php">Cómo reportar</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/test.php") {echo 'active';}?>" href="test.php">Test</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/about-us.php") {echo 'active';}?>" href="about-us.php">Sobre nosotros</a></li>
        </div> <!-- navbar-collapse.// -->
      </div><!-- container //  -->
</nav>