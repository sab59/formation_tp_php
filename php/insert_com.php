<?php
include "./include/header.php";
?>
<div class="field">
<fieldset class="connect">
    <legend>Ajout d'un nouveau commentaire</legend>
    <form action="./ajout_com.php" method="POST">

        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" id="name" required>

        <label for="commentaire">Commentaire:</label>
        <input type="text" name="commentaire" id="text" required>


        <button type="submit">Ajouter un nouveau commentaire</button>
    </form>
</fieldset>
</div>


<?php
include "./include/footer.php";
?>