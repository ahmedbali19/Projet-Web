<?php 
require 'suggestionC.php';
include_once '../Entities/suggestion.php';
$data= array (
'message' =>isset( $_POST["message"]),
'ID' => $_POST["ID"],
'contenu' => $_POST["contenu"]

);

$id=$_GET ["id"];

$suggestion=new suggestionC();
$suggestion1 = new suggestion( $_POST['message'], $_POST['ID'],$_POST['contenu']);

$suggestion->updatesuggestionID($id,$suggestion1);
 header("location:../views/affichersuggestionTab.php") ;


?>