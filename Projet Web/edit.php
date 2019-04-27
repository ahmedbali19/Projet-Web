<?php 
require 'clientC.php';
include_once '../Entities/client.php';
$data= array (
'nom' => $_POST["nom"],
'prenom' => $_POST["prenom"],
'tel' => $_POST["tel"],
'codePostal' => $_POST["codePostal"],
'sexe' => $_POST["sexe"],
'cin' => $_POST["cin"],
'email' => $_POST["email"],
'login' => $_POST["login"],
'password' => $_POST["password"],
'etat' => $_POST["etat"],
'role' => $_POST["role"]
);

$id=$_GET ["id"];

$client=new clientC();
$client1 = new client( $_POST['nom'] , $_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['codePostal'],$_POST['sexe'],$_POST['cin'],$_POST['email'],$_POST['login'],$_POST['password'],$_POST['etat'],$_POST['role']);

$client->updateClientID($id,$client1);
 header("location:../views/afficherclientsTab.php") ;


?>