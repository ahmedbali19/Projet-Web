<?php 

require 'clientC.php';
$client=new clientC();
$id=$_GET["id"];

$client->deleteClient($id);

header("location:../views/afficherclientsTab.php") ;
	



?>