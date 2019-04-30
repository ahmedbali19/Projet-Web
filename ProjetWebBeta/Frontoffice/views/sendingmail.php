<?php
include_once "../config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.0.7/src/Exception.php';
require 'PHPMailer-6.0.7/src/PHPMailer.php';
require 'PHPMailer-6.0.7/src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = "smtpauth159@gmail.com";
$mail->Password = "Azerty-159";
$mail->setFrom("ahlem.nirvana@gmail.com");
$mail->addAddress($_GET['mail']);
$mail->Subject = 'Confirmation de la commande';
$sql="SELECT * from commande JOIN lignedecommande on commande.id_commande =lignedecommande.id_commande WHERE commande.id_commande =(SELECT id_commande from commande ORDER BY id_commande DESC LIMIT 1)";
$db = config::getConnexion();

try
{
$liste=$db->query($sql);
$liste->execute();
}
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
$products =$liste->fetchAll();
$body ="l'id de votre commande est le suivant : ".$products[0]['id_commande']."<br>";
$body .="vos produits sont : <br>";
$price=0;
foreach ($products as $product) {
  $body.=" produit :".$product['nom']." | quantite : ".$product['quantite']." | prix : ".$product['prix']."<br>";
  $price+=$product['prix'];
}
$body.= "le prix totale est ".$price;
$mail->msgHTML($body); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Votre message a éte envoyer !";

}
?>
