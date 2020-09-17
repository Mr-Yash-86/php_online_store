<?php 
	include 'dbconnect.php';

	$cname=$_POST['category_name'];
	$cphoto=$_FILES['category_photo'];
	//echo "$cname";
	//print_r($cphoto);

	$basepath="images/categories/";
	$fullpath=$basepath.$cphoto['name'];
	move_uploaded_file($cphoto['tmp_name'], $fullpath);

	$sql="INSERT INTO categories(name,photo) VALUES(:cat_name,:cat_photo)";

	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':cat_name',$cname);
	$stmt->bindParam(':cat_photo',$fullpath);

	$stmt->execute();

	if($stmt->rowCount()){
		header('location:categories_create.php');

	}else{
		echo "ERROR!!!";
	}

 ?>