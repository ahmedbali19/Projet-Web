<?php
require_once 'config.php';
session_start();


$db1 = config::getConnexion();

		$id=$_POST["email"];
		$password=$_POST["password"];
		$sql = 'SELECT * FROM utilisateur WHERE email= "'.$id.'" AND password = "'.$password.'" ';
		$result1 = $db1->query($sql);
		$result=$result1->fetchAll();
		$role=$result[0]["role"] ;

		if(!empty($result))
		{	if($role==0)
			{		$_SESSION["Username"]=$result[0]["nom"];
					
						echo "<script>document.location.href='http://localhost/temp/Front/index.php';</script>";

			}	else {
				$_SESSION["Username"]=$result[0]["nom"];
					echo "<script>document.location.href='http://localhost/temp/Back/views/afficherClientsTab.php';</script>";
			}

		}else
		{
			require 'index.php';
		}

		//Return array of array
		//Index Nom du colonne de table de base de données
	