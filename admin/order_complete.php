<?php
	include 'main.php';
	$obj = new Main();

	$data = $obj->complete_order();
	include('inc/header.php');
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header">
					<h2 class="mb-0">Order Complete</h2>
				</div>
				<div class="card-body">
					<div class="table-responsive">
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
									while($row = $data->fetch_object()){
							?>
								<tr>
									<td><?php echo $row->code;?></td>
									<td><?php echo $row->order_Name;?></td>
                                    <td><?php echo $row->order_Quantity;?></td>
									<td>Tk <?php echo $row->order_Price;?></td>
									<td><a href="cus_details.php?det=<?php echo $row->cus_Id; ?>">View details</a></td>
									<form action="shift.php" method="post">
										<td>
											<input type="hidden" value="<?php echo $row->order_Id;?>" name="undo">

											<a data-toggle="tooltip" data-original-title="Restore">
												<button type="submit" name="restore" class="btn btn-success btn-sm text-white">
													<i class="fas fa-undo"></i>
												</button>
											</a>

											<a href="order_delete.php?del=<?php echo $row->order_Id;?>"class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash"></i></a>
										</td>
									</form>
								</tr>
							
							<?php			
									}
								}
							?>
							</table>
						</tbody>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include('inc/footer.php');
?>
							