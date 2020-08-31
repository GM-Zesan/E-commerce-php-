<?php
	include 'main.php';
	$obj = new Main();

	
	$h_shopping = $obj->happy_shopping();
	$feature_p = $obj->feature();
	$data = $obj->new_product();
	$best_seller_p = $obj->best_seller();
	$testimonial = $obj->testimonial();

	if(isset($_POST['submit']) && $_POST['review'] != null){
		$review = $_POST['review'];

		$write_review = $obj->write_review($review);

		if($write_review == true){
			echo "<span class='text-success text-center'><b>Review Submit successfully.</b></span>";
		}
	}

	include('inc/header.php');
	include('inc/slider.php');
?>

<section id="about">
	<div class="container mt-5 wow fadeInUp" data-wow-duration="1s">
		<?php
			if($h_shopping->num_rows>0){
				while($h_shopping_row = $h_shopping->fetch_object()){

		?>
		<h3 class="text-center caption pb-4">
			<span style="border-bottom: 3px solid #F26822">
				<?php echo $h_shopping_row->happy_Title;?>
			</span>
		</h3>
		<div class="row m-0">
			<div class="col-lg-7">
				<p class="para">
					<?php echo $h_shopping_row->happy_Body;?>
				</p>
			</div>
			<div class="col-lg-5 text-center">
				<a href="#">
					<img src="<?php echo $url;?>/asset/image/1.jpg<?php echo $h_shopping_row->happy_Image;?>" class="image-fluid" style="width: 100%;">
				</a>
			</div>
		</div>
		<?php
				}
			}
		?>
	</div>
</section>

<section id="fetcher">
	<div class="mt-5 wow fadeIn" data-wow-duration="1.5s">
		
		<h3 class="text-center caption pb-4">
			<span style="border-bottom: 3px solid #F26822">Feature Product</span>
		</h3>
		<div class="text-center">
			<div class="row m-0">
			<?php
				if($feature_p->num_rows>0){
					while($feature_row = $feature_p->fetch_object()){
			?>
		
				<div class="col-md-4">
					<figure class="snip1104 <?php echo $feature_row->feature_Class?>">
						<img src="asset/image/product/<?php echo $feature_row->feature_Image?>" />
						<figcaption>
							<h2><?php echo $feature_row->feature_Fname?>  <span> <?php echo $feature_row->feature_Lname?></span></h2>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

			<?php			
					}
				}
			?>

			</div>
		</div>
	</div>
</section>


<section id="new_arivel">
	<div class="container-fluid mt-5 wow fadeInUp" data-wow-duration="1s">
		<h3 class="text-center caption pb-4"><span style="border-bottom: 3px solid #F26822">New Arrival Item</span></h3>

		<div class="row m-0">

		<?php
			if($data->num_rows>0){
				while($row = $data->fetch_assoc()){
		?>

			<div class="col-md-3 col-sm-6 mb-2 text-center">
				<div class="product-top">
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
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fas fa-shopping-cart"></i>
						</button>
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
	</div>
</section>

<section id="best-seler">
	<div class="container-fluid mt-5 wow fadeInUp" data-wow-duration="1s">
		<h3 class="text-center caption pb-4"><span style="border-bottom: 3px solid #F26822">Best Seller</span></h3>
		<div class="row m-0">

		<?php
			if($best_seller_p->num_rows>0){
				while($best_seller_row = $best_seller_p->fetch_object()){
		?>

			<div class="col-md-3 col-sm-6 mb-2 text-center">
				<div class="product-top">
					<img class="product" src="<?php echo $url;?>/admin/assets/upload/<?php echo $best_seller_row->product_Image;?>">
					<div class="overlay-right">
						<a href="single_product.php?id=<?php echo $best_seller_row->product_Id; ?>">
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
					<a href="single_product.php?id=<?php echo $best_seller_row->product_Id; ?>">4
						<button type="submit" name="" class="buy-now">Details</button>
					</a>
				</div>
				<div class="product-bottom text-center">
					<!-- <i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i> -->
					<h3><?php echo $best_seller_row->product_Name; ?></h3>
					<h2><?php $disco = $best_seller_row->product_Discount; ?></h2>

					<?php
						if($disco>0){
					?>

					<h5>
						<span style="text-decoration: line-through;">Tk <?php echo $best_seller_row->product_Price;?></span>
						<span class="badge badge-danger"><?php echo $disco?>% discount</span>
					</h5>
					<span>Tk
						<?php
							$dis = $disco/100;
							$discount = $best_seller_row->product_Price*$dis;
							echo $best_seller_row->product_Price-$discount;
						?>
					</span>
					<?php
						}else{
					?>
					<h5>
						Tk <span><?php echo $best_seller_row->product_Price;?></span>
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
	</div>
</section>


<section id="fashion">
	<div class="fashion mt-3">
		<img src="asset/image/fashion.jpg" class="w-100">
	</div>
</section>


<section id="testimonial-reviews">
	<div class="reviews wow fadeInUp" data-wow-duration=".5s">
		<div class="container mt-5 mb-5">
			<h3 class="text-center caption pb-4"><span style="border-bottom: 3px solid #F26822">Claint Reviews</span></h3>
			<div class="row">
				<div id="testimonial-slider" class="owl-carousel">

				<?php
					if($testimonial->num_rows>0){
						while($testimonial_row = $testimonial->fetch_object()){
				?>

					<div class="testimonial" style="min-height: 330px;">
						<span class="icon fas fa-quote-left"></span>
						<p class="description">
							<?php echo $testimonial_row->testimonial_Body;?>
						</p>
						<div class="testimonial-content" style="bottom: -110px;">
							<div class="pic">
								<img src="asset/upload/<?php echo $testimonial_row->customer_Image;?>">
							</div>
							<h3 class="title"><?php echo $testimonial_row->customer_Fname;?></h3>
							<span class="post"><?php echo $testimonial_row->customer_Email;?></span>
						</div>
					</div>

				<?php
						}
					}
				?>

				</div>
			</div>

			<?php
				if(isset($_SESSION['id'])){
			?>

			<div class="write_review p-5 bg-light" style="border-radius:10px;">
				<h2 class="caption pb-4 text-center">
					<span style="color: #F26822">Write A Reviews</span>
				</h2>
				<form action="#" method="post" class=""style="width:60%; margin:0 auto;">
				
					<textarea type="text" name="review" style="width:100%;" class="signup form-control"></textarea>
					<div class="text-center">
						<button type="submit" name="submit" class="btn review" style="background-color: #F26822; color: #fff;border-radius: 0; font-weight: bold;">Submit 
							<i class="fas fa-chevron-circle-right pt-1"></i>
						</button>
					</div>
					
				</form>
			</div>
			<?php
				}
			?>
		</div> 
	</div>
</section>


<section id="question">
	<div class="container-fluid mt-3 text-center wow fadeInUp" data-wow-duration="1s">
		<h3 class="mb-3">Have Any Questions?</h3>
		<a href="contact.php">
			<button type="button" class="btn question"><i class="fas fa-phone "></i> Contact Us</button>
		</a>
	</div>
</section>


<?php
	include('inc/footer.php');
?>


			