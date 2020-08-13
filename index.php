<?php

require_once('include.php');

if (empty($_GET)) {
    header('Location: index.php?controller=default&action=home');
}
if ($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
    $myPage = new DefaultController();
    $myPage->home();
}
else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'addForm'){
    $voituresController = new VoituresController();
    $voituresController->addForm();
}
else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'addVoiture'){
    $voituresController = new VoituresController();
    $voituresController->InsertOnSubmit();
}

else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $voituresController = new VoituresController();
    $voituresController->delete($_GET['id']);
}
else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'displayOne' && isset($_GET['id'])){
    $voituresController = new VoituresController();
    $voituresController->getThisById($_GET['id']);
}
else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
    $voituresController = new VoituresController();
    $voituresController->updateForm($_GET['id']);
}
else if($_GET['controller'] === 'voitures' && $_GET['action'] === 'updateVoiture' && isset($_GET['id'])){
    $voituresController = new VoituresController();
    $voituresController->updateVoiture($_GET['id']);
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderBy'){
    $defaultController = new DefaultController();
    $defaultController->orderByMarqueAsc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByDesc'){
    $defaultController = new DefaultController();
    $defaultController->orderByMarqueDesc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByModeleAsc'){
    $defaultController = new DefaultController();
    $defaultController->orderByModeleAsc();
}

else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByModeleDesc'){
    $defaultController = new DefaultController();
    $defaultController->orderByModeleDesc();
}

else
{
    throw new Exception('la page demandée n\'existe pas', 404);
}

?>