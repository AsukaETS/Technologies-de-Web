<?php

include('connexion.php') ;

$n = $_GET['n'] ;

$requete="select Commentaire from telephones where num=$n";
$tab=$connexion->query($requete);
$resultat = $tab->fetchAll(PDO::FETCH_OBJ);
$com = $resultat[0]->Commentaire ;

echo $com ;

?>