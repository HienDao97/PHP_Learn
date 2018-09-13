<?php 
	include_once('models/Customer.php');
	include_once('models/Employee.php');
	include_once('models/Product.php');
	include_once('models/Bill.php');
	include_once('models/BillDetail.php');

	class SaleController{
			

		public function creat_bill(){
			$customer= new Customer();
			$data= $customer->All();

			include_once('views/admin/hoadon/listHD.php');
		}

		public function purchase(){
			if(isset($_GET['MaKH'])){
				$maKH = $_GET['MaKH'];
				$customerModel = new Customer();
				$customer= $customerModel->find($maKH);
				$_SESSION['customer']=$customer;
				header('Location: ?mod=sale&act=sale');
			}else{
				header('Location: ?mod=sale&act=creat_bill');
			}
		}

		public function sale(){
			if(isset($_SESSION['customer'])){
				$customer= $_SESSION['customer'];
				$productModel = new Product();
				$products = $productModel->All();

				 $cart = array();

				if(isset($_SESSION['cart'])){
					$cart = $_SESSION['cart'];
				}

				require_once('views/admin/hoadon/hoadon.php');
			}else{
				header('Location:?mod=sale&act=creat_bill');
			}
		}

		public function add2cart(){
			$maSP = $_GET['MaSP'];
			$productModel = new Product();
			$maxSP = $productModel->getCount($maSP);
			
			if(isset($_SESSION['cart'][$maSP])){
				
				if($_SESSION['cart'][$maSP]['SLmua']<=$maxSP&& $maxSP>=1){
					$_SESSION['cart'][$maSP]['SLmua']++; 
				
					setcookie('true','Them thanh cong',time()+1);

				}else{
					setcookie('error','vuot so luong', time()+1);
				}
			}else{
				if($maxSP>=1){
					$productModel = new Product();
					$product = $productModel->find($maSP);
					$product['SLmua']=1;
					$_SESSION['cart'][$maSP]=$product;
					setcookie('true','Them thanh cong',time()+1);
				}else{
					setcookie('error','vuot so luong', time()+1);
				}
				
			}
			
			header('Location: ?mod=sale&act=sale');
		}

		public function remove_product(){
			$maSP = $_GET['MaSP'];
			if($_SESSION['cart'][$maSP]['SLmua']==1){
				unset($_SESSION['cart'][$maSP]);

			}else{
				$_SESSION['cart'][$maSP]['SLmua']--;
			}
			header('Location: ?mod=sale&act=sale');
		}
		public function deleteAll(){
			$maSP = $_GET['MaSP'];
			if(isset($_SESSION['cart'][$maSP])){
				unset($_SESSION['cart'][$maSP]);
			}			
			header('Location: ?mod=sale&act=sale');

		}

		public function payment(){
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$productModel = new Product();
			// var_dump($_SESSION['user']);
			// die;
			$maNV = $_SESSION['user']['MaNV'];

			$customer=$_SESSION['customer'];
			
			$cart = $_SESSION['cart'];

			$hoadon = array();
			$hoadon['MaHD']= $customer['MaKH'].'_'.$maNV.'_'.time();

			

			$hoadon['MaKH']=$customer['MaKH'];
			$hoadon['MaNV']=$maNV;
		
			$hoadon['NgayBan']=date('Y-m-d h:i:s');
			
			$hoadon['TrangThai']=1;
			//thêm hóa đơn
			$bill = new Bill();
			$bill->creat($hoadon);

			// thêm chi tiết hóa đơn và cập nhật số lượng SP còn lại trong kho
			$tong_tien=0;
			
			

			foreach ($cart as $product) {
				$prod['MaHD']=$hoadon['MaHD'];
				$prod['MaSP']=$product['MaSP'];
				$prod['SLmua']=$product['SLmua'];
				$prod['GiaBan']=$product['DonGia'];
				$prod['ThanhTien']=$product['DonGia']*$product['SLmua'];
				$tong_tien+=$prod['ThanhTien'];
				

				$billDetail= new BillDetail();
				$billDetail->creat($prod);

				$productModel->reduceCount($prod['MaSP'],$prod['SLmua']);
// 
			}
			
			// cập nhật tổng tiền hóa đơn
			$updatebill['MaHD']=$hoadon['MaHD'];
			$updatebill['TongTien'] = $tong_tien;
			$bill->update($updatebill);



			// hủy session customer va cart 
			//unset($_SESSION['cart']);
			//unset($_SESSION['customer']);

			header('Location:?mod=sale&act=bill_detail&MaHD='.$hoadon['MaHD']);
		}


		public function xulyhoadon(){
		//	date_default_timezone_set('Asia/Ho_Chi_Minh');
			
			
			$maHD = $_GET['MaHD'];
			$productModel = new Product();

			$bill = new Bill();
			
			
			$maNV = $_SESSION['user']['MaNV'];
	

			$hoadon = array();
			$hoadon['MaHD'] = $maHD;
		
			$hoadon['MaNV']=$maNV;
		
			$hoadon['TrangThai']=1;

			// cập nhật  hóa đơn
			
			$bill->update($hoadon);
			

			//cập nhật số lượng SP còn lại trong kho
		

		$BillDetailModel = new BillDetail();
		$products = $BillDetailModel->findSP($maHD);

		
			foreach ($products as $product) {
				

				$productModel->reduceCount($product['MaSP'],$product['SLmua']);
// 
			}
	
			

			header('Location:?mod=sale&act=bill_detail2&MaHD='.$hoadon['MaHD']);
		}

		// public function bill_detail2(){
		// 	$maHD=$_GET['MaHD'];
		// 	$bill = new Bill();
		// 	$hoadon =$bill->find($maHD);


		// 	$customerModel = new Customer();
		// 	$customer= $customerModel->find($hoadon['MaKH']);
		// 	$BillDetailModel = new BillDetail();
		// 	$data = $BillDetailModel->findSP($maHD);
			
		// 	$employeeModel = new Employee();
		// 	$employee= $employeeModel->find($hoadon['MaNV']);
		// 	require_once('views/admin/hoadon/inhoadon.php');
		// }

		public function bill_detail(){
			$maHD=$_GET['MaHD'];
			$bill = new Bill();
			$hoadon =$bill->find($maHD);


			$customerModel = new Customer();
			$customer= $customerModel->find($hoadon['MaKH']);
			

			$billDetailModel = new BillDetail();
			$data = $billDetailModel->findSP($hoadon['MaHD']);
			// $data = $_SESSION['cart'];
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// die;
			

			$employeeModel = new Employee();
			$employee= $employeeModel->find($hoadon['MaNV']);
			require_once('views/admin/hoadon/inhoadon.php');
		}

		public function destroyall(){
			unset($_SESSION['cart']);
			unset($_SESSION['customer']);
			//header('Location: ?mod=sale&act=sale');
		}
		public function destroy(){
			unset($_SESSION['cart']);
			unset($_SESSION['customer']);
			
			header('Location: ?mod=sale&act=sale');
		}


	}


 ?>