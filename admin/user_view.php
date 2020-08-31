<?php
    include('inc/header.php');

    include 'main.php';
	$obj = new Main();


	if(!isset($_GET['id']) || $_GET['id'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['id'];
        $data = $obj->user_view($id);
        
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
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered"> 

                    <?php
                        if($data->num_rows>0){
                            while($row = $data->fetch_assoc()){
                    ?>    

                            <tr>
                                <th>Full Name</th>
                                <td><?php echo $row['customer_Fname'];?></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>
                                    <img class="img-thumbnail" style="height:100px; width:100px; border-radius:50%" src="../asset/upload/<?php echo $row['customer_Image'];?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo $row['customer_Email'];?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo $row['customer_Phone'];?></td>
                            </tr>
                            <tr>
                                <th>Parmanent Address</th>
                                <td><?php echo $row['name'];?></td>
                            </tr>  
                            <tr>
                                <th>Delivary Address</th>
                                <td><?php echo $row['customer_Upzila'];?></td>
                            </tr>
                            <tr>
                                <th>Postal Code</th>
                                <td><?php echo $row['customer_Postal'];?></td>
                            </tr>
                            <tr>
                                <th>Action</th>
                                <td>
                                    <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
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
							