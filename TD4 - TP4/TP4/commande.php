<?php 

//Vérification de l'existence d'une session
if (!isset($_SESSION)) {
        header('location:login.php') ;
}

//Verification de l'existence du panier
if (!empty($_SESSION['panier'])) {
    header('location:index.php') ;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SiteWebShop</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
</body>
</html>