<?php // create dropdown


	require('connection.php');

		// $username = $_POST['username'];
		// $password = sha1($_POST['password']);
		$sql = "SELECT * FROM items";

		$result = mysqli_query($connectDB,$sql);

		if (mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_assoc($result)) {
				extract($row);


				echo $itemTitle . " | " . $itemName . " | " . $itemDesc . " | " . $itemPrice . " | " . "<img src ='$itemImage'>" . " | " . $itemCategory .'<br>';
				

				// session_start();
				// $_SESSION['message'] = "Login Successful";
				// $_SESSION['username'] = $username;
				// $_SESSION['role'] = $role;

				// echo "Welcome back " . $_SESSION['username'] . "! What's on your mind? <br>";
			

			}

			
		}


?>
