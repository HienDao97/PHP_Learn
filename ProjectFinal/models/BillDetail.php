<?php 
	
	include_once('models/Model.php');
	
	class BillDetail extends Model{
		var $table_name='chitiethoadon';
		public function __construct(){
			parent::__construct();
		}
		

		public function findSP($mhd){
		 	// cau lenh truy van co so du lieu

			$query ="SELECT chitiethoadon.*, sanpham.TenSP 
					from chitiethoadon,sanpham
					WHERE chitiethoadon.MaSP=sanpham.MaSP AND chitiethoadon.MaHD = '".$mhd."'";



		 	// thuc thi cau lenh truy van co so du lieu

		 	$result = $this->model_conn->query($query);
		 	$data=array();
		 	while($row= $result->fetch_assoc()){
			 	$data[] = $row;
			
			}

			
		 	return $data;
		 }

		
	}
 ?>