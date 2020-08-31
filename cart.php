<?php
	include('inc/header.php');
	if(!isset($_SESSION['cart'])){
		echo "<script>window.location='http://localhost/team05/ecommerce/shop.php'</script>";
	}
	else{
		include 'main.php';
		$obj = new Main();

		//update Item
		if(isset($_POST['submit'])){
			foreach($_SESSION['cart'] as $keys=>$values){
				if($values['item_id'] == $_POST['idd']){
					$item_array = array(
						'item_id' => $_POST['idd'],
						'item_name' =>$_POST['p_name'],
						'item_image' =>$_POST['p_image'],
						'item_price' =>$_POST['P_price'],
						'item_qun' =>$_POST['quantity_up']
					);
					$_SESSION['cart'][$keys] = $item_array;
					// header("location:cart.php");
					echo "<script>window.location='http://localhost/team05/ecommerce/cart.php'</script>";
				}
			}
		}
		// remove Item
		if(isset($_GET['action'])){
			if($_GET['action']=='remove'){
				foreach($_SESSION['cart'] as $keys=>$values){
					if($values['item_id'] == $_GET['id']){
						unset($_SESSION['cart'][$keys]);
						// header("location:cart.php");
						echo "<script>window.location='http://localhost/team05/ecommerce/cart.php'</script>";
					}
				}
			}
		}

?>

<?php

	if(isset($_GET['all'])&& $_GET['all'] == 1){
?>
		<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
			<strong>Already have This Item!</strong> Please Continue Shoping in Other Item.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
<?php
	}
?>

<section class="cart">
	<div class="container mt-3 ">
		<div class="content">
			<div class="cartoption">		
				<div class="cartpage">
				<h2>Your Cart</h2>
					<table class="tblone table table-bordered table-responsive">
						<tr>
							<th width="30%">Product Name</th>
							<th width="10%">Image</th>
							<th width="15%">Price</th>
							<th width="25%">Quantity</th>
							<th width="20%">Total Price</th>
							<th width="10%">Action</th>
						</tr>

				<?php
					if(!empty($_SESSION['cart'])){
						$total = 0;
						foreach($_SESSION['cart'] as $keys => $values){

				?>

						<tr>
							<td><?php echo $values['item_name']; ?></td>
							<td><img src="<?php echo $url;?>/admin/assets/upload/<?php echo $values['item_image']; ?>"></td>
							<td>Tk 
								<?php echo $values['item_price']; ?> 
							</td>
							<td>
								<form action="#" method="post">
									<input style="border: 2px solid coral;" type="number" name="quantity_up" value="<?php echo $values['item_qun']; ?>">

									<input type="hidden" name="p_name" value="<?php echo $values['item_name']?>">

									<input type="hidden" name="p_image" value="<?php echo $values['item_image'];?>">

									<input type="hidden" name="P_price" value="<?php echo $values['item_price']?>">

									<input type="hidden" name="idd" value="<?php echo $values['item_id']?>">

									<input type="submit" name="submit" value="update">
									
								</form>
								
							</td>
							<td>Tk 
								<?php echo $values['item_price'] * $values['item_qun'];?>
							</td>
							<td>
								<a onclick="javascript: return confirm('Are You Sure You Want To Remove This Item!');" class="btn btn-sm btn-danger" href="?action=remove&id=<?php echo $values['item_id'];?>">Remove</a>
							</td>
							
						</tr>

						<?php
							$total = $total + ($values['item_qun']*$values['item_price']);
						}
						?>

					</table>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8 ml-auto">
						<table class="table table-bordered">
							<tbody>
							<tr>
								<td class="text-right"><strong>Sub-Total:</strong></td>
								<td class="text-right">TK <?php echo $total;  ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Shipping cost:</strong></td>
								
								<td class="text-right"> 
									<?php
										$id = $_SESSION['id'];
										$coupon = $obj->coupon($id);
										;
										if(mysqli_num_rows($coupon)>5){
											$Shipping = 0;
										}
										else{
											$Shipping = 100;
										}
											echo $Shipping;
									?>
								</td>
							</tr>
								
							<tr>
								<td class="text-right"><strong>Grand-Total:</strong></td>
								<td class="text-right">TK 
									<?php
										$grand_total = $total + $Shipping;
										echo $grand_total;
									?>
								</td>
							</tr>
							</tbody>

								<?php
									}
								?>	
								
						</table>

					</div>
				</div>
				<div class="row mt-5">
					<div class="col-6 text-center">
						<a href="shop.php">
							<button type="button" class="btn btn-lg shoping-info">
								<i class="fas fa-shopping-cart"> </i> 
							Continue-Shoping</button>
						</a>
					</div>
					<div class="col-6 text-center">
						<a href="cheakout.php">
							<button type="button" class="btn btn-lg cheakout-info">
								<i class="fas fa-check-circle"></i>   
							Cheak-Out ! </button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
			

<?php
	include('inc/footer.php');
	}
	
?>

