<?php
include ('stylesheet.html');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>éditer une voiture</title>
</head>
<body>
<div class="d-flex justify-content-center">

    <div class="cadre col-9 bg-light">

        <h4 class="text-uppercase border rounded">modifier <?php echo $voiture->getMarque().' '.$voiture->getModele();?></h4>
        <a href="index.php?controller=default&&action=home">
            <button class="btn btn-secondary  mt-2 mb-2 text-uppercase">retour</button>
        </a>
        <form method="post" action="index.php?controller=voitures&action=updateVoiture&id=<?php echo $voiture->getId()?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="marque"><i class="fas fa-car-alt"></i>&emsp;marque</label>
                <input name="marque" id="marque" value="<?php echo $voiture->getMarque()?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="modele"><i class="fas fa-tag"></i>&emsp;modèle</label>
                <input name="modele" id="modele" value="<?php echo $voiture->getModele()?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="energie"><i class="fas fa-charging-station"></i>&emsp;énergie</label>
                <select class="form-control" id="energie" name="energie" value="<?php echo $voiture->getEnergie()?>">
                    <option value="essence">essence</option>
                    <option value="diesel">diesel</option>
                    <option value="electrique">électrique</option>
                    <option value="hybride">hybride</option>
                </select>
            </div>

            <div class="form-group">
                <i class="fas fa-toolbox"></i><input type="text" readonly class="form-control-plaintext" value="POSSÈDE UNE BOÎTE AUTOMATIQUE">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="boite_auto" id="boite_auto" value="1" checked>
                    <label class="form-check-label" for="boite_auto">
                        oui
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="boite_auto" id="boite_auto" value="0">
                    <label class="form-check-label" for="boite_auto">
                        non
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="picture"><i class="far fa-image"></i>&emsp;photo</label>
                <input class='form-control mb-2' type="text" readonly value="<?php echo $voiture->getPicture()?>"/>
                <input class='form-control p-1' type="file" name="picture" id="picture">
            </div>
            <div class="form-group">
                <input class='btn btn-primary' type="submit" value="modifier">
            </div>
        </form>

        <?php
        if (isset($errors)){
        ?>
        <div class="text-danger">
            <h4 class="text-uppercase border rounded p-1 small">liste des erreurs</h4>
            <ul>
                <?php
                foreach ($errors as $error){
                    echo '<li><div class="alert alert-warning" role="alert">'.$error.'</alert></div></li>';
                }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
