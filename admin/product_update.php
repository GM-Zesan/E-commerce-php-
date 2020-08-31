<?php
    include('inc/header.php');

    include 'main.php';
	$obj = new Main();

	if(!isset($_GET['update']) || $_GET['update'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['update'];
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
                            <form method="post" action="update_pro.php" enctype="multipart/form-data" id="uploadForm">
                                
                        <?php
                            if($single_p->num_rows>0){
                                while($single_p_row = $single_p->fetch_object()){
                        ?>    

                                <tr>
                                    <th>Product Category</th>
                                    <td>
                                        <select class="custom-select" name="category">
                                            <?php
                                                $data = $obj->category();
                                                if($data->num_rows>0){
                                                    while($row = $data->fetch_object()){
                                            ?>
                                            <option
                                                <?php
                                                    if($single_p_row->product_Category === $row->id){
                                                ?>
                                                        selected = "selected";
                                                <?php
                                                    }
                                                ?>
                                                value="<?php echo $row->id;?>"><?php echo $row->name;?>
                                            </option>
                                            <?php 
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Name;?>" name="name" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <td id="test">
                                        <img class="img-fluid img-thumbnail" src="<?php echo $url;?>/assets/upload/<?php echo $single_p_row->product_Image;?>" height="100px" width="130px">

                                        <input type="file" value="<?php echo $single_p_row->product_Image;?>" name="image" class="form-control" id="file">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Details</th>
                                    <td>
                                        <textarea class="form-control" name="details" cols="30" rows="10">
                                        <?php echo $single_p_row->product_Details;?>
                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Price;?>" name="price" class="form-control">
                                    </td>
                                </tr>  
                                <tr>
                                    <th>Brand</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Brand;?>" name="brand" class="form-control">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Discount</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Discount;?>" name="discount" class="form-control">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Condition</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Condition;?>" name="condition" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Section</th>
                                    <td>
                                        <input type="text" value="<?php echo $single_p_row->product_Section;?>" name="section" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $single_p_row->product_Id;?>">
                                        <button type="submit" name="submit" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Confirm">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </td>
                                </tr>  
                            <?php
                                    }
                                }
                            ?>
                            </form>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include('inc/footer.php');
?>
							