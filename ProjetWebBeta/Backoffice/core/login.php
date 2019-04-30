<?php


require 'config.php';



public function login($id,$password)
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM utilisateur WHERE email= "'.$id.'" AND password = "'.$password.'" ';
		$result = $db->query($sql);
		
		$role=$result[0]["etat"] ;

		if(!empty($result))
		{	if($role==1)
			{		$_SESSION["Username"]=$result[0]["nom"];
					require '../index.php.html';
			}	else {
				$_SESSION["Username"]=$result[0]["nom"];
					require'../../Back/Views/afficherClientsTab.php';
			}

		}else
		{
			require '../index.html';
		}

		//Return array of array
		//Index Nom du colonne de table de base de données
	}