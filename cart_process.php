<?php
    session_start();
if(isset($_SESSION['id'])){
    if(isset($_POST['addCart'])){
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'],'item_id');
            if(!in_array($_GET['id'], $item_array_id)){
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'item_id' => $_GET['id'],
                    'item_name' =>$_POST['hidden_Name'],
                    'item_image' =>$_POST['image'],
                    'item_price' =>$_POST['hidden_Price'],
                    'item_qun' =>$_POST['quantity']
                );
                $_SESSION['cart'][$count] = $item_array;
                header("location:shop.php");
            }else{
                
                header("location:cart.php?all=1");

            }
        }else{
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_name' =>$_POST['hidden_Name'],
                'item_image' =>$_POST['image'],
                'item_price' =>$_POST['hidden_Price'],
                'item_qun' =>$_POST['quantity']
            );
            $_SESSION['cart'][0] = $item_array;
            header("location:shop.php");
        }
    }
}
else{
    header("Location:login.php");
}

?>