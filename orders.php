<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$address = $_POST['address'];




		$sql = "INSERT INTO orders(fullname, email, address) VALUES ( :fullname, :email, :address)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':fullname', $fullname);
		$prep->bindParam(':email', $email);
		$prep->bindParam(':address', $address);

		$prep->execute();

					

  		header( "Location: index2.php" ); 


		}
				


?>
