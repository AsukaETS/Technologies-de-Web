<?php 

setcookie("LeCookieQuiNeSeMangePas",365*60*60*24 ) ; 

include "connexion.php"

?>


<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="wrap">
        
        
        <header>
            <nav>
               <ul>
                    <?php
                    
                    //On récupère le nom dans type spectacle
                    $requete="SELECT * FROM typespectacle";
                    $rep=$connexion->query($requete);
                    $info=$rep->fetchAll(PDO::FETCH_OBJ);
                    foreach ($info as $element) {
                    echo "<li><a href='#'>".$element->type."</a></li>"; } ?>
             </ul>
            </nav>
            <h1><a href="index.html"><img src="img/logo.png" alt="la coursive la rochelle"></a></h1>
            
        </header>
        
        <main>

            
            <?php
// On teste la déclaration de notre cookie
if (isset($_COOKIE['LeCookieQuiNeSeMangePas']))
{
echo "<p>Ce spectacle vous intéresse ?
Commandez vos places en téléphonant au 05 46 51 54 00</p>";
}

?>

           
            
            
            
        </main>
        
        
        
        
        
        
        
        
    </div>



</body>
</html>
