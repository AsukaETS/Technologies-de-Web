<?php
session_start();
	//Si le panier n'existe pas on le créé
	if (!isset($_SESSION['panier']) ) {
		$_SESSION['panier'] = array();
	}
		
	//On recoit des données de la page vue_produit
	

if (isset($_POST['send']))
{
    if(isset($_POST["id-article"]) && isset($_POST["qte"]) ) 
	{
		$article = array("id-article"=>$_POST["id-article"], 
						 "qte"=>$_POST["qte"]);
		
				
		array_push($_SESSION['panier'], $article);
	}
    header("location:panier.php");  /*eviter les problèmes liés au rechargement de la page */
}
	
	
	
	
?>


<!DOCTYPE html>
<html>
<head>
<title>Panier</title>
<meta charset="utf-8" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<link href="style/supp.css" rel="stylesheet" type="text/css" />

</head>
<body>


<?php	
	include_once('header.php');	
	include_once('utile.php');
	include('connexion_base.php');
	
?>


	<section>
		<header><h2>Mon panier</h2></header>
		
			
			<?php
$total_achat = 0;
				if( (count($_SESSION['panier'])!=0) ) {
					
			?>
		    <table id="cart-table">
				<thead>
				<tr>
					<th>désignation</th>
					<th>quantité</th>
					<th>prix unitaire</th>
					<th>prix total</th>
					<th>supprimer</th>
				</tr>
				</thead>
				<tbody>
				<?php
				
				
								
				    
					foreach ($_SESSION['panier'] as $element) {
						$requete = "SELECT designation,prix  FROM article WHERE id_article = " . $element['id-article'];
						echo $requete;
						
						$req =$connexion->query($requete);
						
						$row =$req->fetch(PDO::FETCH_ASSOC) ;
						
						echo '<tr>' . "\n";
						echo '	<td>' . $row["designation"] . '</td>';
						echo '	<td>' . $element["qte"] . '</td>';
						echo '	<td>' . $row["prix"] . ' &euro;</td>';
						
						$total_article = ($row["prix"] * $element["qte"]);
						
						echo '	<td>' . $total_article . ' &euro;</td>';
						echo '<td><a href="panier.php?sup=' . $element['id-article'] . '"><img src="images/bin.png" alt="a la poubelle" /></a></td>';
						echo "</tr>" . "\n";	
						
						$total_achat += $total_article;
					}
			
			?>
			</tbody>
		    </table>
			<p id="total-achat">
				Prix total HT : <strong><?php echo round($total_achat, 2) . " &euro;" ; ?></strong><br />
				TVA : <strong>	<?php
									$tva = round(( $total_achat * 0.196), 2);
									echo $tva . " &euro;" ;
								?></strong><br />
				Prix total TTC : <strong>	<?php
									$ttc = round( ($total_achat + $tva), 2);
									echo $ttc . " &euro;" ;
								?></strong>
			</p>
			<form id="form-panier" action="commande.php" method="post" enctype="multipart/form-data">
				<p>
					<input value="Valider votre commande »" type="submit"  />
				</p>
		    </form>
			<?php
			
				} else {
					
			?>
						
			
			<div id="empty-cart">
				<p><img src="images/poubelle.png" alt="vide" /></p>
				<p>Votre panier est vide</p>
			</div>
			
			<?php
				} 
					
			?>
			
			

	</section>

<?php
	include_once('footer.php');
?>

</body>
</html>