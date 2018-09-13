<?php 
include_once('models/Product.php');
include_once('models/Customer.php');
include_once('models/Bill.php');
include_once('models/BillDetail.php');
include_once('public/mail.php');
class HomeController{
	public function Show(){

		$productmodel = new Product();
		$data = $productmodel->All();

		// require_once('views/admin/DangNhap.php');
		require_once('views/Trangchu.php');

	}

	public function product(){
		$productmodel = new Product();
		$data = $productmodel->top();

		require_once('views/LoaiSP.php');
	}

	public function product_detail(){
			$productmodel = new Product();
			$MaSP = $_GET['MaSP'];
			$product = $productmodel->find($MaSP);
		require_once('views/SanPham.php');
	}


	public function contact(){
		require_once('views/contact.php');
	}

	public function cart(){
			

		
				$cart = array();

				if(isset($_SESSION['giohang'])){
					$cart = $_SESSION['giohang'];
				}

				require_once('views/Giohang.php');
			
		}



	public function addtocart(){
			$maSP = $_GET['MaSP'];
			$productModel = new Product();
			$maxSP = $productModel->getCount($maSP);
			
			
			if(isset($_SESSION['giohang'][$maSP])){
				if($_SESSION['giohang'][$maSP]['SLmua']<=$maxSP&& $maxSP>=1){
					$_SESSION['giohang'][$maSP]['SLmua']++; 
				
					setcookie('true','Them thanh cong',time()+1);

				}else{
					setcookie('error','vuot so luong', time()+1);
				}
			}else{
				if($maxSP>=1){
					$productModel = new Product();
					$product = $productModel->find($maSP);
					$product['SLmua']=1;
					$_SESSION['giohang'][$maSP]=$product;
					
					setcookie('true','Them thanh cong',time()+1);
				}else{
					setcookie('error','vuot so luong', time()+1);
				}
				
			}

// 
			header('Location:?mod=home&act=doashboard');
			
	}

	public function addtocart2(){
			$maSP = $_GET['MaSP'];
			$productModel = new Product();
			$maxSP = $productModel->getCount($maSP);
			
			
			if(isset($_SESSION['giohang'][$maSP])){
				if($_SESSION['giohang'][$maSP]['SLmua']<=$maxSP&& $maxSP>=1){
					$_SESSION['giohang'][$maSP]['SLmua']++; 
				
					setcookie('true','Them thanh cong',time()+1);

				}else{
					setcookie('error','vuot so luong', time()+1);
				}
			}else{
				if($maxSP>=1){
					$productModel = new Product();
					$product = $productModel->find($maSP);
					$product['SLmua']=1;
					$_SESSION['giohang'][$maSP]=$product;
					
					setcookie('true','Them thanh cong',time()+1);
				}else{
					setcookie('error','vuot so luong', time()+1);
				}
				
			}

// 
			header('Location:?mod=home&act=cart');
			
	}

	public function xoa1(){
			$maSP = $_GET['MaSP'];
			
			if($_SESSION['giohang'][$maSP]['SLmua'] == 1){

				unset($_SESSION['giohang'][$maSP]);

			}else{
				$_SESSION['giohang'][$maSP]['SLmua']--;
				
			}

			 header('Location: ?mod=home&act=cart');
		}
	public function Xoa(){
		 	$maSP = $_GET['MaSP'];
		 	if(isset($_SESSION['giohang'][$maSP])){
		 		unset($_SESSION['giohang'][$maSP]);
		 	}			
			header('Location: ?mod=home&act=cart');

		 }
	

	public function pay(){

		if(count($_SESSION['giohang'])>=1){
			$input = $_SESSION['giohang'];
			require_once('views/DatHang.php');
		}else{
			header('Location: ?mod=home&act=doashboard');
		}
		
	}

	public function payment(){
		if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                if(isset($_POST['gender'])){
                    $gender = $_POST['gender'];
                }  else {
                    $gender = false;
                }


                date_default_timezone_set('Asia/Ho_Chi_Minh');
				$productModel = new Product();
				$customerModel = new Customer();
				$count1 = $customerModel->countCustomer();
				$count = (int)$count1['count(*)']+1;
				$data= array();
                $data['MaKH']='KH'.$count;
                $data['TenKH']=$name;
                $data['SDT']=$phone;
                $data['Email']=$email;
                $data['DiaChi']=$adress;
                $data['GioiTinh']=$gender;

           		 $result =    $customerModel->Creat($data);

				// $maNV = $_SESSION['user']['MaNV'];

				// $customer=$_SESSION['customer'];
				
				$giohang = $_SESSION['giohang'];

				

				

				$hoadon = array();
				$hoadon['MaHD']=$data['MaKH'].'_'.time();

			

				$hoadon['MaKH']=$data['MaKH'];
				$hoadon['MaNV']='';
			
				$hoadon['NgayBan']=date('Y-m-d h:i:s');
				
				$hoadon['TrangThai']=0;

				// var_dump($hoadon); die;
				//thêm hóa đơn
				$bill = new Bill();
				$bill->creat($hoadon);

				// thêm chi tiết hóa đơn và cập nhật số lượng SP còn lại trong kho
				$tong_tien=0;
				
			

				foreach ($giohang as $product) {
					$prod['MaHD']=$hoadon['MaHD'];
					$prod['MaSP']=$product['MaSP'];
					$prod['SLmua']=$product['SLmua'];
					$prod['GiaBan']=$product['DonGia'];
					$prod['ThanhTien']=$product['DonGia']*$product['SLmua'];
					$tong_tien+=$prod['ThanhTien'];
					

					$billDetail= new BillDetail();
					$billDetail->creat($prod);

				//	$productModel->reduceCount($prod['MaSP'],$prod['SLmua']);
	// 
				}
				
			// cập nhật tổng tiền hóa đơn
				$updatebill['MaHD']=$hoadon['MaHD'];
				$updatebill['TongTien'] = $tong_tien;
				$bill->update($updatebill);




               
            }

            $arr = array( 'name' => $name,'phone' => $phone, 'email' => $email ,'gender' => $gender, 'adress' => $adress  );
            $_SESSION['user'] = $arr;

            

            $contents = "Đơn hàng của bạn đã đặt thành công . Vui lòng xác nhận!";

            send_email($email, "", $contents, "Đặt hàng Milk Tea");
            unset($_SESSION['giohang']);

            header('Location: ?mod=home&act=doashboard');

	}
	public function huybill(){
			unset($_SESSION['giohang']);
			
			
			header('Location: ?mod=home&act=doashboard');
		}


	public function error(){
		require_once('views/Error.php');
	}

	
}

 ?>

