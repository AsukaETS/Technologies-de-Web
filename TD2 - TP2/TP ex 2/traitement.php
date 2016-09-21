<!DOCTYPE html5>
<html>
 <head>
	<meta charset="utf-8" />
     <title>Evenements</title>
      
</head>
<body>
<?php
    if (file_exists("evenement.xml") ) {
        $evenements=simplexml_load_file("evenement.xml") ;
        echo $evenements->asXml() ;
}
    
    
?>    

</body>
</html>