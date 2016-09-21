<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
     <title>Votre profil</title>
      
</head>
<body>
   <?php  
  $prenom=$_POST["prénom"];  
  $mail=$_POST["mail"];

    echo "<p> Bonjour $prenom votres mail est $mail </p>" ;
    
    
    
?>    

</body>
</html>