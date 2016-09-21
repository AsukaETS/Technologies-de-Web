<?php
include('connexion.php') ;

$n = $_GET['n'] ;

$requete="select Nom from telephones where num=$n";
$tab=$connexion->query($requete);
$resultat = $tab->fetchAll(PDO::FETCH_OBJ);
$nom = $resultat[0]->Nom ;

echo $nom ;

?>