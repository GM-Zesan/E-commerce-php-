<?php
	include('inc/header.php');
	include 'main.php';
    $obj = new Main;
    $cus_data = $obj->userlist();

?>

<!-- Page content -->

<div class="container-fluid pt-8">
	<div class="row tab-pane">
		<div class="col-md-12">
			<div class="content content-full-width" id="content">
				<!-- begin profile-content -->
				<div class="profile-content">
					<!-- begin tab-content -->
					<div class="tab-content p-0">
						<!-- begin #profile-friends tab -->
						<div class="tab-pane fade in active show" id="profile-friends">
							<!-- begin row -->
							<div class="row">

	<?php
		if($cus_data->num_rows>0){
			while($cus_row = $cus_data->fetch_object()){
	?>

							<!-- start col-6 -->
								<div class="col-md-6">
									<div class="card border shadow">
										<div class="media card-body media-xs overflow-visible">
											<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="../asset/upload/<?php echo $cus_row->customer_Image; ?>"></a>
											<div class="media-body valign-middle">
												<b class="text-inverse"><?php echo $cus_row->customer_Fname; ?></b>
											</div>
											<div class="media-body valign-middle text-right overflow-visible">
												<div class="btn-group">
													<a href="user_view.php?id=<?php echo $cus_row->customer_Id; ?>">
														<button class="btn btn-sm btn-primary" type="button">View</button> 
													</a>
												</div>
											</div>
										</div>
									</div>
								</div><!-- end col-6 -->
	<?php 
			}
		}
	?>
							</div><!-- end row -->
						</div><!-- end #profile-friends tab -->
					</div><!-- end tab-content -->
				</div><!-- end profile-content -->
			</div>
		</div>
	</div>
</div>
														

						
					

<?php
	include('inc/footer.php');
?>
							