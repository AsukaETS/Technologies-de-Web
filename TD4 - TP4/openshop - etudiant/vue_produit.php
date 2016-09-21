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
	include_once('connexion_base.php');	
	include_once('utile.php');
	
?>

<article id="detail-produit">
			<?php
				if ( !empty($_GET['article']) ) {
				
					$article = $_GET['article'];
					$requete = "SELECT * FROM article WHERE id_article = " . $article;
					$req = $connexion->query($requete);
				

					if ( $req->rowCount()>0 ) {
					
						$row = $req->fetch(PDO::FETCH_ASSOC) ;
						
						
						echo '	<header><h2>' . $row["designation"] . '</h2></header>';
						echo '	<img src="' . $row["img_article"] . '" alt="' . $row["designation"] . '" />' . "\n";
						echo "	<p>" . $row["description"] . "</p>" . "\n";
						echo "	<p><strong>" . $row["prix"] . " &euro;</strong>" . "\n</p>";
					
		}
			?>
			<form id="form-produit" action="panier.php" method="post">
				<p>
					<label for="qte">Quantité : </label>
					<select id="qte" name="qte">
						<option value="1" selected="selected">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<input name="id-article" type="hidden" value="<?php echo $article; ?>" /> 
					<input value="Ajouter au panier" type="submit" name="send" />
				</p>
		    </form>
			
						
			<?php		
}		else {
						echo '<div id="empty-cart">Erreur !</div>';
					}
				
			?>
			
			
</article>
<?php
	include_once('footer.php');
?>

</body>
</html>