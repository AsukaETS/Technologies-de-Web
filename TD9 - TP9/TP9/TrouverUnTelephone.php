<?php

include ('connexion.php');

// Combien de téléphones dans la table ?
$requete="select count(Num)as n from telephones";
$tab=$connexion->query($requete);
$resultat = $tab->fetchAll(PDO::FETCH_OBJ);
$n=$resultat[0]->n ;

// Choisir un téléphone au hasard
$numChoisi=rand(1, $n) ;

$requete="select * from telephones where num=$numChoisi";
$tab=$connexion->query($requete);
$res = $tab->fetch(PDO::FETCH_ASSOC);

echo json_encode($res) ;




?>