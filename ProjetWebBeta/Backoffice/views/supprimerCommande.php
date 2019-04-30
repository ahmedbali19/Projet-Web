<?php
session_start();

require_once '../core/CommandeC.php';
		$commande=new CommandeC();
		if (isset($_GET["id"]))
		{
			$commande ->deleteCommande($_GET['id']);
			 header('Location: commandeliste.php');






include "../Nexmo/src/NexmoMessage.php" ;




/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('c9b20925','EwW6ALdiZrnhOSnT');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message.
	$info = $nexmo_sms->sendText( '21628598586', 'Wapi', 'Votre commande a été supprimé ' );

	// Step 3: Display an overview of the message


	// Done!

}

 ?>
