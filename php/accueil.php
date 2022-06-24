<?php
include './include/header.php';
?>

<div class="title">
        <h2>Nos dernières créations :</h2>
    </div>
   <section class="gallerie">
        <div class="gallerie_card">
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img1"><img id="img1" src="../img/img1.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Rainbow cake</h3>
                </div>
            </div>
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img2"><img id="img2" src="../img/img2.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Wedding cake</h3>
                </div>
            </div>
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img3"><img id="img3" src="../img/img3.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Gâteau Lego</h3>
                </div>
            </div>
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img4"><img id="img4" src="../img/img4.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Gâteau anniversaire 18 ans</h3>
                </div>
            </div>
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img5"><img id="img5" src="../img/img5.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Gâteau Oréo</h3>
                </div>
            </div>
            <div class="card">
                <a href="./recette.php">
                    <div class="card_img6"><img id="img6" src="../img/img6.PNG" alt=""></div>
                </a>
                <div class="text">
                    <h3>Gâteau Licorne</h3>
                </div>
            </div>
        </div>
   </section>

<div class="avis">
    <div class="title">
        <h2>Vos avis :</h2>
    </div>
    <div class="field">
<fieldset class="connect">
    <table cellspacing="20">
        <tr> <th>Pseudo</th> <th>Commentaire</th> <th>Date</th></tr>

        <?php
            require "./bdd.php";
            $req = $pdo->query("SELECT * FROM commentaire");
            while($data = $req->fetch()){

                echo "<tr> <td>$data->pseudo</td><td>$data->commentaire</td><td>$data->date</td>";
                echo "<td>";
                echo "<a href='./modif_com.php?id=$data->id' >Modifier </a>";
                echo "<a href='./delete_com.php?id=$data->id' >Supprimer </a>";
                echo "</td></tr>";
            }
        ?>
    </table>

<button><a class="lien" href="./insert_com.php">Insérer de nouveaux commentaires</a>
</button>
</fieldset>
    </div>
    
</div>


<?php
include './include/footer.php';
?>