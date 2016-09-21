


<?php

session_start() ;
if (isset($_COOKIE['Nom']) && ($_COOKIE['Prénom']) && ($_COOKIE['Age'])) {
    $chaine = "<p>Bonjour ".$_SESSION['Nom']." ".$_SESSION['Prénom']." vous avez ".$_SESSION['Age']." ans !</p>";
}
else {
    $chaine = "<p> Bonjour, IL N'Y A PAS DE COOKIE !!!! QUE DU BROWNIE !!!! </p>" ;
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