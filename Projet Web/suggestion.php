<?php
class suggestion{
     private $idUtilisateur;
	private $message;
		private $type;
	
	
	public function getidUtilisateur(){
		return $this->idUtilisateur;
	}

	public function getmessage(){
		return $this->message;
	}

	public function gettype(){
		return $this->type;
	}
	
	

public function setidUtilisateur($idUtilisateur){
		$this->idUtilisateur=$idUtilisateur;
	}
	public function setmessage($message){
		$this->message=$message;
	}
	public function settype($type){
		$this->type=$type;
	}
	

	public function __construct($idUtilisateur,$message,$type)
{
		$this->idUtilisateur=$idUtilisateur;
		$this->message=$message;
		$this->type=$type;
		
		
	
}
}
?>