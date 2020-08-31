<?php 
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pw = '';
        protected $db = 'db_freak';

        public $title;
        public $id;
        public $keyword;

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

        public function insertcat($t){
            $this->title = $t;
            $this->sql = "INSERT INTO tbl_category(name) VALUES('$this->title')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else{
                echo "Error!";
            }
        }

        public function view(){
            $this->sql = "SELECT * FROM tbl_category";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "Error".$this->connect->error;
            }
        }

        public function search($kw){
            $this->keyword = $kw;
            $this->sql = "SELECT * FROM tbl_category WHERE id = '$this->keyword'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return $this->result;
            }
            else{
                echo "Error!";
            }
        }


        public function update($ti,$id){
            $this->title = $ti;
            $this->id = $id;
            $this->sql = "UPDATE tbl_category SET name ='$this->title' WHERE id = '$this->id'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return true;
            }
            else{
                return false;
            }
        }


        public function delete($id){
            $this->id = $id;
            $this->sql = "DELETE FROM tbl_category WHERE id='$this->id'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == true){
                return true;
            }
            else{
                return false;
            }
        }



        public function __destruct(){
            $this->connect->close();
        }
    }
    $obj = new Main();
?>

                