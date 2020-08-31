<?php
    include('inc/header.php');
    include 'main.php';
    $obj = new Main();
    
?>
<div class="container mt-5">
    <h2 class="text-success">What Is "COD"</h2>
    <p class="text-justify para">
    COD stands for "Cash on Delivery". This is one kind of popular paymet method in Bangladesh. Cash on Delivery basically means you will pay the amount of product while you get the item delivered to you. With this payment method, you can pay in cash to the delivery agent upon receipt of your order or product. This servie is currently available inside Dhaka City Corporation only with few conditions and upon verifications. To avoid misunderstanding or miscommunication, We strongly recommend buyers to make a small deposit to make your order confirmation. To reduce fraud or Fake orders we take a very small portion of amount like 200 Taka or 500 Taka or 10% of the product price to make sure you are really interested to take the delivery. This small amount you can pay in Advance by bKash to our Companies designated bKash account.
    </p>
    <div class="ml-auto mr-auto text-center">
        <img src="asset/image/cashon.jpg" alt="" title="Cash On Deliver Process">
    </div>
    <h4 class="text-success mt-3">Why we ask for Partial Advance Payment?</h4>
    <p class="para text-justify">
    As you may already notice that in our site we strongly try to keep the real time stock update and most of the cases we keep the stocks in our wearhous and the quality is alwys showes on the product page. Once a new order placed the item got disappear from our site so that it can not be oversold. In this case we want to make sure that your order is really going to be delivered and to make that sure we take a small amount starting 200 Taka as advance. The amount your paid in advacne will be deduct from the final bill of your order amount (Example- If your order amount is 2000 taka and if you paid 200 Taka as advance then you will have to pay only rest 2000-200=1800 Taka while you are receiving the item). 
    </p>


    <form method="post" action="confirm_order.php">

    <?php
    $generate = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $cop = substr('#'.str_shuffle($generate),0,6);
        if(!empty($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $keys => $values){
    ?>
    
        <input type="hidden" name="name[]" value="<?php echo $values['item_name']?>">

        <input type="hidden" name="quantity[]" value="<?php echo $values['item_qun']; ?>">

        <input type="hidden" name="image[]" value="<?php echo $values['item_image'];?>">

        <input type="hidden" name="price[]" value="<?php echo $values['item_price']?>">

        <input type="hidden" name="total[]" value="<?php echo $values['item_qun']*$values['item_price']; ?>">

        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">

        <input type="hidden" name="cop" value="<?php echo $cop;?>">


    <?php
            }
        }
    ?> 
        <button type="submit" name="order" class="ml-auto mt-4 mr-auto btn btn-block btn-lg btn-success w-50">Confirm Your Order</button>

    </form>

       
    
</div>
<?php
	include('inc/footer.php');
?>