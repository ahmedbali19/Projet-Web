<?php 
require '../config.php';

class suggestionC
{
	public function ajoutersuggestion($s)
	{
		$sql = 'INSERT INTO suggestion (idUtilisateur,message,type) VALUES (:idUtilisateur,:message,:type)';
		$db = config::getConnexion();
		$req = $db->prepare($sql);

		
		$req->bindValue(':idUtilisateur',$s->getidUtilisateur());
		$req->bindValue(':message',$s->getmessage());
		$req->bindValue(':type',$s->gettype());
		
		

		
		$req->execute();

		//hethi mrigela
	}


	


}




 ?>