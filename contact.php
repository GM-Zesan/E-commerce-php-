<?php
	include 'main.php';
	$obj = new Main();

	$contact_info = $obj->contact_info();
	$address = $obj->address_location();

	if(isset($_POST['submit']) && $_POST['sms'] != null){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['sub'];
		$sms = $_POST['sms'];

		$contact_form = $obj->contact_form($name,$email,$sub,$sms);

		if($contact_form == true){
			echo "<span class='text-success text-center'><b>Message Sent successfully.</b></span>";
		}
	}

	include('inc/header.php');
?>


<section>
	<div id="tooplate_middle_subpage" class="p-4">
	
	<?php 
		if($contact_info->num_rows>0){
			While($contact_info_row = $contact_info->fetch_object()){
	?>
		<h2>
			<?php echo $contact_info_row->contact_info_Title; ?>
		</h2>
		<p class="para" style="font-size: 16px;">
			<?php echo $contact_info_row->contact_info_Body; ?>
		<p>
	
	<?php			
			}
		}
	?>

	</div>
	<div class="row p-4 m-0">
		<div class="col-md-7 mb-4">
			<form class="contact" action="#" method="post">
				<div class="input-field form-group">
					<input name="name" type="text" class="signup form-control" id="author" required="" />
					<label>Name:</label> 
				</div>
					

				<div class="input-field form-group">
					
					<input name="email" type="email" class="signup form-control" id="email" required=""/>
					<label for="email">Email:</label> 
				</div>
					

				<div class="input-field form-group"> 
					<input name="sub" type="text" class="signup form-control" id="subject" required=""/>
					<label for="subject">Subject:</label>
				</div>

				<div class="input-field form-group">
					<textarea id="text" type="text" name="sms" style="" class="signup form-control required" required=""></textarea>
					<label for="text">Message:</label> 
				</div>

				<div class="butn">
					<button type="reset" class="btn reset btn-sm">r e - s e t</button>
					
					<button type="submit" name="submit" class="btn submit btn-sm">s u b m i t</button>
				</div>  
			</form>
		</div>
		<div class="col-md-5">
			<div class="ml-auto mr-auto ft-text" style="width: 70%">

			<?php
				if($address->num_rows>0){
					while($address_row = $address->fetch_object()){
			?>
				<h3><?php echo $address_row->location_Title; ?></h3>
				<p>
					<iframe src="<?php echo $address_row->location_Map; ?>" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</p>
				<div class="cleaner mb-4"></div>
				<h3><?php echo $address_row->address_Title; ?></h3>
				<h6 class="para"><?php echo $address_row->address_Subtitle; ?></h6>
				<address>
					<?php echo $address_row->address_Point; ?>
				</address>

			<?php
					}
				}
			?>	

			</div>
		</div>
	</div>
</section>


<?php
	include('inc/footer.php');
?>

