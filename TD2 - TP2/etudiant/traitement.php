<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
     <title>Votre profil</title>
      
</head>
<body>
<?php
	//code php
print_r($_POST) ;
if(isset($_POST["send"]))
    {
        if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"])
        && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"])) {
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $age=$_POST["age"];
            $URL=$_POST["URL"] ;
            $date=$_POST["date"];
            $noel=mktime(0,0,0,12,25,2015) ;
            $aff="<p>Bonjour $prenom $nom comment allez vous ? La famille ? Les amis ? Posey ? Assied toi prend un kebab et parle mec</p>";
            echo $aff ;
            $affsport="Mes compétences sont :";
            if(isset($_POST["sport"])) {
                $affsport.="<ul>";
                foreach ($_POST["sport"] as $val) {
                $affsport.="<li>$val</li>";
                }
                $affsport.="</ul>";
            }
            echo "<p>$affsport</p>" ;
            echo "<a>$URL</a>" ;
            
            if ($noel < $date) 
                echo "<p> Noël est déjà passé ! </p>" ;
            else {
                $tps_restant = $noel - time() ; 
                
                //CONVERSIONS
                
                $i_restantes = $tps_restant / 60;
                $H_restantes = $i_restantes / 60;
                $d_restants = $H_restantes / 24;


                $s_restantes = floor($tps_restant % 60); // Secondes restantes
                $i_restantes = floor($i_restantes % 60); // Minutes restantes
                $H_restantes = floor($H_restantes % 24); // Heures restantes
                $d_restants = floor($d_restants); // Jours restants
                
                echo "<p> Il reste $d_restants jours $H_restantes heures $i_restantes minutes et $s_restantes secondes avant Noël ! </p>" ;
            }
            
        }
        else {
            echo "<script type=\"text/javascript\">"; //traitement javascript
            echo "alert('Complètez tous les champs');";
            echo "window.history.back();";
            echo "</script>";
        }
    }
    else {
        header("location:index.html");
    }

?>


</body>
</html>
