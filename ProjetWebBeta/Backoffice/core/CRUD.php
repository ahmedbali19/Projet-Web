<?php
include 'C:\wamp64\www\Projet Web\Frontoffice\entities\produit.php';
include 'C:\wamp64\www\Projet Web\Frontoffice\entities\commande.php';
include 'C:\wamp64\www\Projet Web\Frontoffice\core\commandeC.php';
  session_start();

$commande=new commande();
$commande->setdate_commande(date("d/m/Y"));
$commande->setmode_paiement('Cashe');
$commande->setmail($_POST['mail']);
$commande->produit=$_SESSION['Produits'];
//var_dump($commande);


$commandeC=new commandeC();
$commandeC->addLigneCommande($commande);
header("Location: http://localhost:8080/Projet%20Web/Frontoffice/views/shop.php");




 ?>
