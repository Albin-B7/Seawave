<?php 


	$host='localhost';
	$db ='seawave';
	$user='root';
	$pass='';

	try {
		$con = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		
        
	


	} 
	catch (Exception $e) {
 echo "Connection failed: " . $e->getMessage();
	}



 ?>