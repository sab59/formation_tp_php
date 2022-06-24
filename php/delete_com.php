<?php
session_start();

$id = $_GET['id'];

require "./bdd.php";

$req = $pdo->prepare("DELETE FROM commentaire WHERE id = ?");

$req->execute(array($id));

exit(header('location: ./accueil.php'));

?>