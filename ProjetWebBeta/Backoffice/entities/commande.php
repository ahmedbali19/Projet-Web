<?php
class commande {

    public  $id_commande;
    private  $date_commande;
    private  $mode_paiement;
    public $produits;
    private $mail;
    public function __construct(){

  }
   //------------------------------------------------------------les fonctions set:----------------------------------------------------------------------------
   public  function setid_commande($id_commande) {
    $this->id_commande=$id_commande;

  }
  public  function setdate_commande($date_commande) {
    $this->date_commande=$date_commande;

  }

  public  function setmode_paiement($mode_paiement) {
    $this->mode_paiement=$mode_paiement;

  }



  public  function setmail($mail) {
    $this->mail=$mail;

  }




//----------------------------------------------------------------- les fonctions get:-------------------------------------------------------------------------

public  function getid_commande() {
    return $this->$id_commande;

  }
  public  function getdate_commande() {
    return $this->date_commande;

  }

  public  function getmode_paiement() {
    return $this->mode_paiement;

  }

  public function getmail(){
    return $this->mail;
  }


  //---------------------------------------------------------Les fonctions CRUD: ----------------------------------------------------------------------------
  public function Create()
  {
    $db=Db::getInstance();
    $req=$db->query("INSERT INTO commande(date_commande,mode_paiement,mail) VALUES ('".$this->date_commande."','".$this->mode_paiement."','".$this->mail."')");


  	$commande_id=$db->query("select * FROM commande ORDER BY id_commande DESC LIMIT 1");
	$temp=$commande_id->fetch();

	return $temp[0];
  }



}



  ?>
