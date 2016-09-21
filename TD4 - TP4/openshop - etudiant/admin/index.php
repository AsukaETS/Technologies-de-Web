<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="style/styleAdmin.css" rel="stylesheet" type="text/css" />
	<title>Admin - SiteWebShop</title>

	</head>
<body>

<?php 
	/* -- Inclusion du fichier de connexion à la bdd, du fichier regroupant toutes les fonctions et le header -- */
	require_once("../connexion_base.php");
	
	
	
	?>
	
	
<?php

if (isset($_POST["envoyer"]))
{


//Différents fonctions sur les champs reçu du formulaire
if(isset($_POST['nom'])!=null) { $nom = $_POST['nom']; } else $nom = "";

if(isset($_POST['desc'])!=null) { $desc = $_POST['desc']; } else $desc = "";

if(isset($_POST['cat'])!=null) { $cat = $_POST['cat']; } else $cat = "";

if(isset($_POST['prix'])!=null) { $prix = $_POST['prix']; } else $prix = "";

if(isset($_POST['tva'])!=null) { $tva = $_POST['tva']; } else $tva = "";

if(isset($_FILES['img']['name'])!=null) { $img = $_FILES['img']['name']; } else $img = "";
	
	//Si aucun des champs n'est vide
	
	if($nom!=""&&$desc!=""&&$cat!=""&&$prix!=""&&$tva!=""&&$img!="")
	{
		//On récuprer le nom complet du fichier image
		$nomOrigine = $_FILES['img']['name'];
	
		//Destination du fichier à copier sur le serveur
		$repertoireDestination = "../images/magasin/";

		//Si le fichier à bien été déplacé
			if (move_uploaded_file($_FILES["img"]["tmp_name"], $repertoireDestination.$nomOrigine)) {
				
				//On sélectionne cette article dans la bdd
				$request = "	SELECT * 
						FROM article 
						WHERE Designation= '$nom' 
						AND id_categorie= '$cat' 
						AND description= '$desc' 
						AND img_article= './images/magasin/$nomOrigine';";
				$query = mysql_query($request);
				//Si il n'existe pas
				if(!mysql_fetch_array($query))
				{
					//On l'ajoute
					$request = "INSERT INTO article VALUES('', '$cat', '$nom', '$prix', '$tva', '$desc', './images/magasin/$nomOrigine');";
					mysql_query($request);
					echo "Nouvelle article créé";
					//Et on affiche cette article
					$request = "	SELECT * 
							FROM article 
							WHERE Designation= '$nom' 
							AND id_categorie= '$cat' 
							AND Prix= '$prix'
							AND TVA='$tva' 
							AND description= '$desc' 
							AND img_article= './images/magasin/$nomOrigine';";
					
				}
				else echo "Il y a déjà un article possédant ces champs !";
			} 
			else 
			{
				echo "Le fichier n'a pas été uploadé (trop gros ?) ou le déplacement du fichier temporaire a échoué"." vérifiez l'existence du répertoire ".$repertoireDestination;
			}
		
		
	}
	else
	{
		echo "<p> Certains champs sont vides </p>";
}
}
else
{
 $nom = "";
$desc = "";
 $cat = "";
 $prix = "";
$tva = "";
$img = "";


}



?>	
<div id="container">
<h1> Administration du site OpenShop</h1> 
<h2>Ajout d'article</h2>
<form action="" method="POST" id="admin" enctype="multipart/form-data" >
					<fieldset>
					<legend>Ajout d'un article</legend>
					<p>
					<label>Designation :</label>
					<input type="text" name="nom" class="pos_input" value="<?php echo $nom ?>"/>
					</p>
										
					<p>
					<label>Description :</label>
					<input type="text" name="desc" class="pos_input" value="<?php echo $desc ?>"/>
					</p>
					
					<p><label>Catégorie : </label>
					<select name="cat" class="pos_input">
					<?php
						//Récupération des catégories et affichage
						$request = "	SELECT *
								FROM categorie";
						$query = mysql_query($request);
						while($result = mysql_fetch_array($query, MYSQL_ASSOC))
						{
							echo "<option value='".$result['id_categorie']."'>".$result['nom']."</option>";
						}
					?>
					</select></p>
					
					<p>
					<label>Prix :</label>
					<input type="text" name="prix" class="pos_input" value="<?php echo $prix ?>"/>
					</p>
					
					<p>
					<label>TVA :</label>
					<input type="text" name="tva" class="pos_input" value="<?php echo $tva ?>"/>
					</p>
					
					<p>
					<label>Image :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" >
					<input type="file" class='pos_input' name="img" size='17'  value="<?php echo $img ?>">
					</p>
					</fieldset>
					<p><input type="submit" class="submit" value="Envoyer" name="envoyer" /></p>
				
				</form>




<h2>Ajout d'article par fichier XML</h2>
</div>	

</body>
</html>