<?php
	session_start();
	require_once 'connexion.php';
	if(ISSET($_POST['register'])){
		if( $_POST['username'] != "" || $_POST['password'] != "" || $_POST['email']!="" ){
			try{
				$username = $_POST['username'];
				$email = $_POST['email'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];
				$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `users` VALUES ('$username', '$password' ,'$email')";
				$cn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$cn = null;
				echo "
				<script>alert('registration avec success!')</script>
				<script>window.location = 'login.php'</script>";
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'register.php'</script>
			";
		}
	}
?>