<?php
    include 'main.php';
    $obj = new Main;
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        if($obj->product_delete($id)){
            header("Location: product_list.php");
        }
        else{
            echo "Error!";
        }
    }
    

?>