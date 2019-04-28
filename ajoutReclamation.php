# Projet-Web

<?PHP

include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['objet']) and isset($_POST['libelle']) and isset($_POST['date']))
{
$reclamation1=new reclamation($_POST['nom'],$_POST['email'],$_POST['objet'],$_POST['libelle'],$_POST['date']);

$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location: contact.php');
	
}else{
	echo "vérifier les champs";
}

?>
