<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: ./espace_membre.php");
?>