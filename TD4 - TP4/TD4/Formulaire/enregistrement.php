<?php 
session_start() ;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TD4</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <?php
if (isset($_SESSION['nom']) && ($_SESSION['prenom']) && ($_SESSION['mail']) && ($_POST['adresse']) && ($_POST['codepostal']) && ($_POST['ville'])) {
    $chaine1 = "<p>".$_SESSION['nom']." ".$_SESSION['prenom']."</p>";
    $chaine2 = "<p>".$_SESSION['mail']."</p>" ;
    $chaine3 = "<p>".$_POST['adresse']."</p>" ;
    $chaine4 = "<p>".$_POST['codepostal']." ".$_POST['ville']."</p>" ;
}
else {
   header ("location:traitement.php") ;
}
?>
      
      <?php 
        echo $chaine1 ;
       echo $chaine2 ;
        echo $chaine3 ;
     echo $chaine4 ;
?>
      
      

      </form> 
    </body>
</html>