<?php
include 'main.php';
	$obj = new Main();
	if(isset($_POST['shift'])){
        $id = $_POST['hide'];
        $sh_data = $obj->shifted($id);
        if($sh_data == true){ 
            header("Location:order_remain.php");
        }
        else{
			echo "Error";
		}
     } 


     if(isset($_POST['restore'])){
        $id = $_POST['undo'];
        $sh_data = $obj->restore($id);
        if($sh_data == true){ 
            header("Location:order_complete.php");
        }
        else{
			echo "Error";
		}
     } 
?>