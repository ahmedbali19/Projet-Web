<?PHP
include "../core/eventCore.php";
$eventC=new EventCore();
if(empty($_POST["ref"]) )
{
	echo "Vous devez donnez l'id de l'event ";
}
elseif (empty($_POST["new"])) 
{
	echo "Vous devez donner la nouvelle valeure";
}
else
{
if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="Reference" or $_POST["modwith"]=="Nom" or $_POST["modwith"]=="Date" or $_POST["modwith"]=="Heure" or $_POST["modwith"]=="Adresse" or $_POST["modwith"]=="Description"  or $_POST["modwith"]=="Type"   ) )    {
	$eventC->ModifierEvent($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: crudevent.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}
}
?>

