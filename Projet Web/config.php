<?php 
class config {
private static $instance = NULL;
public static function getConnexion() {
 if (!isset(self::$instance)) {
self::$instance = new PDO('mysql:host=localhost;dbname=mounir',
'root','');
 }
 return self::$instance;
 }
 }

 ?>