<?php
include './include/header.php';
?>

<div class="field">

<fieldset class="connect">
    <legend>Connexion</legend>
    <form action="./connect_exe.php" method="POST">

    <label for="pseudo">Nom d'utilisateur</label>
    <input type="text" name="pseudo" id="usname">

    <label for="password">Mot de Passe</label>
    <input type="password" name="password">

    <button type="submit" name="submit">Connexion</button>

    </form>
</fieldset>

</div>
<?php
include './include/footer.php';
?>