<?php include "connexion.php" ;


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
        
        
                    <h1><a href="index.php"><img src="img/logo.png" alt="la coursive la rochelle"></a></h1>
                    
        </header>
        
        <main>
            
            <h2>La saison</h2>
            
            <section class="fondRouge">
                
                <!--Formulaire de séléction des types de spectacles -->
                <p><label for="type" id="type">Types de spectacles :</label>
                        <select name="type" id="type">
                            <?php
                            echo "<option value='0' selected='selected'>Tous les spectacles</option>";
                            $requete="SELECT * FROM typespectacle";
                            $rep=$connexion->query($requete);
                            $info=$rep->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($info as $element) {
                                echo "<option value='".$element['idSpec']."'>".$element['type']."</option>";
                            }
                            ?>
                        </select>
                    </p>
        
<?php
//Création de l'array
$month = array(
 1 => 'Janv.',
 2 => 'Févr.',
 3 => 'Mars',
 4 => 'Avr',
 5 => 'Mai',
 6 => 'Juin',
 7 => 'Juill.',
 8 => 'Août',
 9=> 'Sept.',
 10=> 'Oct.',
 11 => 'Nov.',
 12 => 'Déc.'
);
echo "<ul>" ;
//On parcours l'array en affichant chaque case 
foreach ($month as $element)
{
    echo "<li><a href='#'>".$element."</a></li>" ;
}
echo "</ul>" ;
?>
            </section>
            
            <ul class="liste">
                     
            <?php
           $requete="SELECT * FROM spectacle";
                    $rep=$connexion->query($requete);
                    $info=$rep->fetchAll(PDO::FETCH_OBJ);
                    foreach ($info as $element) {
                    echo
                        "<li> <p class = 'fondRouge'> Date : ".$element->date."</p>",
                        "<p> <img src='".$element->photos."' alt='Photo spectacle'></p>",
                        "<h3 class='rouge' nom='".$element->nom."'>".$element->nom." ".$element->compagnie."</h3>",
                        "<h4>". $element->type. "</h4>",
                        "<p>".$element->description. "</p>",
                        "<p><a href='spectacle.php?id='".$element->id."> <img src='plus.png' alt='plus'/></a></p>"
                                
                        ;} 
            ?>
            
            </ul>
            
        </main>
        
        
        
        
        
        
        
        
    </div>



</body>
</html>
