<?php
	include 'main.php';
    $obj = new Main;
	include('inc/header.php');

	$data = $obj->category();

	if(isset($_POST['submit'])){
		$name        = $_POST['name'];
		$category    = $_POST['category'];
		$price        = $_POST['price'];
		$section     = $_POST['section'];
		$brand        = $_POST['brand'];
		$condition    = $_POST['condition'];
		$dis         = $_POST['discount'];
		$details    = addslashes($_POST['details']);
		
		$permited     = array('jpg', 'jpeg', 'png', 'gif');
        $folder_name  = "assets/upload/";
        $file_name    = str_replace(" ","_",$_FILES['image']['name']);
        $file_size    = $_FILES['image']['size'];
        $file_temp    = $_FILES['image']['tmp_name'];
        $div          = explode(".",$file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        
        if (in_array($file_ext, $permited) === false) {
            echo "<span class='text-danger'> You can upload only:-"
            .implode(', ', $permited)."</span>";
        } 
        else{
            if(move_uploaded_file($file_temp,$folder_name.$unique_image)){
                $obj->insert($name,$category,$price,$section,$brand,$dis,$condition,$details,$unique_image);
            }
        }
	}
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-header">
					<h2 class="mb-0">Add Product</h2>
				</div>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control" name="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label class="form-label">Product Category</label>
									<select class="form-control w-100" name="category">

										<?php
											if($data->num_rows>0){
												while($row = $data->fetch_object()){
										?>
										<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
										<?php 
												}
											}
										?>

									</select>
								</div>
								<div class="form-group">
									<label class="form-label">Product Image</label>
									<input type="file" class="form-control" name="image">
								</div>

								<div class="form-group">
									<label class="form-label">Product Price</label>
									<input type="text" class="form-control" name="price" placeholder="Price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Brand</label>
									<input type="text" class="form-control" name="brand" placeholder="Brand">
								</div>
								<div class="form-group">
									<label class="form-label">Product Condition</label>
									<input type="text" class="form-control" name="condition" placeholder="Condition">
								</div>
								<div class="form-group">
									<label class="form-label">Product Discount</label>
									<input type="text" class="form-control" name="discount" placeholder="Ex:10">
								</div>
								<div class="form-group">
									<label class="form-label">Product Section</label>
									<select class="form-control w-100" name="section">
										<option selected="selected">General</option>
										<option>New</option>
										<option>Best Sell</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 ">
								<div class="form-group mb-0">
									<label class="form-label">Product Details</label>
									<textarea class="form-control" name="details" rows="5" placeholder="Details here.."></textarea>
								</div>
							</div>
							<div class="w-100 mt-4">
								<button type="submit" name="submit" class="btn btn-block btn-sm btn-success">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
	include('inc/footer.php');
	
?>

							