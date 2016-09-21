<?php 
	function tronquer_texte($texte, $longeur_max = 100)
	{
	    if (strlen($texte) > $longeur_max)
	    {
			$texte = substr($texte, 0, $longeur_max);
			$texte .= "...";
	    }
	    return $texte;
	}



	function VerifierAdresseMail($adresse)
{
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	if(preg_match($Syntaxe,$adresse))
	return true;
	else
	return false;

}


function MailDansBase($email)
{
	$request = "SELECT *
		FROM client
		WHERE Email='$email'";
	$query = mysql_query($request);
	$result = mysql_fetch_object($query);
	if($result!=null)
	{
		return true;
	}
	else
	{
		return false;
	}
}	
?>