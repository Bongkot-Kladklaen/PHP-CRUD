<?php
    $filepath = realpath(dirname(__FILE__));
    require_once $filepath."../../config/config.php";

    class DB{
        private $hostname = DB_HOST;
        private $username = DB_USER;
        private $password = DB_PASS;
        private $database = DB_NAME;

        private $connect;

        public function __construct(){           
            $this->connectDB();
        }

        private function connectDB(){
            $this->connect = new mysqli($this->hostname, $this->username, $this->password,$this->database);
            if ($this->connect->connect_error) {
                die("Connection failed: " . $this->connect->connect_error);
                return false;
            }
        }

        public function select($query){
            $result = $this->connect->query($query) or die($this->connect->error.__LINE__); 
            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }

        public function insert($query){
            $insert_row = $this->connect->query($query) or die($this->connect->error.__LINE__); 
            if ($insert_row) {
                return $insert_row;
            } else {
                return false;
            }
        }
    }

?>