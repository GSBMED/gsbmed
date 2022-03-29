<?php

 // inclusion du modèle
 require_once "../modele/modeleMed.php";
 // recherche des employés : appel de la fonction getEmployes du modèle
 $medicaments = getMedicaments();

 // inclusion du fichier d'affichage des employés de la vue
 require_once "../vue/listeMed.php";

?>