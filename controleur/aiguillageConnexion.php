<?php

$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];
require_once "../modele/modele.php";
$bool = connexionSite($pseudo,$mdp);

if($bool == true){
    session_start();
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['mdp'] =$mdp ;
    require_once "../vue/accueil.php";
}
else{
    require_once "../vue/accueil.php";
}

?>