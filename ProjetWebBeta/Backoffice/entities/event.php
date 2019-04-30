<?php
class Event
{
	private $id;
	private $titre;
	private $description;
	private $adresse;
	private $date;
	private $heure;
	private $type;
	private $image;


	function __construct($titre,$description,$adresse,$date,$heure,$type)
	{
		
		$this->titre=$titre;
		$this->description=$description;
		$this->adresse=$adresse;
		$this->date=$date;
		$this->heure=$heure;
		$this->type=$type;
		$this->image=$image;

	}



	function getId()
	{
		return $this->id;
	}
	function getTitre()
	{
		return $this->titre;
	}
	function getDescription()
	{
		return $this->description;
	}
	function getAdresse()
	{
		return $this->adresse;
	}
	function getDate()
	{
		return $this->date;
	}
	function getHeure()
	{
		return $this->heure;
	}
	function getType()
	{
		return $this->type;
	}
	function getImage()
	{
		return $this->image;
	}
	

}


?>