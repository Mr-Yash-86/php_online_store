<?php
session_start(); 
include 'backend/dbconnect.php';

$sql="SELECT * FROM subcategories";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$subcategories=$stmt->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Store</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image/gif" href="images/logo.jpg" sizes="16x16">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script type="text/javascript" src="custom.js"></script> -->
	<!-- Icofont -->
	<link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<div id="banner">
		<div id="container">
			<nav class="navbar navbar-expand-lg navbar-dark
			">
			<a class="navbar-brand" href="#">BP</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-auto">
					<li class="nav-item active mx-5">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item mx-5">
						<a class="nav-link" href="product.php">Products <span class="sr-only"></span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Category
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php 

							foreach ($subcategories as $subcategory) {
								?>
								<a href="categories.php?id=<?=$subcategory['id']?>" class="dropdown-item">
									<?=$subcategory['name']?>
								</a>
							<?php } ?>
						</div>
					</li>

					<?php 
					if(isset($_SESSION['loginuser'])){

						?>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?=$_SESSION['loginuser']['name']?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
								<a class="dropdown-item" href="logout.php">LogOut</a>
							</div>
						</li>
					<?php }else{

						?>
						<li class="nav-item active mx-5">
							<a class="nav-link" href="register.php">Register <span class="sr-only"></span></a>
						</li>
						<li class="nav-item active mx-5">
							<a class="nav-link" href="login.php">Login <span class="sr-only"></span></a>
						</li>
					<?php } ?>
					<li class="nav-item active mx-5">
						<a class="nav-link" href="checkout.php" id="count">
							<span class="p1 fa-stack has-badge" id="item_count">
								<i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i>
							</span></a>
						</li>
					</ul>
				</div>
			</nav>


		</div>