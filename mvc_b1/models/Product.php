<?php 
	
	include_once('models/Connection.php');
	class Product{
		var $product_conn;
		public function All(){
			$connection = new Connection();
			$this->product_conn = $connection->conn;
			
			
		 	$data = array();

			// cau lenh truy van co so du lieu

			$query ="SELECT * from sanpham";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->product_conn->query($query);

			 while($row= $result->fetch_assoc()){
			 	$data[] = $row;
			
			 }
			 return $data;
		}

		public function find($maSP){
			$connection = new Connection();
			$this->product_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="SELECT * from sanpham WHERE MaSP = '".$maSP."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->product_conn->query($query);
			$product = $result->fetch_assoc();

			
			return $product;
		}

		public function Delete($maSP){
			$connection = new Connection();
			$this->product_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="DELETE  from sanpham WHERE MaSP = '".$maSP."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->product_conn->query($query);
			

			
			return $result;
		}

		public function Creat($data){

			$connection = new Connection();
			$this->product_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="INSERT INTO sanpham (MaSP,TenSP,SoLuong,DonGia)
                    VALUES ('".$data['MaSP']."','".$data['TenSP']."','".$data['SoLuong']."','".$data['DonGia']."')";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->product_conn->query($query);
			return $result;
			
		}

		public function update($data){
			$connection = new Connection();
			$this->product_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="UPDATE sanpham SET MaSP='".$data['MaSP']."',TenSP='".$data['TenSP']."',SoLuong='".$data['SoLuong']."',DonGia='".$data['DonGia']."' WHERE MaSP = '".$data['MaSP']."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->product_conn->query($query);
			return $result;
		}
	}
 ?>