<?php 
    include 'category_main.php';
    $obj = new Main();
    $id = $_GET['id'];
    $data = $obj->search($id); 
    include('inc/header.php');
?>
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-header">
					<h2 class="mb-0">Edit category</h2>
                </div>
                
                <form action="update_process.php" method="post">
                    <?php 
                        if($data->num_rows>0){
                            while($row = $data->fetch_object()){
                    ?>
                    <div class="card-body text-center">
						<div class="row">
                            <div class="form-group w-50 ml-auto mr-auto">
                                <label for="title">Title</label>
                                <input type="text" value="<?php echo $row->name;?>" name="title" class="form-control" id="title" aria-describedby="titleHelp">
                            </div>
                            <input type="hidden" value="<?php echo $row->id;?>" name="id">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-sm">confirm</button>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </form>
            </div>
		</div>
	</div>
<?php include('inc/footer.php'); ?>