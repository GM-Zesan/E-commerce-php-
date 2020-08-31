<?php
    include 'main.php';
    $obj = new Main;
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        if($obj->order_delete($id)){
            header("Location: order_complete.php");
        }
        else{
            echo "Error!";
        }
    }
    

?>