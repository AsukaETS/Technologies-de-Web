<?php include "srilanka.php" ; ?>
<?php include "fonction.php" ; ?>

<?php
$resultat = $srilanka;

if(isset($_POST["send"])) {
    if (!empty($_POST["nom"]) && !empty($_POST["lat"]) && !empty($_POST["long"]) && !empty($_POST["pop"])) {
        $nom = $_POST["nom"] ;
        $lat = $_POST["lat"] ;
        $long = $_POST["long"] ;
        $pop = $_POST["pop"] ;
        
        $array = array("$nom" => array("lat"=>$lat, "long"=>$long, "pop"=>$pop)) ;
        array_push ($srilanka, $array[1]) ;

    }
    else {
        echo "<script type=\"text/javascript\">" ;
        echo "alert('Complétez tous les champs');" ;
        echo "windows.history.back();" ;
        echo "</script>" ;
    }
}
else {
    header ("index.php") ;
}
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>TP1</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <?php

        /**************************************************************************************************/
        /***************************************EXERCICE 1*************************************************/
        /**************************************************************************************************/
       
        echo "<h2>Tableau et affichage en HTML.</h2>";
        $clients=array(
                        array("Leparc", "Paris", 35),
                        array("Durox", "Bordeaux", 22),
                        array("Dupont", "Nantes", 27)
            );
          echo "<table>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Age</th>
            </tr>" ;

            $i = 0 ;
            foreach ($clients as $client) {
                echo "<tr><td>" ;
                echo $i; $i++ ;
                echo "</td>" ;
                foreach ($client as $element) {
                    echo "<td>" ;
                    echo $element ;
                    echo "</td>" ;
                }
            echo "</tr>" ;
            }
        echo "</table>" ;

        /**************************************************************************************************/
        /***************************************EXERCICE 2*************************************************/
        /**************************************************************************************************/

        
        echo "<h2>Tableau associatif</h2>";
        $departements = array ( "17" => "Charente-Maritime",
                                 "78" => "Yvelines",
                                 "01" => "Ain",
                                 "85" => "Vendéee" );
        $departements["33"] = "Gironde";
        ksort($departements); //Trie le tableau suivant les clefs
        foreach ($departements as $key  => $element) {
            echo "<p>Le numéro du département de ".$element." est ".$key."</p>";
        }

        /**************************************************************************************************/
        /***************************************EXERCICE 3*************************************************/
        /**************************************************************************************************/


        echo "<h2> Tableau associatif 2</h2>";
        //print_r($srilanka);
        $ville=array();
        foreach($srilanka as $key=>$value) {
            array_push($ville, $key);
        }
        //print_r($ville);
        echo "<h3> Certaines Villes du Sri Lanka </h3>";
        echo "<ul><li>".$ville[0]."</li>";
        echo "<li>".$ville[1]."</li>";
        echo "<li>".$ville[2]."</li></ul>";

        echo "<h3> Caractéristiques des villes </h3>" ;
        foreach ($srilanka as $key=>$value) {
            echo "<ul><li>".$key ;
            foreach ($value as $val) {
            echo "<ul><li>".$val."</li></ul>" ;
        }
        echo "</li></ul>" ;
        } 

        echo "<h3> Moyenne de la population </h3>" ;
        echo "La moyenne de la population est de ".moyenne($srilanka)." habitants" ;

        /**************************************************************************************************/
        /***************************************EXERCICE 4*************************************************/
        /**************************************************************************************************/

      ?>
      
      <h3> Formulaires</h3>
      
      <form method="post" action="index.php">
          <fieldset>
              <p>
                  <label>Nom</label>
                  <input type="text" name="nom" />
              </p>
              <p>
                  <label>Latitude</label>
                  <input type="text" name="lat" />
              </p>
              <p>
                  <label>Longitute</label>
                  <input type="text" name="long" />
              </p>
              <p>
                  <label>Population</label>
                  <input type="text" name="pop" />
              </p>
              <p>
                  <input type="submit" name="send" value="Envoyer" />
              </p>
          </fieldset>
      </form>
      
      <?php var_dump($resultat) ; ?>

    </body>

    </html>