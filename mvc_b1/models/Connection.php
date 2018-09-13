<?php 
	class Connection{
		var $conn;
		public function __construct(){
			$servername ="localhost";//dia chi may chu chua co so du lieu
		    $username="root";
		    $password="";
		    $dbname="qlbh";


		    // tao ra ket noi den CSDL
		    $this->conn = new mysqli($servername,$username,$password,$dbname);

		    $this->conn->set_charset("utf8");
		    //check connection

		    if($this->conn->connect_error){
		        die("Connection failed: " .$this->conn->connect_error);

		    }
		}
	}
 ?>