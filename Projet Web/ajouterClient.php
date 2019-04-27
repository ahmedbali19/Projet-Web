<?php 
include_once '../Entities/client.php';
include_once 'clientC.php';


if(  isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel'])&& isset($_POST['adresse'])&& isset($_POST['codePostal'])&& isset($_POST['sexe'])&& isset($_POST['cin'])&& isset($_POST['email'])&& isset($_POST['login'])&& isset($_POST['password'])&&isset($_POST['etat'])&&isset($_POST['role']))
{

        $client1 = new client( $_POST['nom'] , $_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['codePostal'],$_POST['sexe'],$_POST['cin'],$_POST['email'],$_POST['login'],$_POST['password'],$_POST['etat'],$_POST['role']);
        $client1C = new clientC();
        $client1C->ajouterclient($client1);
     require_once '../lib/phpmailer/PHPMailerAutoLoad.php';
        
        $mail = new PHPMailer();
        $mail->Host = "smtp.gmail.com";
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";

        //$mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Username = "alihachem.tahar@esprit.tn";
        $mail->Password = "hachem123";

        $mail->SMTPSecure = "tls";
        $mail->SMTPOptions = array(
        'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
        )
        ); 
        $mail->Port = 587; 
        $mail->Subject = "Bienvenue ";
        $mail->isHTML(true);


        

        $mail->Body='test';
        $mail->setFrom('alihachem.tahar@esprit.tn','Madame JEDIDI');
                
                $mail->addAddress($_POST['email']);
                
        
        if($mail->send())
                {
                        echo 'mail sent';
                }
                else
                {
                        echo $mail->ErrorInfo;
                }





        header("location:../index.php") ;
        
       
        
}               
                  
        

else 
{
        echo "Champs Obligatoire";
}





 ?>