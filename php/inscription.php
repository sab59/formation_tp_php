<?php


        if(!empty($_POST)){
            $errors = array();

            if(empty($_POST['pseudo'])){
                echo `Veuillez indiquer votre nom d'utilisateur`;
            }

            elseif(empty($_POST['nom'])){
                echo `Veuillez indiquer votre nom`;
            }

            elseif(empty($_POST['prenom'])){
                echo `Veuillez indiquer votre prénom`;
            }

            elseif(strlen($_POST['password']) < 8){
                echo `Votre mot de passe doit contenir au moins 8 caractères`;
            }

            elseif(empty($_POST['password'])){
                echo `Veuillez indiquer votre mot de passe`;
            }

            elseif(($_POST['password']) != ($_POST['confirm_pass'])){
                echo `Votre mot de passe la confirmation du mot de passe doit être identique`;
            }


        else {
            include './fonction.php';
            $pseudo = valid_donnees($_POST['pseudo']);
            $nom = valid_donnees($_POST['nom']);
            $prenom = valid_donnees($_POST['prenom']);

            require "./bdd.php";
            $req = $pdo->prepare("INSERT INTO membre SET pseudo = ?, nom = ?, prenom = ?, password = ?");
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $req->execute([$pseudo, $nom, $prenom, $password]);
            header('location: ./recette.php');

        exit();
        }}

        else{
            echo `il y a une erreur`;
        }

?>