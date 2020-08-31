<?php
	include 'main.php';
	include '../helpers/format.php';
	$obj = new Main(); 
	$hlp = new Format();

	$data = $obj->inbox();
	include('inc/header.php');
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
				<div class="card-header ">
					<h2 class="mb-0">Inbox</h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered align-items-center mb-5" id="data-table">
							<thead class="text-center">
								<tr>
									<th>Sl</th>
									<th>User Name</th>
									<th>Email</th>
                                    <th>Date/Time</th>
									<th>Action</th>
								</tr>
							</thead>
						  
							<tbody class="text-center">
						<?php 
							if($data->num_rows>0){
								$i = 0;
								while($inbox_row = $data->fetch_object()){
									 $i++;
						?>  
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $inbox_row->contact_form_Name; ?></td>
									<td><span><?php echo $inbox_row->contact_form_Email; ?></span></td>
                                    <td><?php echo $hlp->formatDate($inbox_row->Created); ?></td>
									<td>
										<a href="viewmsg.php?viewid=<?php echo $inbox_row->contact_form_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>

										<a href="replymsg.php?viewid=<?php echo $inbox_row->contact_form_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Replay"><i class="fas fa-reply"></i></a>

										<a href="delete.php?del=<?php echo $inbox_row->contact_form_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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
							