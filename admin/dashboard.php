<?php
	include 'main.php';
    $obj = new Main();
	include('inc/header.php');
?>
<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="sortable">
		<div class="row" style="padding: 6rem;">
			<div class="col-lg-4 col-sm-12">
				<div class="card socailicons card-draggable facebook-like1 shadow">
					<div class="card-body  mb-0">
						<small class="social-title">Sells</small>
						<h3 class="text-xxl text-white  mb-0">
								<?php
									$org = $obj->sell_count();        
									if($org){
										$count = mysqli_num_rows($org);
										echo "$count";
									}
								?>
						</h3>
						<i class="fas fa-chart-line"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="card socailicons card-draggable google-plus1 shadow">
					<div class="card-body  mb-0">
						<small class="social-title">Order</small>
						<h3 class="text-xxl text-white  mb-0">
								<?php
									$apple = $obj->order_count();        
									if($apple){
										$count = mysqli_num_rows($apple);
										echo "$count";
									}
								?>
						</h3>
						<i class="fas fa-cart-arrow-down"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="card socailicons card-draggable twitter1 shadow">
					<div class="card-body  mb-0">
						<small class="social-title">User</small>
						<h3 class="text-xxl text-white  mb-0">
								<?php
									$user = $obj->user_count();        
									if($user){
										$count = mysqli_num_rows($user);
										echo "$count";
									}
								?>
						</h3>
						<i class="fas fa-users"></i>
					</div>
				</div>
			</div>
		</div><!-- Row -->
	</div><!-- Sortable -->

<?php
	include('inc/footer.php');
	
?>