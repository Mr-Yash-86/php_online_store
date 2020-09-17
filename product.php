<?php 
include 'include/header.php';
include 'backend/dbconnect.php';

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id";

$stmt=$pdo->prepare($sql);
$stmt->execute();
$items=$stmt->fetchAll();
 ?>
	<div id="itemList">
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-7 text-center">
					<h1 class="text-uppercase">Our Available Lists is HERE</h1>
					<hr>
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
		<div class="container mt-5" id="scroll">
			<div class="row justify-content-center">
				<a href="#" class="previous round"> &#8249; </a>
				<a href="#" class="previous round"> 1 </a>
				<a href="#" class="previous round"> 2 </a>
				<a href="#" class="previous round"> 3 </a>
				<a href="#" class="previous round"> 4 </a>
				<a href="#" class="next round"> &#8250; </a>
				
			</div>
		</div>
	</div>
<?php 
include 'include/footer.php';
 ?>