<?php
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pw = '';
        protected $db = 'db_freak';

        public $keyword;
        public $id;
        public $name;
        public $userid;
        public $image;
        public $category;
        public $section;
        public $details;
        public $condition;
        public $dis;
        public $brand;
        public $price;
        public $availablity;

        public $result;
        public $connect;
        public $sql;

        public function __construct(){
            $this->connect = new mysqli($this->host,$this->user,$this->pw,$this->db);

            if($this->connect->connect_error){
                echo "ERROR";
            }
            return $this->connect;
        }


        //--------------------------Session Start--------------------------------

        //-------------------------------inbox--------------------------------------

        public function inbox(){
            $this->sql = "SELECT * FROM `tbl_contact_form`";

            $this->result = $this->connect->query($this->sql);

            if($this->result == true){
                return $this->result;
            }else{
                echo "Error";
            }
        }


        public function sms_view($id){
            $this->id = $id;

            $this->sql = "SELECT * FROM tbl_contact_form WHERE contact_form_Id = $this->id";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function deletemsg($id){
            $this->id = $id;

            $this->sql = "DELETE FROM tbl_contact_form WHERE contact_form_Id = '$this->id'";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }


        //-------------------------------inbox------------------------------------

        // ----------------------------Session Start-------------------------------


        public function index(){
            if($_SESSION['user']>0){
                return true;
            }else{
                return false;
            }
        }

        public function set_session($uid){
            $this->userid = $uid;
            $_SESSION['user'] = $this->userid;
        }

        public function retrive($name){
            $name = $name;

            $this->sql = "SELECT * FROM `admin_login` WHERE admin_Username = '$name'";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
    
        }

        // ----------------------------Session Start-------------------------------




        public function sell_count(){
            $this->sql = "SELECT * FROM `tbl_order` WHERE u_Action = 1";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }

        public function order_count(){
            $this->sql = "SELECT * FROM `tbl_order` WHERE u_Action = 0";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }

        public function user_count(){
            $this->sql = "SELECT * FROM `tbl_customer`";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }



        // ----------------------------Product----------------------------------

        public function insert($name,$category,$price,$section,$brand,$dis,$condition,$details,$picture){
            $this->name        = $name;
            $this->category    = $category;
            $this->image       = $picture;
            $this->price       = $price;
            $this->section     = $section;
            $this->brand       = $brand;
            $this->condition   = $condition;
            $this->dis         = $dis;
            $this->details     = $details;

            $this->sql   = "INSERT INTO `tbl_product`(`product_Name`,`product_Image`, `product_Details`,`product_Category`,`product_Brand`,`product_Discount`,`product_Condition`, `product_Price`,`product_Section`) VALUES ('$this->name','$this->image','$this->details','$this->category','$this->brand','$this->dis','$this->condition','$this->price','$this->section')";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                echo "Hi";
                return $this->result;
            }else{
                echo "error";
            }
        }




        public function product_list(){
            $this->sql = "SELECT * FROM tbl_product";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function category(){
            $this->sql = "SELECT * FROM tbl_category";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
        }

        public function product_view($id){
            $this->id = $id;

            $this->sql = "SELECT tbl_product.*, tbl_category.name 
                        FROM tbl_product INNER JOIN tbl_category
                        ON tbl_product.product_Category = tbl_category.id
                        WHERE product_Id = $this->id";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function updatepro($name,$category,$price,$section,$brand,$discount,$condition,$details,$picture,$id){
            $this->name        = $name;
            $this->category    = $category;
            $this->image       = $picture;
            $this->price       = $price;
            $this->section     = $section;
            $this->brand       = $brand;
            $this->discount    = $discount;
            $this->condition   = $condition;
            $this->details     = $details ;
            $this->id          = $id;

            $this->sql         = "UPDATE `tbl_product` 
                                SET          
                                `product_Name`='$this->name',`product_Image`='$this->image',`product_Details`='$this->details',`product_Category`='$this->category',`product_Brand`='$this->brand',
                                `product_Discount`='$this->discount',
                                `product_Condition`='$this->condition',`product_Price`='$this->price',`product_Section`='$this->section' 
                                WHERE `product_Id`='$this->id'";

            $this->result      = $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                echo "False";
            }
        }


        public function updatepro_Without_Img($name,$category,$price,$section,$brand,$discount,$condition,$details,$id){
            $this->name        = $name;
            $this->category    = $category;
            $this->price       = $price;
            $this->section     = $section;
            $this->brand       = $brand;
            $this->discount    = $discount;
            $this->condition   = $condition;
            $this->details     = $details;
            $this->id          = $id;

            $this->sql         = "UPDATE `tbl_product` 
                                SET          
                                `product_Name`='$this->name',`product_Details`='$this->details',`product_Category`='$this->category',`product_Brand`='$this->brand',
                                `product_Discount`='$this->discount',`product_Condition`='$this->condition',`product_Price`='$this->price',`product_Section`='$this->section' 
                                WHERE `product_Id`='$this->id'";

            $this->result      = $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                echo "hzbrl";
            }
        }

        public function product_delete($id){
            $this->id = $id;

            $this->sql = "DELETE FROM tbl_product WHERE product_Id = '$this->id'";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        



        // ----------------------------Product-----------------------------------

        // ----------------------------User-----------------------------------

        public function userlist(){
            $this->sql = "SELECT * FROM tbl_customer ORDER by customer_Fname ASC";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                echo "Error";
            }
        }

        public function user_view($id){
            $this->id = $id;

            $this->sql = "SELECT tbl_customer.*, division.* FROM tbl_customer 
                        INNER JOIN division 
                        ON tbl_customer.customer_Division = division.id
                        WHERE customer_Id = $this->id";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function cus_details($id){
            $this->id = $id;

            $this->sql = "SELECT tbl_order.*, tbl_customer.*, division.name
                        FROM tbl_order INNER JOIN tbl_customer 
                        ON tbl_order.cus_Id = tbl_customer.customer_Id
                        INNER JOIN division
                        ON tbl_customer.customer_Division = division.id
                        WHERE order_Id = $this->id";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        // ----------------------------User-----------------------------------


        // ----------------------------Order-----------------------------------


        public function remain_order(){
            
            $this->sql = "SELECT * FROM `tbl_order` WHERE u_Action = '0'";
            $this->result = $this->connect->query($this->sql);
            
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function shifted($id){
            $this->id          =  $id;
            $this->sql         = "UPDATE `tbl_order` 
                                  SET 
                                  a_Action      = '1'
                                  WHERE order_Id= '$this->id'";
            $this->result      = $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                return false;
            }
        }

        public function complete_order(){
            
            $this->sql = "SELECT * FROM `tbl_order` WHERE u_Action = '1'";
            $this->result = $this->connect->query($this->sql);
            
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function restore($id){
            $this->id          =  $id;
            $this->sql         = "UPDATE `tbl_order` 
                                  SET 
                                  u_Action      = '0'
                                  WHERE order_Id= '$this->id'";
            $this->result      = $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                return false;
            }
        }


        public function order_delete($id){
            $this->id = $id;

            $this->sql = "DELETE FROM tbl_order WHERE order_Id = '$this->id'";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }
        // ----------------------------Order-----------------------------------
        



        public function __destruct(){
            $this->connect->close();
        }
    }

?>