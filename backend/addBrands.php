<?php 
	include 'dbconnect.php';

	$bname=$_POST['brand_name'];
	$blogo=$_FILES['brand_logo'];
	//echo "$bname";
	//print_r($blogo);

	$basepath="images/brand/";
	$fullpath=$basepath.$blogo['name'];
	move_uploaded_file($blogo['tmp_name'], $fullpath);

	$sql="INSERT INTO brands(name,logo) VALUES(:brands_name,:brands_logo)";

	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':brands_name',$bname);
	$stmt->bindParam(':brands_logo',$fullpath);

	$stmt->execute();

	if($stmt->rowCount()){
		header('location:brands_create.php');

	}else{
		echo "ERROR!!!";
	}

 ?>