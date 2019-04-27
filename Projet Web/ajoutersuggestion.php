<?php 
include_once '../Entities/suggestion.php';
include_once 'suggestionC.php';

if(  isset($_POST['idUtilisateur']) && isset($_POST['message']) && isset($_POST['type']))
{
	$suggestion1 = new suggestion( $_POST['idUtilisateur'] , $_POST['message'], $_POST['type']);
	$suggestion1C = new suggestionC();
	$suggestion1C->ajoutersuggestion($suggestion1);
	   header("location:../index.php") ;
	
}
else 
{
	echo "Champs Obligatoire";
}





 ?>