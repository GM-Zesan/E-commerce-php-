<?php
	include 'main.php';
	$obj = new Main();

	$data = $obj->product_list();

	include('inc/header.php');
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header ">
					<h2 class="mb-0">Product List</h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						
						<table class="table table-bordered align-items-center mb-5" id="data-table">
							<thead class="text-center">
								<tr>
									<th>Sl</th>
									<th>Product Name</th>
									<th>Brand</th>
									<th>Price</th>
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
									<td><?php echo $i; ?></td>
									<td><?php echo $row->product_Name; ?></td>
									<td><?php echo $row->product_Brand; ?></td>
									<td>Tk <?php echo $row->product_Price; ?></td>
									<td>
										<a class="btn btn-success btn-sm text-white" data-toggle="tooltip"href="product_view.php?id=<?php echo $row->product_Id; ?>" data-original-title="View"><i class="fas fa-eye"></i></a>

										<a href="product_delete.php?del=<?php echo $row->product_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip"data-original-title="Delete"><i class="fas fa-trash"></i></a>
									</td>
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
							