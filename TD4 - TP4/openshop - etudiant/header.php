<!-- HEADER-->
<header>
	<h1><a href="index.php">Bienvenue sur openSHOP !</a></h1>
	<form id="search" action="recherche.php" method="post" enctype="multipart/form-data">
			<p>
				<input id="searchText" name="query" type="text" value="Rechercher" />
				<input id ="searchBtn" type="submit" class="bouton" value="OK" />
			</p>
		</form>
	<nav id="menu">
	
		<ul>
			<?php
		if(isset($_SESSION['civilite']) && isset($_SESSION['nom'])) 
			echo "<li>Bonjour ".$_SESSION['civilite']." ".$_SESSION['nom']."</li> ";
	?>
	
			<li><a href="index.php">accueil</a></li>
			<li><a href="login.php">login</a></li>
			<li><a href="creer_compte.php">créer compte</a></li>
			<li><a href="panier.php">panier</a></li>
			<li><a href="deconnexion.php">deconnexion</a></li>
		</ul>
	</nav>
	<nav id="menu-categorie">	
		<ul>
			<li class="smenu"><a href="categorie.php?cat=all">tous les produits</a></li>
			<li class="smenu"><a href="categorie.php?cat=1">vetements</a></li>
			<li class="smenu"><a href="categorie.php?cat=2">accessoires</a></li>
			<li class="smenu"><a href="categorie.php?cat=3">posters</a></li>
			<li class="smenu"><a href="categorie.php?cat=4">dvd</a></li>
		</ul>
	</nav>
		
	
</header>