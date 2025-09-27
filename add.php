
<?php 	

		include_once('config.php');

		if (isset($_POST['submit']))
		{


			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "INSERT INTO users(fullname,email,username,password) VALUES (:fullname,:email,:username,:password)";

			$newUser = $con->prepare($sql);

			$newUser->bindParam(':fullname',$fullname);
			$newUser->bindParam(':email',$email);
			$newUser->bindParam(':username',$username);
			$newUser->bindParam(':password',$password);

			$newUser->execute();

			header("Location:index2.php");


		}
 ?>
 <br>

 <a href="index.php">Home</a>