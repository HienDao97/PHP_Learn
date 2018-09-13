<?php 
	
	include_once('models/Connection.php');
	class Employee{
		var $employee_conn;

		public function checkLogin($email,$matkhau){
			$connection = new Connection();
			$this->employee_conn = $connection->conn;

			$query="SELECT Email,MatKhau FROM nhanvien WHERE Email='".$email."'and MatKhau='".$matkhau."'";
			

			$result =$this->employee_conn->query($query);

			$nhanvien=$result->fetch_assoc();
			//var_dump($nhanvien);
			return $nhanvien;
		}

		public function All(){
			$connection = new Connection();
			$this->employee_conn = $connection->conn;
			
			
		 	$data = array();

			// cau lenh truy van co so du lieu

			$query ="SELECT * from nhanvien";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->employee_conn->query($query);

			 while($row= $result->fetch_assoc()){
			 	$data[] = $row;
			
			 }
			 return $data;
		}

		public function find($maNV){
			$connection = new Connection();
			$this->employee_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="SELECT * from nhanvien WHERE MaNV = '".$maNV."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->employee_conn->query($query);
			$employee = $result->fetch_assoc();

			
			return $employee;
		}

		public function Creat($data){

			$connection = new Connection();
			$this->employee_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="INSERT INTO nhanvien (MaNV,TenNV,SDT,Email,MatKhau)
                    VALUES ('".$data['MaNV']."','".$data['TenNV']."','".$data['SDT']."','".$data['Email']."','".$data['MatKhau']."')";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->employee_conn->query($query);
			return $result;
			
		}

		public function update($data){
			$connection = new Connection();
			$this->employee_conn = $connection->conn;
		
			// cau lenh truy van co so du lieu

			$query ="UPDATE nhanvien SET MaNV='".$data['MaNV']."', TenNV='".$data['TenNV']."', SDT='".$data['SDT']."', Email='".$data['Email']."', MatKhau='".$data['MatKhau']."' WHERE MaNV='".$data['MaNV']."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->employee_conn->query($query);
			return $result;
		}

		public function Delete($maNV){
			$connection = new Connection();
			$this->employee_conn = $connection->conn;
			
			
		 	

			// cau lenh truy van co so du lieu

			$query ="DELETE  from nhanvien WHERE MaNV = '".$maNV."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->employee_conn->query($query);
			

			
			return $result;
		}
	}
 ?>