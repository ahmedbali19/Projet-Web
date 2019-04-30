<?php
include "../config.php";

class EventCore
{
	function AjouterEvent($event)
	{
		$sql="INSERT INTO event(titre,Image,description,adresse,date,heure,type) values (:titre,:image,:description,:adresse,:date,:heure,:type)";
		$db= config::getConnexion();

		try{
        $req=$db->prepare($sql);
		
        $titre=$event->getTitre();
        $image=$event->getImage();
        $description=$event->getDescription();
        $adresse=$event->getAdresse();
        $date=$event->getDate();
        $heure=$event->getHeure();
        $type=$event->getType();
       
        $req->bindValue(':titre',$titre);
        $req->bindValue(':image',$image);
        $req->bindValue(':description',$description);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':date',$date);
        $req->bindValue(':heure',$heure);
        $req->bindValue(':type',$type);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }




	}

	function SupprimerEvent($input,$selon)
	{
		if ( $selon=="Reference") {
			$sql="DELETE FROM event where upper(id)= upper(:input)";
		}
		elseif ($selon=="Nom") {
			$sql="DELETE FROM event where upper(titre)= upper(:input)";
		}
		
		elseif ($selon=="Type") {
			$sql="DELETE FROM event where upper(type)= upper(:input)";
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

	function modifierEvent($ref,$new,$modwhat){
		if ($modwhat=="Reference") {
			$sql="UPDATE event SET id=:input WHERE id=:ref";
		}
		
		if ($modwhat=="Type") {
			$sql="UPDATE event SET type=:input WHERE id=:ref";
		}
		if ($modwhat=="Description") {
			$sql="UPDATE event SET description=:input WHERE id=:ref";
		}
		if ($modwhat=="Nom") {
			$sql="UPDATE event SET titre=:input WHERE id=:ref";
		}
		if ($modwhat=="Date") {
			$sql="UPDATE event SET date=:input WHERE id=:ref";
		}
		if ($modwhat=="Heure") {
			$sql="UPDATE event SET heure=:input WHERE id=:ref";
		}
		if ($modwhat=="Adresse") {
			$sql="UPDATE event SET adresse=:input WHERE id=:ref";
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
   	$sql="select * from event";
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