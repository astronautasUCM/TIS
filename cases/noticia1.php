<link rel="stylesheet" type="text/css" href="css/index.css"/>
<title>TIS - Un juzgado donostiarra absuelve en una sentencia pionera a un internauta por compartir una película.</title>

<?php 
    $titulo = 'Denuncuan al ingeniero que encontró una vulnerabilidad en la app "metrovalencia"';
    $description1 = '
    Ferrocarrils de la Generalitat Valenciana (FGV) denunció al ingeniero informático que encontró una vulnerabilidad en la aplicación de Metrovalencia y TRAM. 
    Dicha vulnerabilidad ponía en riesgo los datos personales de casi 60.000 usuarios, que usaban esta aplicación móvil para el metro y el tranvía de Valencia y Alicante. 
    En una entrevista que realizó el periódico Valencia Plaza con este ingeniero, que prefirió no dar su nombre, explica cómo empleando el programa “Postman” se podían acceder a 
    todos los datos de cualquier usuario registrado (excepto el número de tarjeta de crédito). Esto incluía el correo electrónico, NIF, nombres y apellidos, fecha de nacimiento, 
    código postal y número de teléfono. Este ingeniero avisó a la administración y remitió un escrito a la Agencia Española de Protección de Datos (AEPD) además de una auditoría 
    donde explica el problema que tiene la aplicación. Resulta que la API que se usa está de forma pública en internet y no tiene implementado una autenticación para los diferentes 
    usuarios, por lo que cualquier persona puede hacer peticiones sobre cualquier otro usuario y obtener la información. ';
    $description2 = '
    Posteriormente, FGV decidió denunciar a este ingeniero tras considerar en el proceso de demostrar que la aplicación tenía vulnerabilidades, podría haber cometido un delito 
    informático. Finalmente el juez ha decidido archivar esta denuncia, el juez consideró lo siguiente "No consta acreditado que el denunciado hubiese accedido utilizando 
    subterfugios o artimañas al sistema informático de Ferrocarriles de la Generalitat, dando en su declaración cumplida respuesta a las dudas que sobre la manera y razones 
    de su acceso existían".';
    $description3 = '
    Finalmente el 20 de diciembre del 2018 la empresa encargada de desarrollar la aplicación, Proconsi, modificó el sistema de autenticación de tal manera que cada usuario tiene un 
    “hash” único generado cada vez que inician sesión. Aunque se llegó a solucionar el problema, nadie puede negar que el ingeniero en un intento de avisar de un fallo importante, 
    terminó por tener que acudir a juicio y testificar para defenderse, en vez de que los responsables de dicho fallo solucionaran la vulnerabilidad tras ser avisados.
    ';

    $img = '../img/news/1.jpg';
    
    $fuentes = array('fuente1', 'fuente2');
    require 'fragments/imports.php';
    require 'fragments/header.php';
   
    require '../fragments/fragmento_noticia.php';
   
    require '../fragments/footer.php';
?>


