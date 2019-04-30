<?php
require_once 'config.php';

class ProduitsC
{
		public function afficherProduits()
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM produit';
		$result = $db->query($sql);
		return $result;
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

}




 ?>
