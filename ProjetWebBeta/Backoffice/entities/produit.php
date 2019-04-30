 
 <?php

 Class Produit{

    protected $id_produit;
    private $prix;
	private $nom;
    private $quantite;
	private $libelle;
	private $image;
 
 
  public function __construct($id_produit,$prix,$nom,$quantite,$libelle,$image)
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
  

	
 }
 ?>