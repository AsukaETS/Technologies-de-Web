<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Testouille</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
        echo "<h1>Exercice 1</h1>";
        echo "<h2>Calcul sur les variables</h2>";
        $TVA=0.2;
        $prix=150;
        $Nombre=10;
        $HT=$prix*$Nombre;
        $TTC=($prix+($prix*$TVA))*$Nombre;
        echo "<p>Le prix HT est de $HT ".gettype($HT)."</p>";
        echo "<p>Le prix TTC est de $TTC ".gettype($TTC)."</p>";

        echo "<h1>Exercice 2</h1>";
        $nbre=20;
        $res=0;
        for ($x=1 ; $x <= $nbre ; $x++) {
            $res=$res+$x;
        }
        echo "<p> Somme des entiers de 1 à $nbre : $res.</p>";

        echo "<h1>Exercice 3</h1>" ;
        for ($x=0 ; $x < 4 ; $x++) {
                echo "<article>";
                echo "<header><h2>Titre ".($x+1)."</h2><p>The ".date('l jS \of F Y')."</p></header>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula, neque sed tristique faucibus, velit tellus porttitor quam, vitae condimentum ligula ante at lacus. Nullam ac lectus aliquam, sagittis eros quis, ultrices arcu. Nunc in nisl convallis, accumsan ante vitae, maximus augue. Aliquam accumsan sem vel erat venenatis ullamcorper. Ut bibendum consequat libero sit amet tincidunt. In accumsan nulla justo, eget blandit massa scelerisque a. Pellentesque quis lectus varius, dignissim enim in, vehicula ante. Quisque sit amet justo quis purus auctor posuere id vitae lectus. Morbi aliquet mi leo, ut tempor nisl maximus et. Phasellus vitae lectus ex. Donec accumsan volutpat posuere. Morbi quis dolor imperdiet, vestibulum tortor sit amet, ultricies ante. Morbi eget nulla id nunc tristique faucibus. Cras ut egestas turpis.</p>";
                echo "</article>";
            }

        echo "<h1>Exercice 4</h1>" ;
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

        echo "<h1>Exercice 5</h1>";
        $tab1=array(10,15,16,8,12,3);
        for ($i=0 ; $i <= 5 ; $i++) {
            echo "<p> Note ".($i+1)." : ".$tab1[$i].".</p>";
        }
        foreach ($tab1 as $element) {
            echo $element . "<br />";
        }
        
        echo "<h1>Exercice 6</h1>";
        $mois=array(

                        array("January", "Janvier"),
                        array("February", "Février"),
                        array("March", "Mars"),
            );
          echo "<table border =\"1\">
            <tr>
                <td align=center><strong>Anglais</strong></td>
                <td align=center><strong>Français</strong></td>
            </tr>
            <tr>
                
                <td>".$mois[0][0]."</td>
                <td>".$mois[0][1]."</td>
                
            </tr>
            <tr>
                
                <td>".$mois[1][0]."</td>
                <td>".$mois[1][1]."</td>
                
            </tr>
            <tr>
                
                <td>".$mois[2][0]."</td>
                <td>".$mois[2][1]."</td>
                
            </tr>
        </table>" ;

        echo "<h1> Exercice 7 </h1>" ;
       $liste = array("Patrick Nollet/nono/jjjj", "Sophie Fonfec/fonfec/ssss", "Yves AdrouilleToultan/adrouille/yyyy");

             foreach ($liste as $element) {
            $tiles = explode('/', $element);
                 $nom = $tiles[0];
            $code = $tiles[1];
            $pass = $tiles[2];
                 echo "<p>Nom : $nom / code : $code / pass : $pass</p>"; 
        }

        echo "<h1> Exercice 8 </h1>" ;
        function calculMensualite ($cap, $ta, $duree, $taa) {
            
            $mens=($cap*$ta)/(1-pow((1+$ta), $duree))+($cap*$taa);
            $mensFinal = round($mens) ;
            echo "<p>Capital = $cap - Taux = $ta - Durée = $duree ($mensFinal)</p>" ;
        }
            calculMensualite(200000, 5.15, 15, 0.0036) ;
    
            
            
        
      ?>
</body>

</html>