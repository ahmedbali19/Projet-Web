<?PHP
include "../core/pubCore.php";
$pubC=new pubCore();
if (isset($_POST["supp"])){
	$pubC->Supprimerpub($_POST["supp"],$_POST["with"]);
	header('Location: crudpub.php');
}

?>