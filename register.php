<?php 
include 'include/header.php';
if(!isset($_SESSION['loginuser'])){
?>
<div class="container-fluid" style="background-color: #9F9B9A;">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<form method="POST" action="addUsers.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name: </label>
					<input type="text" name="reg_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Profile: </label>
					<input type="file" name="reg_profile" class="form-control-file">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="reg_email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<input type="Password" name="reg_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone: </label>
					<input type="text" name="reg_phone" class="form-control">
				</div>
				<div class="form-group">
					<label>Address: </label>
					<textarea class="form-control" name="reg_address">
					</textarea>
				</div>
				<!-- <div class="form-group">
					<label>Status: </label>
					<input type="number" name="reg_status" class="form-control">
				</div> -->
				<!-- <div class="form-group">
					<label>Role-ID: </label>
					<input type="number" name="reg_roleID" class="form-control">
				</div> -->

				<input type="submit" class="btn btn-outline-dark float-right mb-3" value="Register">
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php';
}else{
	header("location:index.php");
} ?>

