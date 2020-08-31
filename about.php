<?php
	include 'main.php';
	$obj = new Main();

	$about_start = $obj->about_start();
	$about = $obj->about_us();
	$provide = $obj->provide();
	$team = $obj->team();
	$skill = $obj->skill();

	include('inc/header.php');
?>


<section class="about-slide">

<?php 
	if($about_start->num_rows>0){
		While($about_start_row = $about_start->fetch_object()){
?>

	<div class="home" style="background-image: url(asset/image/slideshow/<?php echo $about_start_row->about_start_Image; ?>);">
		<div class="overlay text-center">
			<div class="title-box">
				<h2 class="animated bounceInDown" style="animation-delay: 0.2s;">
					<?php echo $about_start_row->about_start_Title1; ?><span> <?php echo $about_start_row->about_start_Title2; ?></span>
				</h2>
			</div>

			<p class="para animated fadeInUp" style="animation-delay: 1s; font-size: 18px">
				<?php echo $about_start_row->about_start_text; ?>
			</p>
			<a href="" class="animated fadeInDown"style="animation-delay: 1.8s">
				<button type="button" class="btn btn-lg start_button mt-5">Let's Started</button>
			</a>         
		</div>
	</div>

<?php			
		}
	}
?>

</section>
<section class="about-us">
	<div class="container-fluid">
		<?php 
			if($about->num_rows>0){
				While($about_row = $about->fetch_object()){
		?>
		<h4 class="pt-3 pb-2"><?php echo $about_row->about_Title; ?></h4>
		<p class="para text-justify">
			<?php echo $about_row->about_Body; ?>
		</p>

		<?php			
				}
			}
		?>

	</div>
</section>

<section class="service">
	<div class="container">
		<div class="row m-0 p-5">
			<div class="col-md-5">

				<?php
					if($provide->num_rows>0){
						while($provide_row = $provide->fetch_object()){
				?>
				
				<h5 style="border-bottom: 1px solid #F26822; width: 90%; font-weight: bolder;"><?php echo $provide_row->provide_Title; ?></h5>
				<div class="containerimg mt-4 text-justify">
					<h6 class="text-dark"><?php echo $provide_row->provide_Subtitle; ?> </h6>
					<p class="para">
						<?php echo $provide_row->provide_Body; ?>
					</p>
				</div>

				<?php
						}
					}
				?>

			</div>
			<div class="col-md-7 mr-auto ml-auto">
				<h5 style="border-bottom: 1px solid #F26822; width: 90%; font-weight: bolder">Our Skills</h5>
				<div class="pt-2" style="color: #000; width: 90%;">

				<?php 
					if($skill->num_rows>0){
						while($skill_row = $skill->fetch_object()){
				?>
					<h3 class="p-title">
						<?php echo $skill_row->skill_Title; ?>
					</h3>
					<div class="progress">
						<div class="progress-bar" style="width: <?php echo $skill_row->skill_Value; ?>">
							<span>
								<?php echo $skill_row->skill_Value; ?>
							</span>
						</div>
					</div>
				<?php
						}
					}
				?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="team">
	<div class="pb-4">
		<h3 class="text-center caption pb-2"><span style="border-bottom: 3px solid #F26822">Our Team</span></h3>
		<p class="para text-center">
			We are proud of our experienced and dedicated team. These are faces for our success and popularity
		</p>
	</div>
	<div class="row m-0">
	
	<?php
		if($team->num_rows>0){
			while($team_row = $team->fetch_object()){
	?>
	
		<div class="col-md-3 col-sm-6 mb-2">
			<div class="card">
				<img src="asset/image/team/<?php echo $team_row->team_Image; ?>" alt="Jane" style="width:100%">
				<div class="container">
					<h2 class="h2"><?php echo $team_row->team_Name; ?></h2>
					<p class="title">
						<?php echo $team_row->team_Profession1;?> <br>
						<?php echo $team_row->team_Profession2; ?>
					</p>
					<p class="para info">
						<?php echo $team_row->team_Text; ?>
					</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>

	<?php
			}
		}
	?>

	</div>
</section>


<?php
	include('inc/footer.php');
?>
		  	