<?php 
	include_once('models/Bill.php');
	include_once('models/Customer.php');
	include_once('models/Product.php');
	include_once('models/BillDetail.php');
	class ManagerController{
		// hien thi danh sach
		public function list(){
			
			$managermodel = new Bill();
			$data = $managermodel->All();
// 
			include_once('views/admin/manager/list.php');
		}

		
		

		// xem chi tiet san pham
		public function detail(){
			$managermodel = new Bill();
			$MaHD = $_GET['MaHD'];
			$manager = $managermodel->find($MaHD);



			$customermodel = new Customer();
			$customer= $customermodel->find($manager["MaKH"]);

			$billdetailtmodel = new BillDetail();
			$billdetails= $billdetailtmodel->findSP($MaHD);

			
			 $data=array();
			// 

			foreach ($billdetails as $input) {
				$productmodel = new Product();
				$product=$productmodel->find($input["MaSP"]);

				
				$input["TenSP"] = $product["TenSP"];
				
				$data[]=$input;

			}

			// $data=$billdetails;
			// echo "<pre>";
			//   	print_r($data);
			//   	echo "</pre>";
			//  	die;
		
			include_once('views/admin/manager/detail.php');
			
		}


		public function loaddoanhthu(){
			include_once('views/admin/manager/loaddoanhthu.php');
		}

		public function doanhthu(){
			$managermodel = new Bill();
			$thang = $_POST['thang'];
			$model = new Bill();


				$data = $managermodel->thongkedoanhthu($thang);
				$output = $model->best_seller($thang);
				 $tongthang =0;
				 foreach ($data as $ds) {
				 	$tongthang+=$ds['TONG'];
				 	# code...
				 }
				include_once('views/admin/manager/doanhthu.php');
		
		}

		

		
		
	}

 ?>