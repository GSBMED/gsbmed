<?php
require_once "../modele/modeleMed.php";
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$adresse = $_POST['adresse'] ;
$telephone = $_POST['telephone'] ;

$pseudo = $_POST['pseudo'] ;
$mdp = $_POST['mdp'] ;

inscriptionSite($nom,$prenom,$adresse,$telephone ,$pseudo,$mdp );
require_once "../vue/inscription.php";
?>