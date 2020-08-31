<?php
    $url = 'http://localhost/team05/ecommerce';
    include 'main.php';
    $obj = new Main();
    $dis = $obj->show_dis();
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $password = md5($pass);
        $number = $_POST['number'];
        $district = $_POST['division'];
        $upzila = $_POST['upzila'];

        $permited     = array('jpg', 'jpeg', 'png', 'gif');
        $folder_name  = "asset/upload/";
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
                $obj->signup($name,$email,$password,$number,$district,$upzila,$unique_image);
            }
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initil-scale=1">
        
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/style.css">

		<title>Sign Up</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #000">
            <a class="navbar-brand" href="index.php"><b>FR E AK</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php"><--Back <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
		<div class="container">
            <div class="mt-3" style="background-color: black">
                <div style="" class="ml-auto mr-auto form-wrap">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group ml-auto mr-auto" style="width: 90%;">
                            <h1 class="text-center pt-4" style="font-size: 27px;"><b>Sign Up</b></h1>
                            <p class="form-text text-center text-muted" style="border-bottom: 1px solid gray;">Please fill in this form to create an account.</p>
                            <div class="form-group">
                                <label for="name">Full Name</label>

                                <input type="text" name="name" class="form-control signup" placeholder="Full name" required>
                            </div>

                            <div class="form-group">
                                <label for="email"><b>Email</b></label>
                          
                                <input id="email" class="signup form-control" type="email" placeholder="Enter Email" name="email" required>
                            </div>
                            
                          
                            <div class="form-group">
                                <label for="psw"><b>Password</b></label>

                                <input id="psw" class="signup form-control" type="password" placeholder="Enter Password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                
                                <input type="number" name="number"class="form-control signup" id="phone" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label for="my-input">Image</label>
                                <input id="my-input" class="form-control signup" type="file" name="image">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Delivary Address</label>
                                <div class="col-sm-10">
                                <select class="form-control signup" name="division" id="division" required>
                                    <option selected>Select Division</option>
                                        <?php
                                            if($dis->num_rows>0){
                                                while($row = $dis->fetch_object()){
                                        ?>
                                    <option class="text-dark" value="<?php echo $row->id;?>"><?php echo $row->name;?></option>

                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </select>
                                </div>
                                <div class="col-sm-10 ml-auto">
                                    <input class="form-control signup" type="text" name="upzila" placeholder="Upzila">
                                </div>
                            </div>

                            <p>By creating an account you agree to our 
                                <a href="#" style="color:dodgerblue">Terms & Privacy</a>
                            </p>

                            <button type="submit" name="signup" class="btn hi" style="width: 100%; background-color: gray; color: #fff;">Sign Up</button>
                            
                            <a href="login.php">
                                <button type="button" class="btn mt-4" style="width: 100%;background-color: #F26822; color: #fff; float: right;">Log in</button>
                            </a>
                        </div>   
                    </form>
                </div>
            </div>
		</div>
	</body>
</html>