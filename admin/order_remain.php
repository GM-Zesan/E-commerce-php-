<?php
	include 'main.php';
	$obj = new Main();

	$data = $obj->remain_order();

	// $data = $obj->order_show();

	include('inc/header.php'); 
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header">
					<h2 class="mb-0">Order Remaining</h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered align-items-center mb-5" id="data-table">
							<thead class="text-center">
								<tr>
									<th>Order Code</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Total Price</th>
                                    <th>Customar Details</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody class="text-center">

							<?php 
								if($data->num_rows>0){
									$i = 0;
								
									while($row = $data->fetch_object()){
									$i++;
							?>

								<tr>
									<td><?php echo $row->code;?></td>
									<td><?php echo $row->order_Name?></td>
									<td><?php echo $row->order_Quantity?></td>
									<td>Tk <span><?php echo $row->order_Price?></span></td>
									<td><a href="cus_details.php?det=<?php echo $row->cus_Id; ?>">View details</a></td>
									<form action="shift.php" method="post">
										<td>
											<?php
												if($row->a_Action == 0){
											?>
											<input type="hidden" value="<?php echo $row->order_Id;?>" name="hide">

											<a data-toggle="tooltip"  data-original-title="Pending">
												<button type="submit" name="shift" class="btn btn-danger btn-sm text-white">
													<i class="fas fa-spinner"></i>
												</button>
											</a>
											<?php
												}elseif($row->a_Action == 1){
											?>
											<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Shifted"><i class="fas fa-bicycle"></i></a>
											<?php
												}
											?>
											<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Complete"><i class="fas fa-check"></i></a>
										</td>
									</form>
								</tr>

							<?php			
									}
								}
							?>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include('inc/footer.php');
?>
							