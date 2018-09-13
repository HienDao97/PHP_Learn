<?php 
	
	include_once('models/Model.php');
	
	class Employee extends Model{
		var $table_name='nhanvien';
		var $primary_key='MaNV';

		public function checkLogin($email,$matkhau){
			
			$query="SELECT * FROM nhanvien WHERE Email='".$email."'and MatKhau='".$matkhau."'";
			

			$result =$this->model_conn->query($query);

			$nhanvien=$result->fetch_assoc();
			// var_dump($nhanvien);
			// die;
			return $nhanvien;
		}

		
		
	}
 ?>