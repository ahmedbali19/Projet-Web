<?php //var_dump($_POST) ;die();




  if (!empty($_POST['submit']))
  {
      $nom=$_POST['name'];
    
      $mail= $_POST['mail'];
  

  require ('fpdf181/fpdf.php');
 echo "pleaaaaase";

   $pdf = new pdf( p,mm,A4);
  $pdf -> AddPage();
 



 
$pdf -> Cell(10,10,$nom);
 $pdf -> output ();

}
?>