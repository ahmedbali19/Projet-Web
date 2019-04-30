<?php
class lignedecommande {
  
  private  $id_ligne;
  private $id_commande;
  private $id_produit;
  private $nom;
  private $quantite;
  private $prix;

  public function __construct()
  {
  
  }

  //------------------------------------------------------------ setters:----------------------
   public  function setid_ligne($id_ligne) {
    $this->id_ligne=$id_ligne;

  }
  public  function setprix($prix) {
    $this->prix=$prix;
  }
  public  function setid_produit($id_produit) {
    $this->id_produit=$id_produit;

  }

  public  function setid_commande($id_commande) {
    $this->id_commande=$id_commande;

  }

  public  function setnom($nom) {
    $this->nom=$nom;

  }
  
  public  function setquantite($quantite) {
    $this->quantite=$quantite;

  }
//-----------------------------------------------------------------getters:----------------------------

public  function getid_ligne() {
    return $this->id_ligne;

  }
  public  function getprix() {
    return $this->prix;

  }
  public  function getid_produit() {
    return $this->id_produit;

  }

  public  function getid_commande() {
    return $this->id_commande;

  }

  public  function getnom() {
    return $this->nom;

  }
  public  function getquantite() {
    return $this->quantite;

  }
  
//---------------------------------------- CRUD: ----------------------------------------------------------------------------
  public function Create_ligne()
  {
    $db=Db::getInstance();
	//echo $this->id_commande;
    $req=$db->query("INSERT INTO lignedecommande(id_produit,id_commande,nom,quantite,prix) VALUES ('".$this->id_produit."','".$this->id_commande."','".$this->nom."','".$this->quantite."','".$this->prix."')");
  }

   public function update()
  {
    $db=Db::getInstance();
    $req=$db->query("UPDATE lignedecommande SET nom='".$this->nom."', quantite='".$this->quantite."' WHERE id_ligne=".$this->id_ligne);
  }

   public function remove()
  {
    $db=Db::getInstance();
    $req=$db->query("DELETE FROM lignedecommande WHERE id_ligne=".$this->id_ligne);
  }

//-----------------------------affiche:----------------------------------------------------------------------------
  public static function all()
  {
    $list=[];
    $db=Db::getInstance();
    $req=$db->query("SELECT * FROM lignedecommande");
    foreach ($req->fetchAll() as $temp) {
     $lignedecommande=new lignedecommande();
     $lignedecommande->setid_ligne($temp['id_ligne']);
	 $lignedecommande->setid_commande($temp['id_produit']);
	 $lignedecommande->setid_produit($temp['id_commande']);
     $lignedecommande->setnom($temp['nom']);
     $lignedecommande->setquantite($temp['quantite']);
     $lignedecommande->setprix($temp['prix']);
     $list[]=$lignedecommande;
	 
   }
   return $list;
 }
//------------------------------------Recherche:---------------------------------------------------------------------
 public static function findById($id_ligne)
 {

  $db=Db::getInstance();
  $id_ligne=intval($id_ligne);
  $req=$db->prepare('SELECT * FROM lignedecommande where id_ligne=:id_ligne');
  $req->execute(array('id_ligne'=>$id_ligne));
  $temp=$req->fetch();
  $lignedecommande=new lignedecommande();
     $lignedecommande->setid_ligne($temp['id_ligne']);
	 $lignedecommande->setid_commande($temp['id_produit']);
	 $lignedecommande->setid_produit($temp['id_commande']);
     $lignedecommande->setnom($temp['nom']);
     $lignedecommande->setquantite($temp['quantite']);
     $lignedecommande->setprix($temp['prix']);
  return $lignedecommande;
}

 public static function findBynom($nom)
 {

  $db=Db::getInstance();
  $nom=strtolower($nom);
  $req=$db->prepare("SELECT * FROM lignedecommande where nom like '%".$nom."%'");
  $req->execute();
   $list=[];
   foreach ($req->fetchAll() as $temp)
    {
     $lignedecommande=new lignedecommande();
     $lignedecommande->setid_produit($temp['id_produit']);
     $lignedecommande->setid_commande($temp['id_commande']);
     $lignedecommande->setnom($temp['nom']);
     $lignedecommande->setprix($temp['prix']);
     $list[]=$lignedecommande;
   }
  
  return $list;
}

}
?>