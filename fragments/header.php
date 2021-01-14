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
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/judgement") {echo 'active';}?>" href="judgements">Sentencias</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/cases") {echo 'active';}?>" href="cases">Noticias</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/documentation") {echo 'active';}?>" href="documentation">Como reportar</a></li>
            <li class="nav-item"><a class="nav-link <?php if($uri == "/TIS/about-us") {echo 'active';}?>" href="about-us">Sobre nosotros</a></li>
        </div> <!-- navbar-collapse.// -->
      </div><!-- container //  -->
</nav>