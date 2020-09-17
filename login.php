<?php 
include 'include/header.php';
if(!isset($_SESSION['loginuser'])){

 ?>

 <div class="container-fluid mt-5">
 	<div class="row">
 		<div class="offset-md-3 col-md-6">
 			<form method="POST" action="signin.php">
 				<div class="form-group">
 					<label>Email:</label>
 					<input type="text" name="email" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Password:</label>
 					<input type="password" name="password" class="form-control">
 				</div>
 				<input type="submit" value="Login" class="btn btn-outline-success float-right mb-3">
 			</form>
 			
 		</div>
 		
 	</div>
 	
 </div>

 <?php 
 }
 else{
 	header("location:index.php");
 } ?>

 