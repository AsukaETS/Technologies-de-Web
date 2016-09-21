
<?php
include('connexion.php') ;

// Combien de téléphones dans la table ?
$requete="select count(Num)as n from telephones";
$tab=$connexion->query($requete);
$resultat = $tab->fetchAll(PDO::FETCH_OBJ);
$n=$resultat[0]->n ;

// Choisir un téléphone au hazard
$numChoisi=rand(1, $n) ;

echo $numChoisi ;

?>