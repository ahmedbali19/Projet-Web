<?php
include "../config.php";

class pubCore
{
	function Ajouterpub($pub)
	{
		$sql="INSERT INTO pub(nom,marque,image,email) values (:nom,:marque,:image,:email)";
		$db= config::getConnexion();

		try{
        $req=$db->prepare($sql);
		
        $nom=$pub->getnom();
        $marque=$pub->getmarque();
        $image=$pub->getimage();
        $email=$pub->getEmail();
 
       
        $req->bindValue(':nom',$nom);
        $req->bindValue(':marque',$marque);
        $req->bindValue(':image',$image);
        $req->bindValue(':email',$email);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }




	}

	function Supprimerpub($input,$selon)
	{
		if ( $selon=="id") {
			$sql="DELETE FROM pub where upper(id)= upper(:input)";
		}
		elseif ($selon=="nom") {
			$sql="DELETE FROM pub where upper(nom)= upper(:input)";
		}
		
		elseif ($selon=="marque") {
			$sql="DELETE FROM pub where upper(marque)= upper(:input)";
		}
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$input);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierpub($ref,$new,$modwhat){
		if ($modwhat=="id") {
			$sql="UPDATE pub SET id=:input WHERE id=:ref";
		}
		
		if ($modwhat=="marque") {
			$sql="UPDATE pub SET marque=:input WHERE id=:ref";
		}
		if ($modwhat=="image") {
			$sql="UPDATE pub SET image=:input WHERE id=:ref";
		}
		if ($modwhat=="nom") {
			$sql="UPDATE pub SET nom=:input WHERE id=:ref";
		}
		if ($modwhat=="email") {
			$sql="UPDATE pub SET email=:input WHERE id=:ref";
		}

		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$new);
		$req->bindValue(':ref',$ref);

		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }

   function Afficher(){
   	$sql="select * from pub";
		$db= config::getConnexion();

		try{
			$req=$db->prepare($sql);
			$req->execute();
            return $req;
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
   }








}


?>