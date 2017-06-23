 <?php 

 require 'connection.php';

if(isset($_POST['register'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pw2 = $_POST['pw2'];

	if ($password == $pw2){

		$password = sha1($password);
		
		$sql = "INSERT INTO users (username,password,role) 
				VALUES ('$username','$password','regular')";

				mysqli_query($connectDB,$sql);

				echo "Registered successfully.";
	} else {
		echo "Passwords did not match";
	}
}

 ?>

 <form action="" method="POST">

 <h1>REGISTER</h1>

	Username:<br>
		<input type="text" name='username' required><br>
	Password:<br>
		<input type="password" name='password' required><br>
	Confirm Password:<br>
		<input type="password" name='pw2' required><br>

		<input type="submit" name="register" value="Register"><br><br>

</form>

