<?php
class Pub
{
	private $id;
	private $nom;
	private $marque;
	private $image;
	private $email;


	function __construct($nom,$marque,$image,$email)
	{
		
		$this->nom=$nom;
		$this->marque=$marque;
		$this->image=$image;
		$this->email=$email;

	}



	function getId()
	{
		return $this->id;
	}
	function getnom()
	{
		return $this->nom;
	}
	function getmarque()
	{
		return $this->marque;
	}
	
	function getImage()
	{
		return $this->image;
	}
	function getEmail()
	{
		return $this->email;
	}	
	

}


?>