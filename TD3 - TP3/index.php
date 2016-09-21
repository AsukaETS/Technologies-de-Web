<?php include 'connexion.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TD3</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
    <body>
  <h1>Mes Contacts</h1>
      <table border="1">
          <tr>
              <th>id</th>
              <th>nom</th>
              <th>prenom</th>
              <th>adresse</th>
              <th>code Postal</th>
              <th>Ville</th>
              <th>telephone</th>
              <th>mail</th>
              <th>annee naissance</th>
          </tr>
        
      <?php
        $sql="SELECT * FROM contacts";
        $res=$connexion->query($sql);
        $tab=$res->fetchAll(PDO::FETCH_ASSOC);
        //echo "<pre>";
        //print_r($res);
        //echo "</pre>";

        foreach($tab as $value) {
            echo "<tr>";
            foreach($value as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
            
          ?> </table>
        <h1>Requête avec critère</h1>
          <table border="1">
          <tr>
              <th>id</th>
              <th>nom</th>
              <th>prenom</th>
              <th>adresse</th>
              <th>code Postal</th>
              <th>Ville</th>
              <th>telephone</th>
              <th>mail</th>
              <th>annee naissance</th>
          </tr>
          <?php
        $sql="SELECT * FROM contacts WHERE ville = 'La Rochelle'";
        $res=$connexion->query($sql);
        $tab1=$res->fetchAll(PDO::FETCH_ASSOC);
        //echo "<pre>";
        //print_r($res);
        //echo "</pre>";

        foreach($tab1 as $value) {
            echo "<tr>";
            foreach($value as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }

              ?> </table>
              
              
              
              <h1>Requête d'insertion</h1>
              
        <?php
//$sql ="INSERT INTO contacts VALUES (5, 'Jean', 'Michel', 'Rue des patates', 17300, 'Rochefort', 0648596452, 'JeanMichel@gmail.com', 1900)" ;
//$res=$connexion->exec($sql);

?> 
        
        <h1>Requête préparée</h1>

        <?php
 $requete_prepare_1=$connexion->prepare("SELECT * FROM contacts WHERE ville = :ville") ;
$requete_prepare_1->execute (array('ville'=>'Bordeaux')) ;
$res=$requete_prepare_1->fetch(PDO::FETCH_OBJ) ;
echo $res -> id. " "; 
echo $res -> nom ." "; 
echo $res -> prenom ." ";
echo $res -> adresse ." ";
echo $res -> codePostal." ";
echo $res -> ville." ";
echo $res -> telephone. " "; 
echo $res -> mail. " ";
echo $res -> anneeNaissance." "; 
?>
        
        <h1>Requête avec critère issu d'un formulaire</h1>
      <form id="formulaire" method="POST" action="index.php">
          <fieldset>
          <label for="ville" id="idVille">Ville</label>
          <input type="text" id="ville" name="VILLE" required />
          <p class="submit">
          <input type="submit" id="btnSubmit" value="Continuer" name="send" />
          </p>
          </fieldset>
      </form>
        <table border="1">
          <tr>
              <th>id</th>
              <th>nom</th>
              <th>prenom</th>
              <th>adresse</th>
              <th>code Postal</th>
              <th>Ville</th>
              <th>telephone</th>
              <th>mail</th>
              <th>annee naissance</th>
          </tr>
      <?php
        if(isset($_POST["send"])) {
            if (isset($_POST["VILLE"])) {
                $ville=$_POST["VILLE"];
                $sql=$connexion->prepare("SELECT * FROM contacts WHERE ville=?");
                $sql->execute(array($ville));
            $res=$sql->fetchAll(PDO::FETCH_ASSOC);
                
            }
        }
foreach($res as $value) {
            echo "<tr>";
            foreach($value as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
        
   
?>
</body>      
</html>