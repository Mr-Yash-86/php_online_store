<?php 
include 'include/header.php';
include 'include/carousel.php';
include 'backend/dbconnect.php';

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id LIMIT 8";

$stmt=$pdo->prepare($sql);
$stmt->execute();
$items=$stmt->fetchAll();

 ?>
	<div id="arrival" class="py-3">
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-7 text-center">
					<h1 class="text-uppercase">New Arrival</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center mt-5">
				<?php 
					foreach ($items as $item) {
	
				 ?>
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mt-3">
					<div class="card" style="">
						<img src="backend/<?=$item['photo']?>" class="card-img-top" alt="..." width="100px" height="150px">
						<div class="card-body">
							<p class="text-muted py-1 my-0"><b>CODENO: </b><?=$item['codeno']?></p>
							<p class="text-muted py-1 my-0"><b>NAME: </b><?=$item['name']?></p>
							<p class="text-muted py-1 my-0"><b>PRICE: </b>
								<?php 
								if($item['discount']){
									echo $item['discount'];
								 ?>
								 <del><?=$item['price']?></del>
								 <?php 
								 	}else{
								 		echo $item['price'];
								 	}
								  ?>

							</p>
							<a href="javascript:void(0)" class="btn btn-primary addtocart" data-id="<?=$item['id']?>" data-name="<?=$item['name']?>" data-photo="<?=$item['photo']?>
							" data-price="<?=$item['price']?>" data-discount="<?=$item['discount']?>">Add to Cart</a>
						</div>
					</div>
				</div>
				<?php 
					}
				 ?>
				
			</div>
			
		</div>	
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-7 text-center">
					<a href="product.php" class="btn btn-outline-primary">View More</a>
				</div>
			</div>
		</div>
	</div>
	<div id="contact">
		<div class="container">
			<div class="row justify-content-center py-3">
				<div class="col-7 text-center">
					<h1 class="text-uppercase">Contact Us</h1>
				</div>
			</div>
			<div class="row justify-content-center mt-3">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
					<div class="card p-3">
						<h5>Address</h5>
						<p>A108 Adam Street, NY 533022, USA</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
					<div class="card p-3">
						<h5>Email</h5>
						<p>aaa@gmail.com</p>
						<p>bbb@gmail.com</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
					<div class="card p-3">
						<h5>Phone</h5>
						<p>09970072029</p>
						<p>09699117652</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
					<!-- Form-->
					<form>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="mail" class="form-control" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<textarea class="form-control"></textarea>
						</div>
						<button type="submit" id="contactBtn">Send Message</button>
					</form>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
					<!-- Map -->
					<div class="map-responsive">
						<!-- iframe -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.204813135783!2d96.12647891421135!3d16.81619248842326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb34335a92f5%3A0xea3210d0410309d7!2sTimes%20City%20Yangon!5e0!3m2!1sen!2smm!4v1596705735824!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	include 'include/footer.php';
 ?>
