<html>
    <div class="grad1">
        <div class="new-content">
        
            
            <h1><?php echo $titulo ?></h1>
            <div class="text-area row font-type">
                <div class="left">
                    <p><?php echo $description1 ?></p>
                    <p><?php echo $description2 ?></p>
                    <p><?php echo $description3 ?></p>
                </div>
                <div class="right">
                    <img class="img" src="<?php echo $img ?>" />
                </div>
            </div> 
            <?php
                $i = 1;
                foreach ($fuentes as $fuente) {
                    echo "<a href='".$fuente."'><button type='button' class='btn btn-primary mr-1 ml-1'>Fuente {$i}</button></a>";
                    $i = $i + 1;
                }
            ?>
            <br>
            <a href="../cases.php"><button type="button" class="btn btn-danger mt-5">Volver</button></a>
        </div>
    </div>
</html>


