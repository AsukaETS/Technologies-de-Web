<?php

include('connexion.php') ;

$n = $_GET['n'] ;

$requete="select Photo from telephones where num=$n";
$tab=$connexion->query($requete);
$resultat = $tab->fetchAll(PDO::FETCH_OBJ);
$photo = $resultat[0]->Photo ;

echo $photo ; 

?>