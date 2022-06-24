<?php

require "./bdd.php";

if(isset($_POST["submit"]))
{
    if(empty($_POST['pseudo']) || empty($_POST['password']))
    {
        echo 'remplissage absent';
    }
    else{
        $query = "SELECT * FROM membre WHERE pseudo = :pseudo LIMIT 1";
        $statement = $pdo->prepare($query);
        $statement-> execute(
            array(
                'pseudo' => $_POST['pseudo']
            )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if(password_verify($_POST['password'], $result['password'])) {
                    session_start();
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    $_SESSION['user_kind'] = $result['user_kind'];
                    exit(header('location: recetteadmin.php'));
                } else{
                    echo 'outch';

                }
            }
            else {
                echo 'aiiiiiie';
            }
    }
}
?>