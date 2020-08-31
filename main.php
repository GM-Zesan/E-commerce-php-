<?php
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pw = '';
        protected $db = 'db_freak';

        public $id;
        public $userid;
        public $product_Section;
        public $cheak;
        public $quantity;
        public $session_Id;
        public $name;
        public $email;
        public $password;
        public $number;
        public $country;
        public $division;
        public $upzila;
        public $postal;
        public $catid;
        public $image;
        public $grand_total;
        
        public $getresult;
        public $result;
        public $connect;
        public $sql;

        public function __construct(){
            $this->connect = new mysqli($this->host,$this->user,$this->pw,$this->db);

            if($this->connect->connect_error){
                echo "Error!";
            }
            return $this->connect;
        }


        //------------------------------ signup-----------------------------------

        public function signup($na,$e,$p,$n,$d,$u,$i){
            $this->name = $na;
            $this->email = $e;
            $this->password = $p;
            $this->number = $n;
            $this->division = $d;
            $this->upzila = $u;
            $this->iamge = $i;

            $this->sql = "INSERT INTO tbl_customer(customer_Fname,customer_Email,customer_Password,customer_Phone,customer_Division,customer_Upzila,customer_Image) VALUES('$this->name','$this->email','$this->password','$this->number','$this->division','$this->upzila','$this->iamge')";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                echo "humm";
                return $this->result;

            }
            else{
                echo "Sql Error!";
            }
        }


        //------------------------------ signup-----------------------------------

        //------------------------------ login-----------------------------------


        public function retrive1($email){
            $this->email = $email;

            $this->sql = "SELECT * FROM `tbl_customer` WHERE customer_Email = '$this->email'";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
    
        }



        //------------------------------ login-----------------------------------



        // ----------------------------index page---------------------------------


        public function search($kw){
            $keyword = $kw;
            $this->sql = "SELECT * FROM tbl_product WHERE product_Name LIKE '%$keyword%' OR product_Details LIKE '%$keyword%' OR product_Brand LIKE '%$keyword%' OR product_Category LIKE '%$keyword%'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                echo "Error";
            }
        }

        public function happy_shopping(){
            $this->sql = "SELECT * FROM tbl_happy_shopping";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function feature(){
            $this->sql = "SELECT * FROM tbl_feature";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function new_product(){
            $this->sql = "SELECT * FROM tbl_product WHERE product_Section = 'New' LIMIT 4";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }


        public function best_seller(){
            $this->sql = "SELECT * FROM tbl_product WHERE product_Section = 'Best sell' LIMIT 4";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function testimonial(){
            $this->sql = "SELECT tbl_testimonial.*,tbl_customer.*  
                        FROM tbl_testimonial INNER JOIN tbl_customer 
                        ON tbl_testimonial.cus_Id = tbl_customer.customer_Id";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function write_review($r){
            $this->review = $r;
            $this->sql = "INSERT INTO tbl_testimonial(testimonial_Body) VAlUES('$this->review')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        // ----------------------------index page---------------------------------

        // ----------------------------Shop page---------------------------------


        public function product(){
            $this->sql = "SELECT * FROM tbl_product";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        // ----------------------------Shop page---------------------------------


        // --------------------------Singal page---------------------------------

        public function single_product($id){
            $this->id = $id;

            $this->sql = "SELECT * FROM tbl_product WHERE product_Id = $this->id";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function similar($id){
            $this->product_Section = $id;

            $this->sql = "SELECT * FROM tbl_product WHERE product_Section = '$this->product_Section' order by rand() limit 8";

            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        
        
        // --------------------------Singal page---------------------------------

        // ----------------------------About page---------------------------------

        public function about_start(){
            $this->sql = "SELECT * FROM tbl_about_start";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }


        public function about_us(){
            $this->sql = "SELECT * FROM tbl_about";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function provide(){
            $this->sql = "SELECT * FROM tbl_provide WHERE provide_Id = '1'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function team(){
            $this->sql = "SELECT * FROM tbl_team";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }


        public function skill(){
            $this->sql = "SELECT * FROM tbl_skill";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }



        // ----------------------------About page---------------------------------

        // ----------------------------Shop page---------------------------------


        public function category(){
            $this->sql = "SELECT * FROM tbl_category";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
        }

        public function categoryPro($id){
            $this->catid = $id;
            $this->sql = "SELECT * FROM tbl_product WHERE product_Category = '$this->catid'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                echo "ERROR!";
            }
        }

        public function viewdata(){
            $this->sql = "SELECT * FROM `tbl_product` ORDER BY RAND() LIMIT 12";
            $this->result = $this->connect->query($this->sql);

            if($this->result == true){
                return $this->result;
            }
            else {
                echo "ERROR!";
            }
        }

        public function view_all_data(){
            $this->sql = "SELECT * FROM `tbl_product` ORDER BY RAND()";
            $this->result = $this->connect->query($this->sql);

            if($this->result == true){
                return $this->result;
            }
            else {
                echo "ERROR!";
            }
        }

        // ----------------------------Shop page---------------------------------

        // ---------------------------Contact page---------------------------------

        public function contact_info(){
            $this->sql = "SELECT * FROM tbl_contact_info";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function contact_form($n,$e,$s,$sms){
            $this->name = $n;
            $this->email = $e;
            $this->sub = $s;
            $this->sms = $sms;

            $this->sql = "INSERT INTO tbl_contact_form(contact_form_Name,contact_form_Email,contact_form_Sub,contact_form_Msg) VAlUES('$this->name','$this->email','$this->sub','$this->sms')";
            
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function address_location(){
            $this->sql = "SELECT * FROM  tbl_address_location";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }


        // ---------------------------Contact page---------------------------------


        // ---------------------------Coupon page---------------------------------
        

        public function add_coupon($id){
            $id = $id;

            $this->sql = "INSERT INTO `tbl_coupon`(`session_Id`) VALUES ('$id')";

            $this->result      =  $this->connect->query($this->sql);

            if($this->result  == true){
                return True;
            }
            else{
                echo "Error";
            }

        }


        public function coupon($id){
            $cid = $id;
            $this->sql = "SELECT * FROM `tbl_coupon` WHERE session_Id = '$cid'";
            $this->result = $this->connect->query($this->sql);
            
            if($this->result == true){
                return $this->result;
            }
            else {
                echo "Error";
            }
        }


        // ---------------------------Coupon page---------------------------------


        // ---------------------------Checkout page---------------------------------


        public function show_dis(){
            $this->sql = "SELECT * FROM `division`";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }



        public function checkout($id){
            $this->id = $id;
            $this->sql = "SELECT * FROM tbl_customer WHERE customer_Id = '$this->id'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else {
                echo "Error";
            }
        }

        public function checkout_update($na,$e,$n,$d,$u,$po,$id){
            $this->name = $na;
            $this->email = $e;
            $this->number = $n;
            $this->division = $d;
            $this->upzila = $u;
            $this->postal = $po;
            $this->id = $id;

            $this->sql         = "UPDATE tbl_customer
                                  SET 
                                  customer_Fname      = '$this->name',
                                  customer_Email      = '$this->email',
                                  customer_Phone      = '$this->number',
                                  customer_Division   = '$this->division',
                                  customer_Upzila     = '$this->upzila',
                                  customer_Postal     = '$this->postal'

                                  WHERE customer_Id   = '$this->id = $id'";

            $this->result      =  $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                return false;
            }
        }


        public function order($n,$i,$p,$t,$q,$id,$cop){
            $name = $n;
            $image = $i;
            $price = $p;
            $total = $t;
            $quantity = $q;
            $id = $id;
            $cop  = $cop;

            $this->sql = "INSERT INTO `tbl_order`(`order_Name`, `order_Price`, `order_Total`, `order_Quantity`, `order_Image`, `cus_Id`, `code`) VALUES ('$name','$price', '$total','$quantity','$image', '$id', '$cop')";

            $this->result      =  $this->connect->query($this->sql);

            if($this->result  == true){
                return True;
            }
            else{
                return false;
            }

        }

        // ---------------------------Checkout page---------------------------------

        public function confirm($id){
            $cid = $id;
            $this->sql = "SELECT * FROM `tbl_order` WHERE cus_Id = '$cid' AND date = now()";
            $this->result = $this->connect->query($this->sql);
            
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function getpro($id){
            $cid = $id;
            $this->sql = "SELECT * FROM `tbl_order` WHERE cus_Id = '$cid'";
            $this->result = $this->connect->query($this->sql);
            
            if($this->result == true){
                return $this->result;
            }
            else {
                return false;
            }
        }

        public function check($id){
            $this->id          =  $id;
            $this->sql         = "UPDATE `tbl_order` 
                                  SET 
                                  u_Action      = '1'
                                  WHERE order_Id= '$this->id' AND a_Action = '1'";
            $this->result      = $this->connect->query($this->sql);

            if($this->result   == true){
                return $this->result;
            }
            else{
                return false;
            }
        }

        public function __destruct(){
            $this->connect->close();
        }
    }
?>