<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Transfert</title>

</head>

<body>
    <form id="formulaire" method="POST" enctype="multipart/form-data" action="">
        <fieldset id="credentials">
            <legend>Transfert de fichier</legend>
            <label for="edtNom" id="idNom">Fichier</label>
            <input type="file" id="fichier" name="fichier" accesskey="P" required />
            <input type="submit" id="btnSubmit" value="Envoyer" name="send" />
        </fieldset>
    </form>
    <?php
if(isset($_POST["send"])) {
    if (preg_match("#^jpg#",$_FILES["fichier"]["type"])) {
        echo"L'image est un .jpg" ;
    }
    else {
        echo "L'image n'est pas un .jpg" ;
    }
}

        
?>
</body>

</html>