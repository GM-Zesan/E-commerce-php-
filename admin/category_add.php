<?php 
    include('inc/header.php');
    include 'category_main.php';
    $obj = new Main();
    if(isset($_POST['submit']) && $_POST['title'] != null){
        $Title = $_POST['title'];
        $obj->insertcat($Title);
        header('Location: category.php');
    }

?>
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-header">
					<h2 class="mb-0">Add category</h2>
				</div>
                <form action="#" method="post">
                    <div class="card-body text-center">
						<div class="row">
                            <div class="form-group w-50 ml-auto mr-auto">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="title" placeholder="Name">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </form>
            </div>
		</div>
	</div>

<?php include('inc/footer.php'); ?>