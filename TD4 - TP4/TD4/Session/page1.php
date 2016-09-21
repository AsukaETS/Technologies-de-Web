


<?php

session_start() ;
if (isset($_SESSION['Nom']) && ($_SESSION['Prénom']) && ($_SESSION['Age'])) {
    $chaine = "<p>Bonjour ".$_SESSION['Nom']." ".$_SESSION['Prénom']." vous avez ".$_SESSION['Age']." ans !</p>";
}
else {
    $chaine = "<p> Bonjour, il n'y a aucune session d'active. </p>" ;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TD4</title>
    </head>
    <body>
        <?php
           echo $chaine ;  
        ?>
    </body>
</html>