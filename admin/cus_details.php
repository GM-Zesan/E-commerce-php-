<?php
    include('inc/header.php');

    include 'main.php';
	$obj = new Main();


	if(!isset($_GET['det']) || $_GET['det'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['det'];
        $cus_data = $obj->cus_details($id);
        
	}
?>

<!-- Page content -->
<style>
    table tr th{
        font-weight: bolder;
    }
</style>
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow">
                <a href="order_remain.php"><-- Back</a>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered"> 

                    <?php
                        if($cus_data->num_rows>0){
                            while($cus_row = $cus_data->fetch_object()){
                    ?>    

                            <tr>
                                <th>Full Name</th>
                                <td><?php echo $cus_row->customer_Fname;?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo $cus_row->customer_Email;?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo $cus_row->customer_Phone;?></td>
                            </tr>
                            <tr>
                                <th>Division</th>
                                <td><?php echo $cus_row->name;?></td>
                            </tr>  
                            <tr>
                                <th>Upzila</th>
                                <td><?php echo $cus_row->customer_Upzila;?></td>
                            </tr>
                            <tr>
                                <th>Postal Code</th>
                                <td><?php echo $cus_row->customer_Postal;?></td>
                            </tr>  
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
	include('inc/footer.php');
?>
							