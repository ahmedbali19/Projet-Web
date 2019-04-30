<?php
include_once "../entities/lignedecommande.php";
include_once "../core/produitC.php";


echo "test"
echo "aaaaaaaaaaaaaaaaaaaaaaa"

    $lignedecommande=new lignedecommande();
    $lignedecommande->setid_produit($_POST['id_produit']);
    $lignedecommande->setnom($_POST['nom']);
	$lignedecommande->setquantite($_POST['quantite']);
  $lignedecommande->setprix($_POST['prix']);
    $lignedecommande->Create_ligne();

 ?>
