<?php
	session_start();
if(isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_id'] == 2){ 
	include 'include/header.php';
 ?>

 <div class="container-fluid">
 	<h1 class="h3 mb-4 text-gray-800 text-center">Brands Create</h1>
 	<div class="row">
 		<div class="offset-md-2 col-md-8">
 			<form method="POST" action="addBrands.php" enctype="multipart/form-data">
 				<div class="form-group">
 					<label>Brand Name</label>
 					<input type="text" name="brand_name" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Brand Logo</label>
 					<input type="file" name="brand_logo" class="form-control-file">
 				</div>
 				<input type="submit" class="btn btn-outline-primary float-right mb-3" value="Save">
 			</form>
 			
 		</div>
 		
 	</div>
 	
 </div>
 <?php }else{
    header("location:../index.php");
  } ?>