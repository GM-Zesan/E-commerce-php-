<?php
    session_start();
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $admin_data = $obj->retrive($name);

        if($admin_data->num_rows>0){
            while($admin_data_row = $admin_data->fetch_object()){
                $login_id = $admin_data_row->login_Id;
                $admin_pass = $admin_data_row->admin_Password;
            }
        }
        $pw = md5($pass);
        if($pw == $admin_pass){
            $obj->set_session($login_id);
            $index = $obj->index();
            if($index == true){
              header("location:dashboard.php");  
            }
            
        }else{
        
        }

    }
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: dashboard.php");
    }
    else{
        header("Location: login.php");
    }
?>