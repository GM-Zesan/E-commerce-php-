<?php
	
	include('inc/header.php');
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-profile  overflow-hidden">
				<div class="card-body text-center cover-image" data-image-src="assets/img/profile-bg.jpg">
					<div class=" card-profile">
						<div class="row justify-content-center">
							<div class="">
								<div class="">
									<a href="#">
										<img src="<?php echo $url?>/assets/img/brand/logo.png" class="rounded-circle" alt="profile">
									</a>
								</div>
							</div>
						</div>
					</div>
					<h3 class="mt-3 text-white">Cori Stover</h3>
					<p class="mb-4 text-white">Administrator</p>
					<a href="#" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit profile</a>
				</div>
			</div>
			<div class="card shadow ">
				<div class="card-body pb-0">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
							<h2>About Me</h2>
							<p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
							<div class="table-responsive border ">
								<table class="table row table-borderless w-100 m-0 ">
									<tbody class="col-lg-6 p-0">
										<tr>
											<td><strong>Full Name :</strong> TEAM05</td>
										</tr>
										<tr>
											<td><strong>Location :</strong> Faridpur,Bangladesh</td>
										</tr>
										<tr>
											<td><strong>Languages :</strong> English, Bangla, Hindi.</td>
										</tr>
										<tr>
											<td><strong>DOB :</strong> 18/02/1999</td>
										</tr>
									</tbody>
									<tbody class="col-lg-6 p-0">
										<tr>
											<td><strong>Occupation :</strong> Administrator</td>
										</tr>
										<tr>
											<td><strong>Website :</strong> team05.xyz</td>
										</tr>
										<tr>
											<td><strong>Email :</strong> team05@gmail.com</td>
										</tr>
										<tr>
											<td><strong>Phone :</strong> +800-6652-6325</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="media-heading mt-3">
								<h3><strong>Biography</strong></h3>
							</div>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
							<p class="mb-4">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	
	include('inc/footer.php');
?>