<?php

include 'main.php';
$obj = new Main();
if(isset($_POST['submit'])){
    $name        = $_POST['name'];
    $category    = $_POST['category'];
    $price        = $_POST['price'];
    $section     = $_POST['section'];
    $brand        = $_POST['brand'];
    $discount    = $_POST['discount'];
    $condition    = $_POST['condition'];
    $details    = addslashes($_POST['details']);
    $id         = $_POST['id'];


    $permited     = array('jpg', 'jpeg', 'png', 'gif');
    $folder_name  = "assets/upload/";
    $file_name    = str_replace(" ","_",$_FILES['image']['name']);
    $file_size    = $_FILES['image']['size'];
    $file_temp    = $_FILES['image']['tmp_name'];
    $div          = explode(".",$file_name);
    $file_ext     = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;

    if(!empty($file_name)){
        if (in_array($file_ext, $permited) === false) {
            echo "<span class='text-danger'> You can upload only:-"
            .implode(', ', $permited)."</span>";
        }
        else{
            if(move_uploaded_file($file_temp,$folder_name.$unique_image)){
                $obj->updatepro($name,$category,$price,$section,$brand,$discount,$condition,$details,$unique_image,$id);
                header("Location: product_list.php");

            }
        }
    }
    else{
        $obj->updatepro_Without_Img($name,$category,$price,$section,$brand,$discount,$condition,$details,$id);
        header("Location: product_list.php");
    }
}
?>