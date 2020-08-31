<?php
    session_start();
    if(isset($_SESSION['id'])){
        unset($_SESSION['id']);
        unset($_SESSION['cart']);
        header("Location: index.php");
    }
    else{
        echo "Error!";
    }
?>