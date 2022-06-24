
<?php
include './include/header.php';
?>

<?php
session_start();
$id = $_GET['id'];
    if(!empty($_POST)){
        
        $pseudo = $_POST['pseudo'];
        $commentaire = $_POST['commentaire'];
        $date = $_POST['date'];
        require "./bdd.php";
        $req = $pdo->prepare(("UPDATE commentaire SET pseudo = ?, commentaire = ?, date = NOW() WHERE id = ?"));
        $req->execute(array($commentaire, $id));
        header('location: ./accueil.php');
    }
?>

<div class="modif">

<fieldset class="connect">
<legend>Modification des commentaire</legend>
    <form action="#" method="POST">

        <label for="commentaire">Nouveau commentaire</label>
        <input type="text" name="commentaire">


        <input type="submit" value="Chargement">
    </form>
</fieldset>
   
</div>

<?php
include './include/footer.php';
?>