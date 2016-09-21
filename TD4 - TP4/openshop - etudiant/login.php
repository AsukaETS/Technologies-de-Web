<?php

	if(isset($_POST) && !empty($_POST))
	{
		//recuperation des données du formulaire
		$login=$_POST['login'];
		$pwd=md5($_POST['pass']);	
		
		//appel au fichier de connexion
		include("connexion_base.php");
		
		//requete
		$sql="SELECT nom, prenom, civilite FROM client WHERE email='$login' and mot_de_passe='$pwd'";
		
		//echo $sql;
		
		//envoi de la requete
		$r=$connexion->query($sql);
				
		if($r->rowCount()>0)
		{
			//le client exite
			
			session_start();
			$res=$r->fetchALL(PDO::FETCH_ASSOC);
			
			foreach($res[0] as $k=>$v)
			{
				$_SESSION[$k]=$v;
			}
			//print_r($_SESSION);			
			
			header('Location:index.php');			
		}		 			
		else {
			
			 echo "<script type=\"text/javascript\">";
	 echo "alert('Mavais compte');";
	 echo "window.history.back();";
	 echo "</script>";	
				
			
		}
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<title>openSHOP : Produit</title>
</head>
<body>

<?php	
	include_once('header.php');	
	
	
?>

<section>
		
		<header>	<h2>Identification</h2></header>
		<form id="login" action="login.php" method='post'>
				<p>
						<label>email</label>
						<input type="text" name="login" maxlength="250" />
				</p>
				<p>
						<td>Mot de passe</td>
						<input type="password" name="pass" maxlength="10" />
				</p>
				<p>
						<input type="submit" value="valider" />
				</p>
			</form>
		<!--
		<?php
			echo $probleme;
		?>-->
			
</section>
<?php
	include_once('footer.php');
?>

</body>
</html>