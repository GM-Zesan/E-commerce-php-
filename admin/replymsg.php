<?php
    include 'main.php';
    $obj = new Main(); 
    include('inc/header.php');
    
    if(!isset($_GET['viewid']) || $_GET['viewid'] == NULL){
        echo "Error!";
    }
    else{
        $id = $_GET['viewid'];
        $data = $obj->sms_view($id);
    }

    if(isset($_POST['submit'])){
        $to = $_POST['to'];
        $from = $_POST['from'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $send_mail = mail($to, $subject, $message, $from);
        if($send_mail){
            echo "Message sent successfully";
        }
        else{
            echo "Something went wrong";
        }
    }
	
?>

<!-- Page content -->
<div class="container-fluid pt-8">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">

                <form method="post" action="#"  style="width:60%;" class=" ml-auto mr-auto">

            <?php
                if($data->num_rows>0){
                    while($row = $data->fetch_object()){
            ?>
                    <div class="card-header">
                        <h2 class="mb-0">Replay Message</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">To</label>
                            <input type="email" name="to"readonly class="form-control" value="<?php echo $row->contact_form_Email;?>">
                        </div>
                      
                        <div class="form-group">
                            <label class="form-label">From</label>
                            <input type="email" class="form-control" name="from" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-block btn-sm btn-success">Submit</button>
                    </div>
            <?php
                    }
                }
            ?>  
                </form>

			</div>
		</div>
	</div>

<?php
	include('inc/footer.php');
	
?>

							