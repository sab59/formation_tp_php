<?php
include './include/header.php';
?>
<div class="field">
<fieldset class="connect">
<legend>Nouvelle Inscription :</legend>

    <form action="./inscription.php" method="POST">
        <label for="pseudo">Nom d'utilisateur</label>
        <input type="text" name="pseudo" id="usname" required>

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="name" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="lastname" required>

        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="uspass" required>

        <label for="confirm_pass">Confirmez le Mot de Passe</label>
        <input type="password" name="confirm_pass" id="confpass" required>

        <button type="submit">Inscription</button>
    </form>
</fieldset>
</div>


<br>

<div class="field">
<fieldset class="connect">
    <legend>Déjà inscrit ?</legend>
    <button><a class="lien" href="./connexion.php">connexion</a></button>
</fieldset>
</div>


<?php
    include './include/footer.php'
?>