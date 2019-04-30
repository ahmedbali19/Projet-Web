<?php 
require 'config.php';

class suggestionC
{
		public function affichersuggestion()
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM suggestion';
		$result = $db->query($sql);
		return $result;
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

	public function deletesuggestion($id)
	{
		$db = config::getConnexion();
		$sql = 'DELETE FROM suggestion WHERE idSuggestion="'.$id.'"';
		$result = $db->exec($sql);
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

	public function affichersuggestionID($id)
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM suggestion WHERE idSuggestion= "'.$id.'"';
		$result = $db->query($sql);
		return $result->fetchAll();
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

public function updatesuggestionID($id,$s)
	{
		$db = config::getConnexion();
		$sql = 'UPDATE suggestion SET message = :message WHERE idSuggestion = :idSuggestion';
		$req = $db->prepare($sql);
	$req->bindValue(':message',$s->getmessage());
	$req->bindValue(':idSuggestion',$id);
		

		$req->execute();
	}

	


}




 ?>