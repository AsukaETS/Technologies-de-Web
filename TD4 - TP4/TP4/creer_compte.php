<?php include "utile.php"; ?>
<?php include "connexion.php"; ?>

<?php
    if(isset($_POST['mail']) && ($_POST['mdp']) && ($_POST['nom']) && ($_POST['prenom']) && ($_POST['adresse']) && ($_POST['cp']) && ($_POST['ville']) && ($_POST['pays']) && ($_POST['tel']))
    {
        $mail = $_POST['mail'] ;
        $civ = $_POST['civ'] ;
        $mdp = hash('sha256',$_POST['mdp']) ;
        $nom = $_POST['nom'] ;
        $prenom = $_POST['prenom'] ;
        $adresse = addslashes($_POST['adresse']) ;
        $cp = $_POST['cp'] ;
        $ville = $_POST['ville'] ;
        $pays = $_POST['pays'] ;
        $tel = $_POST['tel'] ;
        
        $test = $connexion->prepare('SELECT COUNT(*) AS nb FROM client WHERE email =:email');
    $test->execute(array('email' => $mail,));
    $result = $test->fetch(PDO::FETCH_OBJ);
    $nb = $result->nb;
    
    if ($nb == 0) {
    $ins = $connexion->prepare('INSERT INTO client(email, mot_de_passe, civilite, nom, prenom, adresse, code_postal, ville, pays, telephone) VALUES (:mail,:mdp,:civ,:nom,:prenom,:adresse,:cp,:ville,:pays,:tel)');
    $ins->execute(array(
        'mail' => $mail,
        'mdp' => $mdp,
        'civ' => $civ,
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'cp' => $cp,
        'ville' => $ville,
        'pays' => $pays,
        'tel' => $tel
        )
        );
        header ('location:login.php') ;
    }
    else {
    echo "<p>Cet email est déjà pris.</p>";
    } 
    }
else {
    $chaine = " " ;
}



?>

<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
  	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<title>SiteWebShop</title>
</head>
<body>
<!-- DEBUT de la page -->
    <?php require "header.php"; ?>
	<section>
				<header><h1>Créer un compte</h1></header>
              <form id="creer-compte" method="POST" action="creer_compte.php">
    <fieldset id="creer-compte"> <p>
        <label for="edtmail" id="idmail">E-mail</label>
        <input  value="<?php if(isset($_POST['mail'])) { echo htmlentities($_POST['mail']);}?>" type="text" id="edtmail" name="mail" required /> </p><p>
        <label for="edtciv" id = "idciv"> Civilité </label>
        <select name="civ"><option>Mr</option><option>Mme</option><option>Mlle</option></select></p><p>
        <label for="edtmdp" id="idmdp">Mot de Passe</label>
        <input type="password" id="edtmdp" name="mdp" required  /></p><p>
        <label for="edtnom" id="idnom">Nom</label>
        <input value="<?php if(isset($_POST['nom'])) { echo htmlentities($_POST['nom']);}?>" type="text" id="edtnom" name="nom" required />  </p><p>
        <label for="edtprenom" id="idprenom">Prénom</label>
        <input value="<?php if(isset($_POST['prenom'])) { echo htmlentities($_POST['prenom']);}?>" type="text" id="edtprenom" name="prenom" required /> </p><p>
        <label for="edtadresse" id="idadresse">Adresse</label>
        <input value="<?php if(isset($_POST['adresse'])) { echo htmlentities($_POST['adresse']);}?>" type="text" id="edtadresse" name="adresse" required /> </p><p>
        <label for="edtcp" id="idcp">Code Postal</label>
        <input value="<?php if(isset($_POST['cp'])) { echo htmlentities($_POST['cp']);}?>" type="text" id="edtcp" name="cp" required /> </p><p>
        <label for="edtVille" id="idVille">Ville</label>
        <input value="<?php if(isset($_POST['ville'])) { echo htmlentities($_POST['ville']);}?>" type="text" id="edtville" name="ville" required /> </p><p>
        <label for="edtpays" id="idpays">Pays</label>
        <input value="<?php if(isset($_POST['pays'])) { echo htmlentities($_POST['pays']);}?>" type="text" id="edtpays" name="pays" required /> </p><p>
        <label for="edttel" id="idVtel">Téléphone</label>
        <input value="<?php if(isset($_POST['tel'])) { echo htmlentities($_POST['tel']);}?>" type="text" id="edttel" name="tel" required /> </p>
    </fieldset>
    <p class="submit">
      <input type="submit" id="btnSubmit" value="Envoyer" name="send" />    
    </p>
      </form> 
	</section>
    <?php require "footer.php"; ?>
</body>
</html>