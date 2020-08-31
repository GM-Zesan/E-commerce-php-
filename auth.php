<?php
    session_start();
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cus_data = $obj->retrive1($email);

        if($cus_data->num_rows>0){
            while($cus_data_row = $cus_data->fetch_object()){
                $cus_id = $cus_data_row->customer_Id;
                $cus_email = $cus_data_row->customer_Email;
                $cus_pass = $cus_data_row->customer_Password;
            }
        }
        $pw = md5($pass);
        if($pw == $cus_pass && $email == $cus_email){
            $_SESSION['id'] = $cus_id;

            if(isset($_SESSION['id'])){
                header("location:index.php");  
            }
        }
        else{
            header("location:login.php"); 
        }
    }
?>