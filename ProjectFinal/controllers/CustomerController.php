<?php 
	include_once('models/Customer.php');
	class CustomerController{
		// hien thi danh sach
		public function list(){
			
			$customermodel = new Customer();
			$data = $customermodel->All();
			$customer['MaKH']='';
			$customer['TenKH']='';
			$customer['SDT']='';
			$customer['Email']='';
			$customer['DiaChi']='';


			include_once('views/admin/customer/list.php');
		}

		//them 1 san pham
		// start

		public function add(){
			$customer['MaKH']='';
			$customer['TenKH']='';
			$customer['SDT']='';
			$customer['Email']='';
			$customer['DiaChi']='';

			include_once('views/admin/customer/list.php');
		}

		public function store(){
			$data = $_POST;
			
			unset($data['creat']);

			$customermodel = new Customer();
			$status = $customermodel->Creat($data);


			if($status==1){
				// them thanh cong
				setcookie('msg','Thêm mới thành công',time()+1);
				header('Location:?mod=customer&act=list');
			}else{

				$customer=$data;
				setcookie('msg-false','Mã vừa thêm đã tồn tại',time()+1);
				header('Location:?mod=customer&act=list');

				
			}
		}

		// end

		// xem chi tiet san pham
		public function detail(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$customer = $customermodel->find($MaKH);
			include_once('views/admin/customer/detail.php');
		}

		public function edit(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$male="";
			$female="";
			$other="";

			$customer = $customermodel->find($MaKH);
			if ($customer["GioiTinh"]=="Nam") {
			  $male="checked";
			}
			else if ($customer["GioiTinh"]=="Nữ") {
			  $female="checked";
			}
			else{
			  $other="checked";
			}
			
			include_once('views/admin/customer/edit.php');
		}

		public function update(){
			$data = $_POST;
			
			unset($data['Update']);

			$customermodel = new Customer();
			$status = $customermodel->update($data);


			if($status==1){
				header('Location:?mod=customer&act=list');
			}
		}

		public function delete(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$status = $customermodel->Delete($MaKH);
			if($status==1){
				header('Location:?mod=customer&act=list');
			}
		}

		

		
	}

 ?>