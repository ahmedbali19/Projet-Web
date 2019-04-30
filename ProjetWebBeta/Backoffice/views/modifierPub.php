<?PHP
include "../core/pubCore.php";
$pubC=new pubCore();
if(empty($_POST["ref"]) )
{
	echo "Vous devez donnez l'id de l'pub ";
}
elseif (empty($_POST["new"])) 
{
	echo "Vous devez donner la nouvelle valeure";
}
else
{
if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="id" or $_POST["modwith"]=="nom" or $_POST["modwith"]=="marque" or $_POST["modwith"]=="email" or $_POST["modwith"]=="image" ) )    {
	$pubC->Modifierpub($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: crudpub.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}
}
?>

