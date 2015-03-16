 <?php
 if(true){
 $result=http_get("https://api.cibul.net/v1/events?key=747c9c7c42b9aca049030fe06ba8d10f");
 echo $result;
 }
 else {/*
	// On va chercher les préférences de la personne dans la BDD
	try{$db = new PDO('mysql:host=localhost;dbname=test','','');}
	catch(Exception $e){die("connexion to linebase failed".$e->getMessage());}
	$answer = $db->query("SELECT name
				FROM User 
				NATURAL JOIN likes
				NATURAL JOIN topic
				;");
		while($line = $answer->fetch())
			$feed.$this->lineToEvent($line);
		$answer->closeCursor();
	// On fait la requête avec toutes les préférences
	$result=http_get(https://api.cibul.net/v1/events?key=747c9c7c42b9aca049030fe06ba8d10f);*/
 }
 ?>
