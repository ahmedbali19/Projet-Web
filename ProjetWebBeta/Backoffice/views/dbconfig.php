<?php
class Database
{   
   
   public function connexion()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="projet web";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      
		return $conn;
	}
}
?>