<?php
include "../entities/event.php";
include "../core/eventCore.php";

 if (isset($_POST['titre'])  and isset($_POST['adresse']) and isset($_POST['date']) and isset($_POST['heure']) and isset($_POST['type'])  ) 
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
	// $eventt = new Event($_POST['id'],$_POST['titre'],$_POST['description'],$_POST['adresse'],$_POST['date'],$_POST['heure'],$_POST['type'] );
	 $produit1=new Event($_POST['titre'],$_POST['description'],$_POST['adresse'],$_POST['date'],$_POST['heure'],$_POST['type'],"http://localhost/projetweb/views/img/".$_FILES["image"]["name"]);

	$eventcore=new EventCore();
	$eventcore->AjouterEvent($produit1);
	header('location: crudevent.php');
	// echo "$_POST['id']";
 }
else
{
	echo "Vérifier les champs";
}

?>