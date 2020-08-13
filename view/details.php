
<?php

include('stylesheet.html');

?>
<div class="d-flex justify-content-center">


    <div class="card m-5" style="width: 36rem;">
        <img style="width: 36rem;height:24rem" class="card-img-top" src="assets/<?=$voiture->getPicture()?>" alt="<?= $voiture->getMarque()?>">
        <div class="card-header text-uppercase">
            <h3>détails de <?=$voiture->getMarque().' '.$voiture->getModele();?></h3>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fas fa-car-alt"></i>&emsp;<?= $voiture->getMarque();?></li>
                <li class="list-group-item"><i class="fas fa-tag"></i>&emsp;<?= $voiture->getModele();?></li>
                <li class="list-group-item"><i class="fas fa-charging-station"></i>&emsp;<?= $voiture->getEnergie();?></li>
                <li class="list-group-item"><i class="fas fa-toolbox"></i>&emsp;<?= $voiture->getBoiteAuto()?'boîte automatique : oui':'boîte automatique : non';?></li>
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="index.php?controller=default&action=home">
                <button type='submit' class="btn btn-secondary mt-2 mb-2">retour</button>
            </a>
        </div>
    </div>
</div>
