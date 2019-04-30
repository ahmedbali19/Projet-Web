<?PHP
include "../core/eventCore.php";
$eventC=new EventCore();
if (isset($_POST["supp"])){
	$eventC->SupprimerEvent($_POST["supp"],$_POST["with"]);
	header('Location: crudevent.php');
}

?>