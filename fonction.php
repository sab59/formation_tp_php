<?php
    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripcslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }
?>