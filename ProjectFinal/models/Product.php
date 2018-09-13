<?php 
	
	include_once('models/Model.php');
	
	class Product extends Model{
		var $table_name='sanpham';
		var $primary_key='MaSP';

		public function reduceCount($maSP,$soluong){
			$soluongcon = $this->getCount($maSP)-$soluong;
			$query="UPDATE ".$this->table_name." SET SoLuong =".$soluongcon." WHERE ".$this->primary_key." = '".$maSP."'";
			// echo $query;
			// die;
			$result = $this->model_conn->query($query);
			return $result;
		}

		public function getCount($maSP){
			$query="SELECT SoLuong FROM ".$this->table_name." WHERE ".$this->primary_key." ='".$maSP."'";
			
			$result = $this->model_conn->query($query)->fetch_assoc()['SoLuong'];
			return $result;
		}

		// public function findName($maSP){
		// 	$query="SELECT TenSP FROM ".$this->table_name." WHERE MaSP".$maSP."'";
			
		// 	$result = $this->model_conn->query($query)->fetch_assoc()['SoLuong'];
		// 	return $result;
		// }

		public function top(){
				$data = array();
				//$sql = "SELECT * FROM Orders LIMIT 15, 10";
				$query="SELECT  sanpham.*
					FROM sanpham
					
					LIMIT 5,3";
			$result =$this->model_conn->query($query);
			while($row = $result->fetch_assoc()){
				$data[]= $row;
		 	}
		 	return $data;
		}


		public function ListProduct(){
			
			$data = array();
			// truy van co so du lieu
			$query ="SELECT sanpham.*,loaisanpham.Ten_Loai_SP 
					FROM sanpham , loaisanpham 
					WHERE sanpham.LoaiSP=loaisanpham.Ma_Loai_SP";

			$result =$this->model_conn->query($query);
			while($row = $result->fetch_assoc()){
				$data[]= $row;
			}
			return $data;
		}

		public function search($id){
			
		
			// truy van co so du lieu
			$query ="SELECT sanpham.*,loaisanpham.Ten_Loai_SP 
					FROM sanpham , loaisanpham 
					WHERE sanpham.LoaiSP=loaisanpham.Ma_Loai_SP AND sanpham.MaSP='".$id."'";
					
					
			$result =$this->model_conn->query($query);
			$row = $result->fetch_assoc();
			
			return $row;
		}

		
		
	}
 ?>