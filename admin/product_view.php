<?php
    include('inc/header.php');

    include 'main.php';
	$obj = new Main();


	if(!isset($_GET['id']) || $_GET['id'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['id'];
        $single_p = $obj->product_view($id);
        
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
				<div class="card-header ">
					<h2 class="mb-0">
                        <a href="product_list.php"><--Back</a></h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered"> 

                    <?php
                        if($single_p->num_rows>0){
                            while($single_p_row = $single_p->fetch_object()){
                    ?>    

                            <tr>
                                <th>Product Category</th>
                                <td><?php echo $single_p_row->name;?></td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td><?php echo $single_p_row->product_Name;?></td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img class="img-fluid img-thumbnail" src="<?php echo $url;?>/assets/upload/<?php echo $single_p_row->product_Image;?>" height="100px" width="180px"></td>
                            </tr>
                            <tr>
                                <th>Product Details</th>
                                <td>
                                    <textarea readonly name="details" class="form-control" cols="30" rows="10">
                                        <?php echo $single_p_row->product_Details;?>
                                    </textarea>
                                </td>
                                
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><?php echo $single_p_row->product_Price;?></td>
                            </tr>  
                            <tr>
                                <th>Brand</th>
                                <td><?php echo $single_p_row->product_Brand;?></td>
                            </tr>

                            <tr>
                                <th>Discount</th>
                                <td><?php echo $single_p_row->product_Discount;?>%</td>
                            </tr>
                            
                            <tr>
                                <th>Condition</th>
                                <td><?php echo $single_p_row->product_Condition;?></td>
                            </tr>
                            <tr>
                                <th>Section</th>
                                <td>General</td>
                            </tr>
                            <tr>
                                <th>Action</th>
                                <td>
                                    <a href="product_update.php?update=<?php echo $single_p_row->product_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>

                                    <a href="product_delete.php?del=<?php echo $single_p_row->product_Id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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
							