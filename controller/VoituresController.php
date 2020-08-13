
<?php

class VoituresController
{
    public function addForm()
    {
        require('view/insertForm.php');
    }

    private function uploadImage($file){
        $imageUrl= '';
        $errors = [];

        if($file['type'] === 'image/jpeg'){
            if($file['size']<800000){
                $extension = explode('/', $file['type'])[1];
                $imageUrl = uniqid().'.'.$extension;
                move_uploaded_file($file['tmp_name'], 'assets/'.$imageUrl);

            }
            else {
                $errors[] = 'ce fichier excède la taille autorisée';
            }
        }
        else {
            $errors[] = 'erreur : seul les fichiers jpg/jpeg sont autorisés !';
        }
//        die();
        return ['errors'=>$errors, 'picture'=>$imageUrl];
    }

    public function InsertOnSubmit()
    {
        $errors = [];
        $voiture = new Voitures(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['boite_auto'],$_FILES['picture']);

        if(isset($_FILES['picture'])) {
            $upload = $this->uploadImage($_FILES['picture']);
            if (count($upload['errors']) === 0){
                $voiture->setPicture($upload['picture']);
            }
            else{
                $errors[] = $upload['errors'][0];
            }
        }
        if (empty($_POST['marque'])) {
            $errors[] = 'erreur : le champ marque est requis ! ';
        }
        if (!ctype_alpha($_POST['marque'])) {
            $errors[] = 'erreur : le champ marque ne doit contenir que des lettres';
        }
        if (empty($_POST['modele'])) {
            $errors[] = 'erreur : le champ modèle est requis ! ';
        }
        if (count($errors) === 0) {
            $voituresManager = new VoituresManager();
            $voituresManager->insert($voiture);
//            var_dump($voiture);
//            die();
            header('Location: /exam_final_php_poo_tarik/index.php?controller=default&action=home');
        } else {
            require('view/insertForm.php');
        }
    }

    public function delete($id)
    {
        $voituresManager = new VoituresManager();
        $voituresManager->delete($id);
        header('Location: /exam_final_php_poo_tarik/index.php?controller=default&action=home');
    }

    public function getThisById($id){
        $voituresManager = new VoituresManager();
        $voiture = $voituresManager->select($id);
        require ('view/details.php');
    }


    public function updateForm($id)
    {
        $voituresManager = new VoituresManager();
        $voiture = $voituresManager->select($id);
        require ('view/updateForm.php');
    }

    public function updateVoiture($id)
    {
        $errors = [];
        $voituresManager = new VoituresManager();
        $voiture = $voituresManager->select($id);
        $voiture = new Voitures($id, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['boite_auto'],$_FILES['picture']);
//        var_dump($voiture);
//        die();
        if(isset($_FILES['picture'])) {
            $upload = $this->uploadImage($_FILES['picture']);
            if (count($upload['errors']) === 0){
                $voiture->setPicture($upload['picture']);
            }
            else{
                $errors[] = $upload['errors'][0];
            }
        }
        if (empty($_POST['marque'])) {
            $errors[] = 'erreur : le champ marque est requis ! ';
        }
        if (!ctype_alpha($_POST['marque'])) {
            $errors[] = 'erreur : le champ marque ne doit contenir que des lettres';
        }
        if (empty($_POST['modele'])) {
            $errors[] = 'erreur : le champ modèle est requis ! ';
        }
        if (count($errors) === 0) {
            $voituresManager = new VoituresManager();
            $voituresManager->update($voiture);
//            var_dump($voiture);
//            die();
            header('Location: /exam_final_php_poo_tarik/index.php?controller=default&action=home');
        } else {
            require('view/updateForm.php');
        }

    }

}