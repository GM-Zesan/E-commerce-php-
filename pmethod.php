<?php
    include('inc/header.php');
    include 'main.php';
    $obj = new Main;
    $cus_data = $obj->checkout($_SESSION['id']);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $division = $_POST['division'];
        $upzila = $_POST['upzila'];
        $postal = $_POST['postal'];
        $id = $_POST['id'];
        $obj->checkout_update($name,$email,$phone,$division,$upzila,$postal, $id);
    }
?>
<div class="container">
    <div class="pt-5">
        <a href="cod.php">
            <button type="button" class="ml-auto mr-auto btn btn-block btn-lg btn-success w-50">Cash On Delivery</button>
        </a>
        
    </div>
    <div class="pt-5">
        <a href="payment_online.php">
            <button type="button" class="ml-auto mr-auto btn btn-block btn-lg btn-success w-50">Online Payment</button> 
        </a>
        
    </div>
    
   
</div>
<?php
	include('inc/footer.php');
?>