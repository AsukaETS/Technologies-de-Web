<?php
if (isset($_GET["produit"]) && ($_GET["prix"])) {
    $chaine = "<p>".$_GET["produit"]."=>".$_GET["prix"]."</p>";
}
else {
    header("location:info.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TD4</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <?php
        echo $chaine ;
      ?>
  </body>
</html>
