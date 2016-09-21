<?php 
session_start() ;
$_SESSION['nom'] = $_POST['nom'] ;
$_SESSION['prenom'] = $_POST['nom'] ;
$_SESSION['mail'] = $_POST['mail'] ;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TD4</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <form id="formulaire" method="POST" action="enregistrement.php">
    <fieldset id="credentials">
        <legend>Formulaire</legend>
          <label for="edtAdr" id="idAdr">Adresse*</label>
          <input type="text" id="edtAdr" name="adresse" required />
          <label for="edtCP" id="idCP">Code Postal*</label>
          <input type="text" id="edtCP" name="codepostal" required  />
          <label for="edtVille" id="idVille">Ville*</label>
          <input type="text" id="edtVille" name="ville" required />        
    </fieldset>
    <p class="submit">
      <input type="submit" id="btnSubmit" value="Envoyer" name="send" />
      <input type="reset" id="btnReset" value="Annuler" />      
    </p>
      </form> 
    </body>
</html>