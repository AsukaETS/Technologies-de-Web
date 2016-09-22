<?php include "connexion.php"; ?>

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

        foreach($tab as $value) {
            echo "<tr>";
            foreach($value as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
        ?>
      </table>
        <h1>Requête avec critère</h1>
        <table border=1>
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
        $sql="SELECT * FROM contacts WHERE ville='La Rochelle'";
        $res=$connexion->query($sql);
        $tab=$res->fetchAll(PDO::FETCH_ASSOC);

        foreach($tab as $value) {
            echo "<tr>";
            foreach($value as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
        ?>
        <?php
            /*$ins="INSERT INTO contacts(nom,prenom,adresse,codePostal,ville,telephone,mail,anneNaissance)
            VALUES('Bond','James','7 rue de lespion',54000,'Spycity', 0254152362, 'bond@gmail.com',1986)";
            $connexion->exec($ins);*/
            
        ?>
      </table>
      
      <h1>Requête préparée</h1>
          <?php
          $sql=$connexion->prepare("SELECT * FROM contacts WHERE ville=:nomV");
          $sql->execute(array('nomV'=>'La Rochelle'));
          $res=$sql->fetchAll(PDO::FETCH_ASSOC);
          print_r($res);
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
      <?php
        if(isset($_POST["send"])) {
            if (isset($_POST["VILLE"])) {
                $ville=$_POST["VILLE"];
                $sql=$connexion->prepare("SELECT * FROM contacts WHERE ville=?");
                $sql->execute(array($ville));
                $res=$sql->fetchAll(PDO::FETCH_ASSOC);
                print_r($res);
            }
        }
      ?>
      
      <h1>Requête d'insertion avec données issues d'un formulaire</h1>
      <form id="formulaire" method="POST" action="index.php">
          <fieldset>
          <label for="nom" id="idNom">Nom</label>
          <input type="text" id="nom" name="nom" required />
          <label for="prenom" id="idP">Prénom</label>
          <input type="text" id="prenom" name="prenom" required />
          <label for="adresse" id="idA">Adresse</label>
          <input type="text" id="adresse" name="adresse" required />
          <p class="submit">
          <input type="submit" id="btnSubmit" value="Continuer" name="send" />
          </p>
          </fieldset>
      </form>
      <?php
        if(isset($_POST["send"])) {
            if (isset($_POST["nom"]) && isset($_POST["prenom)"]) && isset($_POST["adresse"])) {
                $nom=$_POST["nom"];
                $prenom=$_POST["prenom"];
                $adresse=$_POST["adresse"];
            }
        }
        ?>
  </body>
</html>
