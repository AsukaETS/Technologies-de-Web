<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
    <title>Newsletter</title>
      
</head>
<body>
    <form id = "formulaire" method="POST" action = "traitement.php">
    <fieldset id="credentials">
        <legend>Informations </legend>
          <label for="edtNom" id="idNom">Votre prénom* </label>
          <input type="text" id="prénom" name="prénom"required />
          <label for="mail" id=idmail> Votre adresse mail*</label>
          <input type="email" id = mail name = mail required />
        
        
          <input type="submit" id="btnSubmit" value="Envoyer" name="send" />
    </fieldset>
        <p> * Champs obligatoires </p>
    </form>
    
    
</body>
</html>