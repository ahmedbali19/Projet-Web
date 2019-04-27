<?php 
session_start();
session_destroy();
	require 'index.php';
						echo "<script>document.location.href='http://localhost/temp/Front/index.php';</script>";
?>