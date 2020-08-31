<?php
	include 'main.php';
	$obj = new Main();
    include('inc/shop_header.php');
    
    if(!isset($_POST['submit']) || $_POST['search'] == NULL){
        echo "SORRY! Nothing Found for you";
    } 
    else{
		$kw = $_POST['search'];
		$data = $obj->search($kw);
	} 

?>
	<div>
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
					<h2><?php $disco = $row['product_Discount']; ?></h2>

					<?php
						if($disco>0){
					?>

					<h5>
						<span style="text-decoration: line-through;">Tk <?php echo $row['product_Price'];?></span>
						<span class="badge badge-danger"><?php echo $disco?>% discount</span>
					</h5>
					<span>Tk
						<?php
							$dis = $disco/100;
							$discount = $row['product_Price']*$dis;
							echo $row['product_Price']-$discount;
						?>
					</span>
					<?php
						}else{
					?>
					<h5>
						Tk <span><?php echo $row['product_Price'];?></span>
					</h5>
					<?php
						}
					?>
				</div>
			</div>

		<?php 
				}
			}
		?>
		</div>
		<div class="text-center">
			<a href="shop_all.php?all=5" class="btn btn-sm btn-info" style="border-radius:0px">
				View More
			</a>
		</div>
	</div>
	
<?php
	include('inc/shop_footer.php');
?>
