<?php 

	require 'connection.php';

	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$name = $_POST['name'];
		$desc = $_POST['desc'];
		$price = $_POST['price'];
		$image = $_POST['image'];
		$category = $_POST['category'];


	// if ($password == $pw2){

	// 	$password = sha1($password);
		
	// 	$sql = "INSERT INTO users (username,password,role) 
	// 			VALUES ('$username','$password','regular')";

		$sql = "INSERT INTO items (Itemtitle,Itemname,Itemdesc,Itemprice,Itemimage,Itemcategory) 
				VALUES ('$title','$name','$desc','$price','$image','$category')";

				mysqli_query($connectDB,$sql);

				echo "Item Added successfully.";
	// } else {
	// 	echo "Passwords did not match";
	}
	





 ?>

<form action="" method="POST">
<h1>ADD ITEMS</h1>
	Title: <input type="text" name='title'><br><br>
	Name: <input type="text" name='name'><br><br>
	Desc: <input type="text" name='desc'><br><br>
	Price: <input type="text" name='price'><br><br>
	Image URL: <input type="text" name='image'><br><br>
	Category: <input type="text" name='category'><br><br>
			   <input type="submit" name="submit" value="Submit"><br><br>

</form>