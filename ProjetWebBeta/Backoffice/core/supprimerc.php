

<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

echo "string";
var_dump($_POST);
$commandeC=new CommandeC();
if (isset($_POST["idcommande"])){
    $commandeC->supprimerCommande($_POST["idcommande"]);
    header('Location:  supprimerp.html');
}

?>
