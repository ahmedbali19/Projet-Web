
 <?php

 Class Produit{

  protected $id_produit;
  private $prix;
	private $nom;
  private $quantite;
	private $libelle;
	private $image;


  public function __construct($id_produit=null,$prix=null,$nom=null,$quantite=null,$libelle=null,$image=null)
    {
      $this->id_produit=$id_produit;
      $this->prix=$prix;
      $this->quantite=$quantite;
	  $this->nom=$nom;
      $this->libelle=$libelle;
      $this->image=$image;

	}

	public function getId(){
    return $this->id_produit;
  }

  public function getPrix(){
    return $this->prix;
  }

  public function getName(){
    return $this->nom;
  }

 public function getImg(){
    return $this->image;
  }

  public function getQtt(){
    return $this->quantite;
  }
  public function getLib(){
    return $this->libelle;
  }
  public function setPrix($prix){
		$this->prix = $prix;
	}
  public function setNom($nom){
		$this->nom = $nom;
	}
  public function setQuantite($quantite){
		$this->quantite = $quantite;
	}
  public function setId_produit($id_produit){
		$this->id_produit = $id_produit;
	}



 }
 ?>
