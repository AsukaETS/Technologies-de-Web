<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<title>openSHOP : Categorie</title>
</head>
<body>

<?php	
	include_once('header.php');	
	include_once('connexion_base.php');	
	include_once('utile.php');
	
?>

<section>
			<header><h2>Catégorie <span class="ss-titre">n° <?php if( isset($_GET['cat']) ) echo $_GET['cat']; ?></span></h2></header>
			<ul id="product-list">
				
				<?php
					if ( !empty($_GET['cat']) ) {
					
						$q = $_GET['cat'];
						
						if ($q == "all") {
							$requete = "SELECT * FROM article " ;
						}
						else {
							$requete = "SELECT * FROM article WHERE id_categorie = " . $q ;
						}
						$req = $connexion->query($requete);
						
						
							$i = 1;
							while ( $row = $req->fetch(PDO::FETCH_ASSOC) ) {
								echo '<li class="product"><article>' . "\n";
								echo "		<h3>" . $row["designation"] . "</h3>" . "\n";
								echo '		<p><img src="' . $row["img_article"] . '" alt="' . $row["designation"] . '" />' . "</p>\n";
								echo "		<p><strong>" . $row["prix"] . " &euro;</strong>" . "</p>\n";
								echo "		<p>" . tronquer_texte($row["description"]) . "</p>" . "\n";
								echo '		<p><a href="vue_produit.php?article=' . $row["id_article"] . '">Voir les détails...</a>' . "</p>\n";
								echo "</li></article>" . "\n";
							
							}
						}
					
					else {
						echo "<p>Préciser la catégorie voulue.</p>";
					}
				?>
				</ul>
			
</section>
<?php
	include_once('footer.php');
?>

</body>
</html>