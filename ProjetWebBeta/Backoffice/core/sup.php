<?php 

require 'suggestionC.php';
$suggestion=new suggestionC();
$id=$_GET["id"];

$suggestion->deletesuggestion($id);

header("location:../views/affichersuggestionTab.php") ;



?>