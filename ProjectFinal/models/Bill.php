<?php 
	include_once('models/Model.php');
	class Bill extends Model{
		var $table_name='hoadon';
		var $primary_key='MaHD';

		// public function ListBillByEmployee($Empl){
		// 	if($Empl==''){
		// 		$where='';

		// 	}else{
		// 		$where ="WHERE hd.MaNV='".$Empl."'";
		// 	}
		// 	$data = array();
		// 	// truy van co so du lieu
		// 	$query ="SELECT hd.*,kh.TenKH,nv.TenNV FROM hoadon hd join khachhang kh ON hd.MaKH=kh.MaKH JOIN nhanvien nv ON nv.MaNV = hd.MaNV".$where;
		// 	$result =$this->model_conn->query($query);
		// 	while($row = $result->fetch_assoc()){
		// 		$data[]= $row;
		// 	}
		// 	return $data;
		// }
		public function thongkedoanhthu($thang){
				$data = array();
			$query="SELECT nhanvien.MaNV, nhanvien.TenNV, SUM(TongTien) AS TONG
					FROM nhanvien,chitiethoadon,hoadon
					WHERE nhanvien.MaNV = hoadon.MaNV AND hoadon.MaHD= chitiethoadon.MaHD AND MONTH(hoadon.NgayBan)=".$thang."
					GROUP BY TenNV
					ORDER BY SUM(TongTien) DESC";
			$result =$this->model_conn->query($query);
			while($row = $result->fetch_assoc()){
				$data[]= $row;
		 	}
		 	return $data;
		}

		public function best_seller($thang){
				$data = array();
			$query="SELECT  sanpham.*,SUM(SLmua) AS TONG
					FROM sanpham, chitiethoadon,hoadon
					WHERE sanpham.MaSP = chitiethoadon.MaSP AND hoadon.MaHD= chitiethoadon.MaHD AND MONTH(hoadon.NgayBan)=".$thang."
					GROUP BY TenSP
					ORDER BY SUM(SLmua) DESC
					LIMIT 5";
			$result =$this->model_conn->query($query);
			while($row = $result->fetch_assoc()){
				$data[]= $row;
		 	}
		 	return $data;
		}

		
		
		
	}
 ?>