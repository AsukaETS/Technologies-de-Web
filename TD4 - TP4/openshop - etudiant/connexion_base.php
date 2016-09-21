<?php
	/**
	* fichier connexion_base.php
	*/
	
	$PARAM_hote='localhost'; // le chemin vers le serveur
$PARAM_nom_bd='sitewebshop'; // le nom de votre base de données
$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
$PARAM_mdp=''; // mot de passe de l'utilisateur pour se connecter

try
{
        
        $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mdp);
}
catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
	
?>