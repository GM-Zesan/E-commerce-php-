<?php
      include 'category_main.php';
      $obj = new Main();
      if(isset($_POST['submit'])){
          $title = $_POST['title'];
          //echo $title;       
          $id = $_POST['id'];
          $set = $obj->update($title,$id);
          if($set == true){ 
            header("location:category_update.php?id=".$id);
          }
          
          header('Location: category.php');
      }




?>