<?php 
	
	include_once('models/Connection.php');
	class Customer{
		var $customer_conn;
		public function All(){
			$connection = new Connection();
			$this->customer_conn = $connection->conn;
			
			
		 	$data = array();

			// cau lenh truy van co so du lieu

			$query ="SELECT * from khachhang";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->customer_conn->query($query);

			 while($row= $result->fetch_assoc()){
			 	$data[] = $row;
			
			 }
			 return $data;
		}

		public function find($maKH){
			$connection = new Connection();
			$this->customer_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="SELECT * from khachhang WHERE MaKH = '".$maKH."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->customer_conn->query($query);
			$customer = $result->fetch_assoc();

			
			return $customer;
		}

		public function Creat($data){

			$connection = new Connection();
			$this->customer_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="INSERT INTO khachhang (MaKH,TenKH,SDT,Email,DiaChi)
                    VALUES ('".$data['MaKH']."','".$data['TenKH']."','".$data['SDT']."','".$data['Email']."','".$data['DiaChi']."')";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->customer_conn->query($query);
			return $result;
			
		}

		public function update($data){
			$connection = new Connection();
			$this->customer_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="UPDATE khachhang SET MaKH='".$data['MaKH']."',TenKH='".$data['TenKH']."',SDT='".$data['SDT']."',Email='".$data['Email']."',DiaChi='".$data['DiaChi']."' WHERE MaKH = '".$data['MaKH']."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->customer_conn->query($query);
			return $result;
		}

		public function Delete($maKH){
			$connection = new Connection();
			$this->customer_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="DELETE  from khachhang WHERE MaKH = '".$maKH."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->customer_conn->query($query);
			

			
			return $result;
		}


	}
 ?>