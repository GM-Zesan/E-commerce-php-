<?php
	include('inc/header.php');
	include 'main.php';
	$obj = new Main();


	if(!isset($_GET['id']) || $_GET['id'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['id'];
        $single_p = $obj->single_product($id);
        
	}
	
	
?>

<?php
	if($single_p->num_rows>0){
		while($single_p_row = $single_p->fetch_assoc()){
			$disco = $single_p_row['product_Discount'];
			$dis = $disco/100;
			$discount = $single_p_row['product_Price']*$dis;
			$dis_price = $single_p_row['product_Price']-$discount;
?>

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="product">
					<img src="<?php echo $url;?>/admin/assets/upload/<?php echo $single_p_row['product_Image'];?>" class="image-fluid h-100 w-100">
				</div>
			</div>
			<div class="col-md-6 pl-5">

				<form action="cart_process.php?action=add&id=<?php echo $single_p_row['product_Id'];?>" method="post">
					<p class="new-arrival text-center" style="text-transform:uppercase;">
						<?php echo $single_p_row['product_Condition'];?>
					</p>
					<h2><?php echo $single_p_row['product_Name'];?></h2>
					
					<!-- <i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i> -->

					<p class="price">Tk <?php echo $dis_price;?></p>
					<p><b>Condition: </b>
						<?php echo $single_p_row['product_Condition'];?>
					</p>
					<p><b>Brand: </b><?php echo $single_p_row['product_Brand'];?></p>
					

					
					<label>Quantity: </label>
					<input type="number" name="quantity" value="1">

					<input type="hidden" name="image" value="<?php echo $single_p_row['product_Image'];?>">

					<input type="hidden" name="hidden_Name" value="<?php echo $single_p_row['product_Name'];?>">

					<input type="hidden" name="hidden_Price" value="<?php echo $dis_price;?>">

					<button type="submit" name="addCart" class="btn btn-danger">Add to Cart</button>
					
				</form>
				
				
			</div>
		</div>
		<div class="product-description">
			<h5>Product Description</h5>
			<p>
				<?php echo $single_p_row['product_Details'];?>
			</p>
			<hr>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="mt-5">
			<h3 class="text-center similar caption pb-4">
				<span>Similar</span>
			</h3>
			<div class="row">

			<?php
				$similar = $single_p_row['product_Section'];
				$similar_p = $obj->similar($similar);

				if($similar_p->num_rows>0){
					while($similar_p_row = $similar_p->fetch_object()){
			?>

				<div class="col-md-3 col-sm-6 mb-2 text-center">
					<div class="product-top">
						<img class="product" src="<?php echo $url;?>/admin/assets/upload/<?php echo $similar_p_row->product_Image;?>">
						<div class="overlay-right">
							<a href="single_product.php?id=<?php echo $similar_p_row->product_Id; ?>">
								<button type="button" class="btn btn-secondary" title="Quick Shop">
									<i class="fas fa-eye"></i>
								</button>
							</a>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
								<i class="fas fa-heart"></i>
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
								<i class="fas fa-shopping-cart"></i>
							</button>
						</div>
						<a href="single_product.php?id=<?php echo $similar_p_row->product_Id; ?>">
							<button type="submit" name="" class="buy-now">Details</button>
						</a>
					</div>
					<div class="product-bottom text-center">
						<!-- <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i> -->
						<h3><?php echo $similar_p_row->product_Name;?></h3>
						<h5 class="mt-0">Tk <?php echo $similar_p_row->product_Price;?></h5>
					</div>
				</div>

			<?php  
					}
				}
			?>

			</div>
		</div>
	</div>
</section>

<?php
		}
	}
	include('inc/footer.php');
?>

