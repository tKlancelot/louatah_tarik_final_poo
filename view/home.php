
<?php
include ('stylesheet.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'accueil</title>
</head>
<body>
<?php
include('parts/header.php');
?>
<div id='test' class="d-flex justify-content-center">
    <div class="cadre col-9 bg-light p-2 mt-1">
        <?php
        include('parts/menu.php');
        ?>
        <h4 class="text-uppercase border border-secondary border-left-0 border-top-0 border-right-0 bg-light">mon parc automobile</h4>
        <?php
        include('parts/listVoitures.php');
        ?>
    </div>
</div>
</body>

