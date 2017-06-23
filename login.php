<?php 
	
	if(isset($_POST['login'])){
		require('connection.php');

		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($connectDB,$sql);

		if (mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				

				session_start();
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;

				echo "Welcome back " . $_SESSION['username'] . "! What's on your mind? <br>";
			

			}

			
		}
	}

 ?>
<br>
<form action="" method="POST">
	Username:<br>
		<input type="text" name='username'><br>
	Password:<br>
		<input type="password" name='password'><br><br>		
		<input type="submit" name="login" value="Log-in"><br><br>

</form>