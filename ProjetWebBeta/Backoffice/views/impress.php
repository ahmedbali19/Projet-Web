<?php

require_once '../core/lib/fpdf/fpdf.php';

include "../core/CommandeC.php";
$CommandeC=new CommandeC();
$listecommande=$CommandeC->afficherCommande();
/**
 *
 */
class myPDF extends FPDF
{

	function header()
	{
		//$this->Image('images/eye.jpg',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'KARMA',0,0,'C');
		$this->Ln(20);
		$this->SetFont('Times','',12);

		$this->Text(8,60,'Liste des commandes:');
		//$this->Text(8,65,'Date :'.date("d-m-Y"));
		//$this->Text(8,70,'Mode de reglement : check');
		$this->Text(230,60,'Commande');
		$this->Text(230,65,'24 rue de la culture citee RTT 2 ben younes , Tunis');
		$this->Text(230,70,'2078 la Manouba');
		$this->Ln(50);


	}
	function footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(196,5,' TEL:+21620258260' ,0,0,'C');
				$this->LN();

		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

	}
	function headerTable(){


		$this->SetFont('Arial','B',12);
		$this->Cell(30,20,'id_commande',1,0,'C');
		$this->Cell(30,20,'date_commande	',1,0,'C');
		$this->Cell(30,20,'mode_paiement',1,0,'C');
		$this->Cell(30,20,'date de naissance	',1,0,'C');


		$this->LN();



	}
	function viewTable($listecommande)
	{
		$this->SetFont('times','',12);
			foreach($listecommande as $commande):


		$this->Cell(30,20,  $commande['id_commande'] ,1,0,'C');
	 	$this->Cell(30,20, $commande['date_commande'],1,0,'L');
	 	$this->Cell(30,20,  $commande['mode_paiement'],1,0,'L');
	 	$this->Cell(30,20, $commande['mail'],1,0,'L');



		$this->LN();

		endforeach;



$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($listecommande);
$pdf->Output();
}
}?>
