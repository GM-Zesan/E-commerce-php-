<?php
	$url = 'http://localhost/team05/ecommerce';
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initil-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/style.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/login.css">
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
                        <a class="nav-link" href="index.php"><--Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    	<div class="shadow">
    		<div class="loginbox">
                <img src="<?php echo $url; ?>/asset/image/avatar.png" class="avatar">
                <h1 class="mb-4">Login Here</h1>
                <form action="auth.php" method="post">
                    <div class="input-field form-group">
                        <input type="email" class="signup form-control" name="email" required="">
                        <label>Email</label>
                    </div>
                    <div class="input-field form-group">
                        <input type="password" class="signup form-control" name="password" required="">
                        <label>Password</label>
                    </div>
                    <input type="submit" class="mt-4" name="submit" value="Login">

                    <a href="form.php">Don't have an account?</a>
                </form>
            </div>
    	</div>
    </body>
</html>