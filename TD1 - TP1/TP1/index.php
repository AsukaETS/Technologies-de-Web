<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TP1</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <?php
        echo "<h1>Exercice 1 - Les boucles</h1>";
            for ($x=0 ; $x < 4 ; $x++) {
                echo "<article>";
                echo "<header><h2>Titre ".($x+1)."</h2><p>The ".date('l jS \of F Y')."</p></header>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula, neque sed tristique faucibus, velit tellus porttitor quam, vitae condimentum ligula ante at lacus. Nullam ac lectus aliquam, sagittis eros quis, ultrices arcu. Nunc in nisl convallis, accumsan ante vitae, maximus augue. Aliquam accumsan sem vel erat venenatis ullamcorper. Ut bibendum consequat libero sit amet tincidunt. In accumsan nulla justo, eget blandit massa scelerisque a. Pellentesque quis lectus varius, dignissim enim in, vehicula ante. Quisque sit amet justo quis purus auctor posuere id vitae lectus. Morbi aliquet mi leo, ut tempor nisl maximus et. Phasellus vitae lectus ex. Donec accumsan volutpat posuere. Morbi quis dolor imperdiet, vestibulum tortor sit amet, ultricies ante. Morbi eget nulla id nunc tristique faucibus. Cras ut egestas turpis.</p>";
                echo "</article>";
            }
        
        echo "<h1>Exercice 2 - Structure If</h1>"; 
        $age1 = 4; //correspond aux -14 ans. 
        $age2 = 5; //correspond aux -18 ans. 
        $age3 = 8; //correspond aux 18 ans et plus.
        $reduc = 7; //Tarif réduit.
        $lundi = 6; //Prix le lundi. 
        $jour = rand(1,7); //Entier aléatoire pour le jour de la semaine. 
        echo "<p> $jour </p>";
        $age = rand(0,99); //Âge aléatoire de la personne. 
        echo "<p> $age </p>";
        $reduction = rand(0,1); //Si oui ou non il a la réduction.
        echo "<p> $reduction </p>";

        if ($age < 14) {
            echo "<p> Le prix le plus intéressant est $age1. </p>";
        }
        if ($age > 14 && $age < 18) {
            echo "<p> Le prix le plus intéressant est $age2. </p>";
        }
        if ($age > 18 && $reduction == 0) {
            if ($jour == 1) {
                echo "<p> Le prix le plus intéressant est $lundi. </p>";
            }
            echo "<p> Le prix le plus intéresant est $age3. </p>";
        }
        if ($age > 18 && $reduction == 1) {
            if ($jour ==1) {
                echo "<p> Le prix le oplus intéressant est $lundi. </p>";
            }
            echo "<p> Le prix le plus intéressant est $reduc. </p>";
        } 

        echo "<h1>Exercice 3 - Tableaux</h1>";
        echo "<h2>Fonction explode</h2>";
            $email = "abourmau@univ-lr.fr";
            $tiles = explode('@', $email);
            $username = $tiles[0];
            $serveur = $tiles[1];
        echo "<p>L'utilisateur est $username, le compte mail est hébergé sur le domaine $serveur</p>"; 

        echo "<h2>Tableau et affichage en HTML.</h2>";
        $clients=array(
                        array("Leparc", "Paris", 35),
                        array("Durox", "Bordeaux", 22),
                        array("Dupont", "Nantes", 27)
            );
          echo "<table border =\"1\">
            <tr>
                <td align=center><strong>Numero</strong></td>
                <td align=center><strong>Nom</strong></td>
                <td align=center><strong>Ville</strong></td>
                <td align=center><strong>Age</strong></td>
            </tr>
            <tr>
                <td align=center><strong>0</strong></td>
                <td>".$clients[0][0]."</td>
                <td>".$clients[0][1]."</td>
                <td>".$clients[0][2]."</td>
            </tr>
            <tr>
                <td align=center><strong>1</strong></td>
                <td>".$clients[1][0]."</td>
                <td>".$clients[1][1]."</td>
                <td>".$clients[1][2]."</td>
            </tr>
            <tr>
                <td align=center><strong>2</strong></td>
                <td>".$clients[2][0]."</td>
                <td>".$clients[2][1]."</td>
                <td>".$clients[2][2]."</td>
            </tr>
        </table>" ;

        echo "<h2>Tableau associatif</h2>";
        $departements = array ( "17" => "Charente-Maritime",
                                 "78" => "Yvelines",
                                 "01" => "Ain",
                                 "85" => "Vendéee" );
        $departements["33"] = "Gironde";
        ksort($departements);
        foreach ($departements as $key  => $element) {
            echo "<p>Le numéro du département de ".$element." est ".$key."</p>";
        }
        
        echo "<h2> Tableau associatif 2</h2>";
        $tab = array(
            "cours 1" => array(
                "matière" => "anglais",
                "coef" => 2,
                "note" => 12),
            "cours 2" => array(
                "matière" => "java",
                "coef" => 4,
                "note" => 11),
            "cours 3" => array(
                "matière" => "web",
                "coef" => 4,
                "note" => 13));
        foreach ($tab as $val) {
            
        }
      ?>
  </body>
</html>
