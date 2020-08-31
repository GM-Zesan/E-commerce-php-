<?php
	include('inc/header.php'); 
	if(!isset($_SESSION['id'])){
		echo "<script>window.location='http://localhost/team05/ecommerce/index.php'</script>";
	}else{
	include 'main.php';
	$obj = new Main();
    $cus_id = $_SESSION['id'];
	$data = $obj->getpro($cus_id);
	
?>

<!-- Page content -->
<div class="container-fluid pt-8 text-dark">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
               <div class="card-header">
					<h2 class="mb-0">Order</h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered align-items-center mb-5" id="data-table">
							<thead class="text-center">
								<tr>
									<th>Order Code</th>
									<th>Product Name</th>
                                    <th>Quantity</th>
									<th>Price</th>
                                    <th>Shift</th>
                                    <th>Confirm</th>
								</tr>
							</thead>

							<?php 
								if($data->num_rows>0){
									$i = 0;
								
									while($row = $data->fetch_object()){
									$i++;
							?>

							<tbody class="text-center">
								<tr>
									<td><?php echo $row->code;?></td>
									<td><?php echo $row->order_Name?></td>
                                    <td><?php echo $row->order_Quantity?></td>
									<td><span><?php echo $row->order_Price?></span></td>
									<form action="status.php" method="post">
										<td>
                                            <input type="hidden" value="<?php echo $row->order_Id;?>" name="ch">
                                            <input type="hidden" value="<?php echo $row->a_Action;?>" name="pend">
                                        <?php
                                            if($row->a_Action == '0'){
                                        ?>
											<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"  data-original-title="Pending">
												<i class="fas fa-spinner"></i>
                                            </a>
                                        <?php 
                                            }else{
                                        ?>
                                                <a class="btn btn-success btn-sm text-white" data-toggle="tooltip"  data-original-title="Pending">
												<i class="fas fa-bicycle"></i>
                                            </a>
                                        <?php
                                            }
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                            if($row->u_Action == '0'){
                                        ?>
                                            <a data-toggle="tooltip" data-original-title="Complete">
                                                <button type="submit" name="check" class="btn btn-danger btn-sm text-white">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                            <?php
                                                }else{
                                            ?>
                                                <a data-toggle="tooltip" data-original-title="Complete">
                                                <button type="submit" name="check" class="btn btn-success btn-sm text-white">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                            <?php
                                                }
                                            ?>
											
										</td>
									</form>
								</tr>
							</tbody>

							<?php			
									}
								}
							?>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php		
	}
	include('inc/footer.php');
?>
							