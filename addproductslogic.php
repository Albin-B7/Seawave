
<?php 	

		include_once('config.php');

		if (isset($_POST['submit']))
		{


			$fullname = $_POST['name'];
			$email = $_POST['description'];
			$username = $_POST['price'];

			$image_name = $_POST['image']['name'];
        $source_path = $_POST['image']['tmp_name'];
        $destination_path = "images/category/".$image_name;
        $upload = move_uploaded_file($source_path, $destination_path);
        if($upload==false)
        {
        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
        header('location:'.SITEURL.'index.php');
        die();
        }
        }
        else{
       
        $image_name="";
        }


			$sql = "INSERT INTO allproducts(name,description,price,image) VALUES (:name,:description,:price,'$image_name')";

			$newUser = $con->prepare($sql);

			$newUser->bindParam(':name',$name);
			$newUser->bindParam(':description',$description);
			$newUser->bindParam(':price',$price);
			$newUser->bindParam(':image',$image);

			$newUser->execute();

			header("Location:index2.php");


		}
 ?>
 <br>

 <a href="index.php">Home</a>