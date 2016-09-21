<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
	<title>Formulaire</title>
</head>

<body>
<form id="formulaire" method="POST" action="FormulaireAdresse.php">
    <fieldset id="credentials">
        <legend>Nomnomnom</legend>
          <label for="edtNom" id="idNom">Nom*</label>
          <input type="text" id="edtNom" name="nom" accesskey="P" required />
          <label for="edtPrenom" id="idPrenom">prenom*</label>
          <input type="text" id="edtPrenom" name="prenom" accesskey="N" required />
          <label for="edtAge" id="idAge">E_Mail*</label>
          <input type="text" id="edtmail" name="mail" required />
     <ul>
              
    </fieldset>
    <p class="submit">
      <input type="submit" id="btnSubmit" value="Suivant" name="send"/>
      <input type="reset" id="btnReset" value="Annuler" />      
    </p>
    <p class="note">* information obligatoire</p>
</form> 


</body>
</html>