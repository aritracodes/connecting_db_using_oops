<?php
    error_reporting(0);

    class Controller{

        //protected variable can only be used within the class or using inheritance
        protected $host = "localhost";
        protected $user = "root";
        protected $password = "";
        protected $database = "idiscuss";

        public $con = null;

        public function __construct(){
            $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL Server";
                exit();
            }else{
                echo "Successful Connection";
            }
        }


    }


    $conn1 = new Controller;
    $conn1->con;
    
?>