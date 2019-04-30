<?php
require_once 'config.php';
include 'C:\wamp64\www\Projet Web\Backoffice\entities\lignedecommande.php';

class CommandeC
{
		public function afficherCommande()
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM commande';
		$result = $db->query($sql);
		return $result;
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

	public function deleteClient($id)
	{
		$db = config::getConnexion();
		$sql = 'DELETE FROM utilisateur WHERE idUtilisateur="'.$id.'"';
		$result = $db->exec($sql);
		//Return array of array
		//Index Nom du colonne de table de base de données
	}
	public function deleteCommande($id)
	{
		$db = config::getConnexion();
		$sql = 'DELETE FROM commande WHERE id_commande="'.$id.'"';
		$result = $db->exec($sql);
		//Return array of array
		//Index Nom du colonne de table de base de données
	}

	public function afficherClientID($id)
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM utilisateur WHERE idUtilisateur= "'.$id.'"';
		$result = $db->query($sql);
		return $result->fetchAll();
		//Return array of array
		//Index Nom du colonne de table de base de données
	}
	public function updateClientID($id,$c)
	{
		$db = config::getConnexion();
		$sql = 'UPDATE utilisateur SET nom = :nom,prenom = :prenom,tel = :tel,adresse = :adresse,codePostal = :codePostal,sexe = :sexe,cin = :cin,email = :email,login = :login,password = :password,etat = :etat,role = :role WHERE idUtilisateur = :idUtilisateur';
		$req = $db->prepare($sql);
	$req->bindValue(':nom',$c->getnom());
		$req->bindValue(':prenom',$c->getprenom());
		$req->bindValue(':tel',$c->gettel());
		$req->bindValue(':adresse',$c->getadresse());
		$req->bindValue(':codePostal',$c->getcodePostal());
		$req->bindValue(':sexe',$c->getsexe());
		$req->bindValue(':cin',$c->getcin());
		$req->bindValue(':email',$c->getemail());
		$req->bindValue(':login',$c->getlogin());
		$req->bindValue(':password',$c->getpassword());
		$req->bindValue(':etat',$c->getetat());
		$req->bindValue(':role',$c->getrole());
		$req->bindValue(':idUtilisateur',$id);

		$req->execute();
	}
	   public function CountClientFemme()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM utilisateur Where sexe='Femme'");
        return $req1->rowCount();
    }
    public function CountClientHomme()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM utilisateur Where sexe='Homme'");
        return $req1->rowCount();
    }

}




 ?>
