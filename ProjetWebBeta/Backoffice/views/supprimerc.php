

<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["idcommande"])){
    $commandeC->supprimerCommande($_POST["idcommande"]);
    header('Location:  Gprodui.php');
}

?>
