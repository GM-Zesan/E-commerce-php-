<?php
    include 'category_main.php';
    $obj = new Main;
    $id = $_GET['id'];
    if($obj->delete($id)){
        header("Location: category.php");
    }
    else{
        echo "Error!";
    }

?>