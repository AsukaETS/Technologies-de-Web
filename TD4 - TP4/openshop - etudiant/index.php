<?php
	$sessionActive=0;
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<title>openSHOP : Accueil</title>
</head>
<body>

<?php	
	include('header.php');	
	include_once('connexion_base.php');	
	include_once('utile.php');
	
?>

<section>
			<header>Bienvenue <span class="ss-titre">Nous sommes le <?php echo date("d/m/y"); ?></span></header>
			<p>La boutique en ligne <strong>openSHOP</strong> est un travail réalisé par <em>Thomas Jouannic</em> &amp; <em>Jérome Saunier</em> 
			puis modifié et adapté <strong>au cours de Sites Web Avancés</strong>.</p>
			<p>Dans la partie haute, vous trouverez un moyen pour vous identifiez ou créer un compte si vous n'en n'avez aucun. Le champ de recherche 
			vous permet d'afficher simplement les produits correspondants à ce que vous souhaitez. Vous pouvez aussi naviguer entre les différentes 
			catégorie de produits en cliquant sur celle que vous désirez voir.</p>
			<p>Bonne naviguation !</p>
</section>
		<section id="corps">
			<header><h2>Au hasard...</h2></header>
			<ul id="product-list">
				<?php
						
						
						$requete = "SELECT * FROM article ORDER BY RAND() LIMIT 3";
						$req = $connexion->query($requete);
	
						while ( $row = $req->fetch(PDO::FETCH_ASSOC) ) {
							echo '<li class="product">' . "\n";
							echo "<h3>" . $row["designation"] . "</h3>" . "\n";
							echo '<p><img src="' . $row["img_article"] . '" alt="' . $row["designation"] . '" />' . "</p>\n";
							echo "<p><strong>" . $row["prix"] . " &euro;</strong>" . "</p>\n";
							echo "<p>" . tronquer_texte($row["description"]) . "</p>" . "\n";
							echo '<p><a href="vue_produit.php?article=' . $row["id_article"] . '">Voir les détails...</a>' . "</p>\n";
							echo "</li>" . "\n";
						}
					?>
				</ul>
		</section>

<?php
	include_once('footer.php');
?>

</body>
</html>