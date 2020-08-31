<?php
    include 'main.php';
    $obj = new Main;
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        if($obj->deletemsg($id)){
            header("Location: inbox.php");
        }
        else{
            echo "Error!";
        }
    }
    

?>