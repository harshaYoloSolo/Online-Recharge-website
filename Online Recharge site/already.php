<?php
	$username = "";
	$email = "";
	$errors = "";
	// connect to database
	$db = mysqli_connect('localhost','root','123456789','recharge');
		session_start();
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['Password_1'];
		$sql = "SELECT adminname,password FROM admin where adminname = '$username' and password = '$password' ";
			$r=mysqli_query($db, $sql);
			if (mysqli_num_rows($r) > 0) {
					    
						$_SESSION["username"] = $username;
					header("Location: fai.php"); //Redirect browser */
					exit();
    		//output data of each row
				} else {
    				echo "<script>alert('User Does not Exist. Redirecting to Main Page.');</script>";
			echo "<p><h1>Redirecting....................</h1></p>";
			header("Refresh:0.5;url=SE.php");
}
		}
	
?>

