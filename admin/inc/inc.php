<?php
    class Inc{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pw = '';
        protected $db = 'db_freak';
        

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

        public function msg_count(){
            $this->sql = "SELECT * FROM `tbl_contact_form`";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }

        

        public function __destruct(){
            $this->connect->close();
        }
    }

?>