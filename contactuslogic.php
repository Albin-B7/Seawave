<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];




		$sql = "INSERT INTO contactus(fullname, email, message) VALUES ( :fullname, :email, :message)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':fullname', $fullname);
		$prep->bindParam(':email', $email);
		$prep->bindParam(':message', $message);

		$prep->execute();

					

  		header( "Location: index2.php" ); 


		}
				


?>
