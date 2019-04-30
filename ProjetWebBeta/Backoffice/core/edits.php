<?php 
require 'suggestionC.php';
include_once '../Entities/suggestion.php';
$data= array (
'message' =>isset( $_POST["message"]),

);

$id=$_GET ["id"];

$suggestion=new suggestionC();
$suggestion1 = new suggestion( $_POST['message'] );

$suggestion->updatesuggestionID($id,$suggestion1);
 header("location:../views/affichersuggestionTab.php") ;


?>