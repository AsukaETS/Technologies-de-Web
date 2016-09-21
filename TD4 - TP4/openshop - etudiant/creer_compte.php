<?php

//inclusion fichiers
	include_once('connexion_base.php');	
	include_once('utile.php');
	

$probleme="";

//Traitement des variables POST
if(isset($_POST['email'])!=null) {
	if(VerifierAdresseMail($_POST['email']))
	{
		$email = stripSlashes(htmlEntities($_POST['email']));
	}
	else 
	{
		$probleme="<p>Email incorrect</p>";
		$email = stripSlashes(htmlEntities($_POST['email']));
	}
		
	
}
else $email = "";

if(isset($_POST['pass'])!=null) { $pass = md5(addslashes(htmlEntities($_POST['pass']))); }
else $pass = "";

if(isset($_POST['civilite'])!=null) { $civilite = addslashes(htmlEntities($_POST['civilite'])); }
else $civilite = "";

if(isset($_POST['nom'])!=null) { $nom = addslashes(htmlEntities($_POST['nom'])); }
else $nom = "";

if(isset($_POST['prenom'])!=null) { $prenom = addslashes(htmlEntities($_POST['prenom'])); }
else $prenom = "";

if(isset($_POST['adresse'])!=null) { $adresse = addslashes(htmlEntities($_POST['adresse'])); }
else $adresse = "";

if(isset($_POST['cp'])!=null) { $cp = addslashes(htmlEntities($_POST['cp'])); }
else $cp = "";

if(isset($_POST['ville'])!=null) { $ville = addslashes(htmlEntities($_POST['ville'])); }
else $ville = "";

if(isset($_POST['pays'])!=null) { $pays = addslashes(htmlEntities($_POST['pays'])); }
else $pays = "";

if(isset($_POST['tel'])!=null) { $tel = addslashes(htmlEntities($_POST['tel'])); }
else $tel = "";

//Si aucun champs n'ait vide et si aucun pb
if($email!=""&&$pass!=""&&$civilite!=""&&$nom!=""&&$prenom!=""&&$adresse!=""&&$cp!=""&&$ville!=""&&$pays!=""&&$tel!=""&&$probleme=="")
{
	//verification si le mail n'est pas deja dans la base
	if (!MailDansBase($email))
	{

	//On ajoute à la bdd le client
	$request = "INSERT INTO client VALUES('', '$email', '$pass', '$civilite', '$nom', '$prenom', '$adresse', '$cp', '$ville', '$pays', '$tel', 0);";
	$req=$connexion->exec($request);
	//echo "<p>Insertion</p>";
	
	
	
	//Fonction d'envoie du mail
	//mail($email, "Inscription sur SiteWebShop", "Vous venez de vous inscrire sur le site SiteWebShop, Merci pour votre confiance !");
	
	header("Location:login.php");
	}
	else
	{
		$probleme="<p>Cette adresse mail est déja dans la base de données</p>";
		$email="";
	}
	
}
else 

{
	if($email=="" OR $pass=="" OR $civilite=="" OR $nom=="" OR $prenom=="" OR $adresse=="" OR $cp=="" OR $ville=="" OR $pays=="" OR $tel=="")
	{
		//Si vous n'avez pas remplis tous les champs
		$probleme="<p>Veuillez remplir tous les champs !</p>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<title>openSHOP : Creer compte</title>
</head>
<body>

<?php	
	include_once('header.php');	
	
?>
	<section>
			<header><h2>Créer un compte</h2></header>
			
				
	<form action="creer_compte.php" method="post" id="creer-compte" >
		<p>
			<label>E-Mail :</label>
			<input type="text" name="email" class="<?php if(isset($_POST['email'])&&$email=="") echo "pos_input_vide"; else echo "pos_input"; ?>"
											value="<?php echo $email; ?>" />
		</p>
		
		<p>
			<label>Mot de Passe : </label>
			<input type="password" name="pass" class="<?php if(isset($_POST['pass'])) echo "pos_input_vide"; else echo "pos_input"; ?>"	/>
		</p>
		
		<p>
			<label>Civilité : </label>
			<select name="civilite" class="pos_input">
				<option value="Mr" <?php if($civilite=='Mr') echo "selected=\"selected\" "; ?> >Monsieur</option>
				<option value="Mme" <?php if($civilite=='Mme') echo "selected=\"selected\" "; ?> >Madame</option>
				<option value="Mlle" <?php if($civilite=='Mlle') echo "selected=\"selected\" "; ?> >Mademoiselle</option>
			</select>
		</p>
		<p>
			<label>Nom : </label>	
			<input type="text" name="nom" class="<?php if(isset($_POST['nom'])&&$nom=="") echo "pos_input_vide"; else echo "pos_input"; ?>" 
										 value="<?php echo $nom; ?>" />
		</p>
	
		
		<p>
			<label>Prenom : </label>
			<input type="text" name="prenom" class="<?php if(isset($_POST['prenom'])&&$prenom=="") echo "pos_input_vide"; else echo "pos_input"; ?>"
											value="<?php echo $prenom; ?>" />
		</p>
		 
		<p>
			<label>Adresse : </label>
		
		<input type="text" name="adresse" class="<?php if(isset($_POST['adresse'])&&$adresse=="") echo "pos_input_vide"; else echo "pos_input";?>"
										value="<?php echo $adresse; ?>" />
		</p>
		<p>
			<label>Code Postal : </label>
		
			<input type="text" name="cp" class="<?php if(isset($_POST['cp'])&&$cp=="")  echo "pos_input_vide"; else echo "pos_input";?>"
										value="<?php echo $cp; ?>" />
		</p>
		<p><label>Ville : </label>
		 
		<input type="text" name="ville" class="<?php if(isset($_POST['ville'])&&$ville=="") echo "pos_input_vide"; else echo "pos_input";?>"
							value="<?php echo $ville; ?>" />
		</p>
		<p>
			<label>Pays : </label>
			<!--<select name="pays" class="pos_input">
				<?php
					// $request = "SELECT fr FROM pays";
					// $query = mysql_query($request);
					// while($result = mysql_fetch_array($query, MYSQL_ASSOC))
					// {
					// echo "<option ";
					// if($result['fr']==$pays)echo "selected=\"selected\" ";
						// echo ">".$result['fr']."</option>";
					// }
				?>
		</select>-->
		
		<input type="text" name="pays" class="<?php if(isset($_POST['pays'])&&$pays=="") echo "pos_input_vide"; else echo "pos_input";?>"
							value="<?php echo $pays; ?>" />
		</p>
		
		
		<p>
			<label>Téléphone : </label>
		
			<input type="text" name="tel"  class="<?php if(isset($_POST['tel'])&&$tel=="") echo "pos_input_vide"; else echo "pos_input";?>"
											value="<?php echo $tel;?>" />
		</p>		
		
		<p><input type="submit" class="submit" value="Envoyer" /></p>
	
	</form>

<?php 
	echo $probleme;
?>
	
			
	</section>

	<?php include_once("footer.php"); //Inclusion du footer ?>

</body>
</html>