<?php
include "../entities/pub.php";
include "../core/pubCore.php";

 if (isset($_POST['nom']) and isset($_POST['marque'])   and isset($_POST['email'])  ) 
 {
 	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["image"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// $pubt = new pub($_POST['id'],$_POST['nom'],$_POST['marque'],$_POST['image'],$_POST['date'],$_POST['heure'],$_POST['type'] );
	$produit1=new pub($_POST['nom'],$_POST['marque'],"http://localhost/projetweb/views/img/".$_FILES["image"]["name"],$_POST['email']);
	$pubcore=new pubCore();
	$pubcore->Ajouterpub($produit1);
	header('location: crudpub.php');
	// echo "$_POST['id']";
 }
else
{
	echo "Vérifier les champs";
}

?>