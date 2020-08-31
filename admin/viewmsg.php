<?php
    include 'main.php';
	include '../helpers/format.php';
	$obj = new Main(); 
	$hlp = new Format();

    include('inc/header.php');

	if(!isset($_GET['viewid']) || $_GET['viewid'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['viewid'];
        $sms = $obj->sms_view($id);
        
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
                        <a href="product_list.php">View Message</a></h2>
				</div>
				<div class="card-body">
					<div class="table-responsive ">
						<table class="table table-bordered"> 

                    <?php
                        if($sms->num_rows>0){
                            while($sms_row = $sms->fetch_assoc()){
                    ?>    

                            <tr>
                                <th>Name</th>
                                <td><?php echo $sms_row['contact_form_Name'];?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $sms_row['contact_form_Email'];?></td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td><?php echo $sms_row['contact_form_Sub'];?></td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td><?php echo $sms_row['contact_form_Msg'];?></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td><?php echo $hlp->formatDate($sms_row['Created']);?></td>
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
							