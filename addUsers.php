<?php 
include'backend/dbconnect.php';

$name=$_POST['reg_name'];
$profile=$_FILES['reg_profile'];
$email=$_POST['reg_email'];
$password=$_POST['reg_password'];
$phone=$_POST['reg_phone'];
$address=$_POST['reg_address'];
$status=1;
$roleID=1;


/*echo "$name $email $password $phone $address $status";
print_r($profile);*/

$basepath="backend/images/users/";//choose image is saved in this path;
$fullpath=$basepath.$profile['name'];
move_uploaded_file($profile['tmp_name'], $fullpath);

$sql="INSERT INTO users (name,profile,email,password,phone,address,status,role_id) VALUES(:r_name,:r_profile,:r_email,:r_password,:r_phone,:r_address,:r_status,:r_role_id)";

$stmt=$pdo->prepare($sql);
$stmt->bindParam(':r_name',$name);
$stmt->bindParam(':r_profile',$fullpath);
$stmt->bindParam(':r_email',$email);
$stmt->bindParam(':r_password',$password);
$stmt->bindParam(':r_phone',$phone);
$stmt->bindParam(':r_address',$address);
$stmt->bindParam(':r_status',$status);
$stmt->bindParam(':r_role_id',$roleID);

$stmt->execute();

if($stmt->rowCount()){
	header("location:register.php");

}else{
	echo "Error!!!";

}

 ?>