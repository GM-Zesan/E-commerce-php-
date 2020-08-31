<?php
include 'main.php';
	$obj = new Main();
    $shift = $_POST['pend'];
	if(isset($_POST['check']) && $shift == 1){
        $id = $_POST['ch'];
        $data = $obj->check($id);
        if($data == true){ 
            header("Location:getpro.php");
        }
        else{
			echo "Error";
		}
     } 
     else{
        // header("Location:getpro.php");
        echo "This product is not shifted yet";
     }
?>