<?php
include "C:/wamp64/www/Projet Web/Backoffice/core/CommandeC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">id_commande</th>
													      <th scope="col">date_commande</th>
													      <th scope="col">mode_paiement</th>
													      <th scope="col">mail</th>





													</tr>

		<?php
	$commande=new CommandeC();
$listcommandes=$commande->afficherCommande();
		foreach($commande as $row) {
			?>
		  <tr>
												      <td> <?php echo $row->id_commande ; ?></td>
												      <td> <?php echo $row->date_commande ; ?></td>
												       <td> <?php echo $row->$mode_paiement ; ?></td>
												      <td> <?php echo $row->mail ; ?></td>





												    </tr>
			<?php
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>
