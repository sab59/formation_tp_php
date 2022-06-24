<div>
    <p>Bienvenue chez nous <br>
    <?php if($_SESSION['user_kind'] == 1){ echo " Cher administrateur tu es au top";} ?><br>
    Que fait tu aujourd'hui?</p>

    <?php
    if($_SESSION['user_kind'] == 1){
        echo '<a href="./gest_membre.php"> Gérer les membres</a>'."<br>";
    }
    ?>


</div>