<?php
    include('inc/header.php');
    include 'main.php';
    $obj = new Main();
    if(isset($_SESSION['cart'])){
        if(isset($_POST['order'])){
            $name = $_POST['name'];
            $image = $_POST['image'];
            $price = $_POST['price'];
            $total = $_POST['total'];
            $quantity = $_POST['quantity'];
            $id = $_POST['id'];
            $code = $_POST['cop'];

            $c = count($name);

            for($i = 0; $i<$c; $i++){
            $order = $obj->order($name[$i],$image[$i],$price[$i],$total[$i],$quantity[$i],$id,$code);
            }

            $coupon = $obj->add_coupon($id);

            if(isset($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            else{
                echo "Error!";
            }
        }
    }
    
    $cus_id = $_SESSION['id'];
    $data = $obj->confirm($cus_id);
   
?>
<style>
    h3{
        font-weight: bolder;
    }
    p{
        font-size: 18px;

    }

</style>


<div class="container ml-auto mr-auto bg-light text-dark mt-5" style="width:40%">
    <h3 class="text-center text-success mb-5 pt-3"><span style="border-bottom:2px solid coral">Success</span></h3>

<?php 

    $id = $_SESSION['id'];
    $coupon = $obj->coupon($id);

    if(mysqli_num_rows($coupon)>5){
        $Shipping = 0;
    }
    else{
        $Shipping = 100;
    }

    if($data->num_rows>0){
        $total_price = 0;
        while($row = $data->fetch_object()){
            $total_price = $total_price+($row->order_Total);
        }
        $grand_total = $total_price+$Shipping;
    ?>
    <p class="text-dark pl-4">
        Total payable amount(Including Shipping cost) : <b>Tk <?php echo $grand_total;?></b>
    </p>
    <?php
    }           
?>

    

    <p class="text-dark pl-4 pb-5">
        <span style="color:coral; font-weight: bold;">Congrats! </span> Thanks for purchase. We received your order. We will contack you ASAP with delivery details. Here is your details. <a href="getpro.php">Visit here...</a>
    </p>

</div>
    

<?php
	include('inc/footer.php');
?>