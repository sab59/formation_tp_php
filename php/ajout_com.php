<?php
include "./fonction.php";

if(!empty($_POST)){
    $errors = array();

    if(empty($_POST['pseudo'])){
        echo 'Pseudo eronné';

    }elseif(empty($_POST['commentaire'])){
            echo 'Commentaire eronné';
        }

        elseif(empty($_POST['date'])){
            echo 'Date eronnée';
        }
    
    else {
        $pseudo = valid_donnees($_POST['pseudo']);
        $commentaire = valid_donnees($_POST['commentaire']);
        $date = valid_donnees($_POST['date']);

        require "./bdd.php";
        $req = $pdo->prepare("INSERT INTO commentaire SET pseudo = ?, commentaire = ?, date = NOW() ");
        $req->execute([$pseudo, $commentaire]);
        header('location: ./recette.php');

        exit();

    }

}
?>
