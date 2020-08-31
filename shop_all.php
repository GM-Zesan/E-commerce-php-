<?php
	include 'main.php';
	$obj = new Main();

    if(isset($_GET['all']) && $_GET['all'] == 5){
        $data = $obj->view_all_data();
    }

	include('inc/shop_header.php');

?>
	<div>
		<div class="home" style="background-image: url(asset/image/slideshow/09.jpg);">
			<div class="text-center">
				<a href="" class="">
					<button type="button" style="position:absolute;bottom:50px;" class="btn start_button">Shop Now</button>
				</a>
			</div>
		</div>

		<div class="row m-0 mt-5">

		<?php
			if($data->num_rows>0){
				while($row = $data->fetch_assoc()){
		?>

			<div class="col-md-3 col-sm-6 mb-5 text-center">
				<div class="product-top" style="background:#969696">
					<img class="product" src="<?php echo $url;?>/admin/assets/upload/<?php echo $row['product_Image'];?>">
					<div class="overlay-right">
						<a href="single_product.php?id=<?php echo $row['product_Id']; ?>">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
								<i class="fas fa-eye"></i>
							</button>
						</a>
						<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class="fas fa-heart"></i>
						</button>
						<a href="single_product.php?id=<?php echo $row['product_Id']; ?>">
							<button type="button" class="btn btn-secondary" title="Add to Cart">
								<i class="fas fa-shopping-cart"></i>
							</button>
						</a>
					</div>
					<a href="single_product.php?id=<?php echo $row['product_Id']; ?>">
						<button type="submit" name="" class="buy-now">Details</button>
					</a>
				</div>
				<div class="product-bottom text-center">
					<!-- <i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i> -->
					<h3><?php echo $row['product_Name']; ?></h3>
					<h5>Tk <?php echo $row['product_Price']; ?></h5>
				</div>
			</div>

		<?php 
				}
			}
		?>
		</div>
	</div>
	
<?php
	include('inc/shop_footer.php');
?>




			
			

			