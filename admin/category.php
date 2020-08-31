<?php 
    include 'category_main.php';
    $obj = new Main();
    $data = $obj->view();

    include('inc/header.php');
?>
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
									<th>Category</th>
                                    <th>Action</th>
                                </tr>
							</thead>
                        <tbody class="text-center">

                        <?php
                            if($data->num_rows>0){
                                $i=0;
                                while($row = $data->fetch_object()){
                                    $i++;
                        ?>
                            <tr class="text-center">
                                <td><?php echo $i;?></td>
                                <td><?php echo $row->name;?></td>
                                <td>
                                    <a href="category_update.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>

                                    <a href="category_delete.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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