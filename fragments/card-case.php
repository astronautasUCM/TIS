


<div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title><?php echo $title ?></title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

    <div class="card-body">
        <p class="card-text" style="color:black;"><?php echo $description ?></p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo $link ?>" class="button">Ver más</a></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $casenumber ?></button>
        </div>
        <small class="text-muted">9 mins</small>
        </div>
    </div>
</div>