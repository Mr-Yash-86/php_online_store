<?php 
	session_start();
	include 'backend/dbconnect.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':password',$password);
	$stmt->execute();
	$data=$stmt->fetch(PDO::FETCH_ASSOC);

	if($data){
		$_SESSION['loginuser']=$data;

		if($_SESSION['loginuser']){
			if($_SESSION['loginuser']['role_id']==1){
				header("location:index.php");
			}else{
				header("location:backend/index.php");
			}
		}
	}else{
		header("location:login.php");
	}
 ?>

 