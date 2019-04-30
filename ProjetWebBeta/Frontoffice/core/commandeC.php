<?php
include_once "../config.php";

class commandeC
{
	public function __construct(){

	}
	function ajoutercommande($commande)
	{
		$sql="insert into commande values (null,:date,:mode_paiement,:mail)";
		$db = config::getConnexion();

		try
		{

        $req=$db->prepare($sql);

		//$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':date',$commande->getdate_commande());
		$req->bindValue(':mode_paiement',$commande->getmode_paiement());
		$req->bindValue(':mail',$commande->getmail());
  	$req->execute();

        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function recuperercommande($idClient)
	{
   		$sql="SELECT * from historiquecommande where idClient=$idClient";
		$db = config::getConnexion();

		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	function recuperercommande1($idClient)
	{
   		$sql="SELECT * from commande  where idClient=$idClient";
		$db = config::getConnexion();

		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererdernierID()
	{
		$sql="SELECT MAX(id_commande) as max from commande";
		$db = config::getConnexion();

		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste->fetchAll();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recuperercontenucommande($idCommande)
	{
        $sql="SELECT * from lignecommande where idCommande=$idCommande";
		$db = config::getConnexion();

		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}


	function addLigneCommande($Commande)
	{
		$db = config::getConnexion();
		$this->ajoutercommande($Commande);
		$lastId=$this->recupererdernierID();
		$Commande->setid_commande($lastId[0]['max']);
		foreach ($Commande->produit as $produit) {
			$req=$db->prepare('insert into lignedecommande values (null , :id_commande , :id_produit , :nom , :qt , :prix)');
			$req->bindValue(':id_commande',$Commande->id_commande);
			$req->bindValue(':id_produit',$produit->getId());
			$req->bindValue(':nom',$produit->getName());
			$req->bindValue(':qt',$produit->getQtt());
			$req->bindValue(':prix',$produit->getPrix());
			try
			{
			$req->execute();
		}
		catch (Exception $e)
		{
				die('Erreur: '.$e->getMessage());
		}
		}
	}
}


function supprimerCommande($id_commande){
		$sql="DELETE FROM commande where $id_commande=:$id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



?>
